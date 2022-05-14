

<?php

class backup
{
    
    function backupDatabaseTables($DBH){
      
       

        //Script Variables
        $compression = false;//דחיסה ביטוי לוגי שקר
        $BACKUP_PATH = "backup-";
        $nowtimename =time();//מספר יחודי

        
        //create/open files
        if ($compression) {
        $zp = gzopen($BACKUP_PATH.$nowtimename.'.sql.gz', "a9");//פותח קובץ לקריאה או כתיבה .gz (gzip) 
        // יכול לקרוא קבצים לא רק מסוג .GZ
        //עובד עם דחיסה מרבית של מעל 50 קבצים בשניה
        } else {
        $handle = fopen($BACKUP_PATH.$nowtimename.'.txt','a+');//a+ ממקם פוינטר בסוף קובץ טקסט
        //הוסף / עדכן: פתח קובץ לעדכון (הן לקלט והן לפלט) פעולות מיקום מחדש , הקובץ נוצר אם הוא לא קיים
        //  משפיעות על פעולות הקלט הבאות, אך פעולות הפלט מעבירות את המיקום חזרה לסוף הקובץ..
        }//חייב נקודה טקסט ולא SQL כי זה לא מעתיק עברית טוב
        
        
        //כל סוגי המספרים הרשומים בבסיס הנתונים מכל הסוגים
        $numtypes=array('tinyint','smallint','mediumint','int','bigint','float','double','decimal','real');
        
        //לקיחת כל הטבלאות מהבסיס נתונים
        if(empty($tables)) {
        $pstm1 = $DBH->ShowTable();//בחירת כל הטבלאות ב SQL
        while ($row = $pstm1->fetch(PDO::FETCH_NUM)) {
        $tables[] = $row[0];//מערך שמות של הטבלאות מבחוץ!
     
        }
        } else {
        $tables = is_array($tables) ? $tables : explode(',',$tables);//חילוק הנתונים ע"י פסיק שמפריד בניהם
        }
        
        //cycle through the table(s)
        
        foreach($tables as $table) {
        $result = $DBH->SelectTable($table);
        $num_fields = $result->columnCount();//ספירת עמודות בכל טבלה
        $num_rows = $result->rowCount();//ספירת שורות בכל טבלה
        
        $return="";
        //uncomment below if you want 'DROP TABLE IF EXISTS' displayed
        //$return.= 'DROP TABLE IF EXISTS `'.$table.'`;'; 
        
        
        //table structure
        $pstm2 = $DBH->SelecTtable($table);
        $row2 = $pstm2->fetch(PDO::FETCH_NUM);
        $ifnotexists = str_replace('CREATE TABLE', 'CREATE TABLE IF NOT EXISTS', $row2[1]);
        $return.= "\n\n".$ifnotexists.";\n\n";
        
      
        if ($compression) {
        gzwrite($zp, $return);
        } else {
        fwrite($handle,$return);
        }
        $return = "";
        
        //insert values
        if ($num_rows){
        $return= "'INSERT INTO `"."$table"."` (";//הוספת פתיח בתוך קובץ גיבוי
        $pstm3 = $DBH->ShowTableColums($table);
        $count = 0;
        $type = array();
        
        while ($rows = $pstm3->fetch(PDO::FETCH_NUM)) {
        
        if (stripos($rows[1], '(')) {$type[$table][] = stristr($rows[1], '(', true);//חלוקה של שורות לפי סוגריים
        } else $type[$table][] = $rows[1];
        
        $return.= "`".$rows[0]."`";
        $count++;
        if ($count < ($pstm3->rowCount())) {
        $return.= ", ";
        }
        }
        
        $return.= ")".' VALUES';
        
        if ($compression) {
        gzwrite($zp, $return);
        } else {
        fwrite($handle,$return);
        }
        $return = "";
        }
        $count =0;
        while($row = $result->fetch(PDO::FETCH_NUM)) {
        $return= "\n\t(";
        
        for($j=0; $j<$num_fields; $j++) {
        
        //$row[$j] = preg_replace("\n","\\n",$row[$j]);
        
        
        if (isset($row[$j])) {
        
        //if number, take away "". else leave as string
        if ((in_array($type[$table][$j], $numtypes)) && (!empty($row[$j]))) $return.= $row[$j] ; else $return.= $DBH->Quote($row[$j]); //בוחר תווים מיוחדים במחרוזת הקלט במקום ממש שאילתה QOUTE
        
        } else {
        $return.= 'NULL';
        }
        if ($j<($num_fields-1)) {
        $return.= ',';
        }
        }
        $count++;
        if ($count < ($result->rowCount())) {
        $return.= "),";
        } else {
        $return.= ");";
        
        }
        if ($compression) {
        gzwrite($zp, $return);
        } else {
        fwrite($handle,$return);
        }
        $return = "";
        }
        $return="\n\n-- ------------------------------------------------ \n\n";
        if ($compression) {
        gzwrite($zp, $return);
        } else {
        fwrite($handle,$return);
        }
        $return = "";
        }
        $error1= $pstm2->errorInfo();
        $error2= $pstm3->errorInfo();
        $error3= $result->errorInfo();
        echo $error1[2];
        echo $error2[2];
        echo $error3[2];
        
        if ($compression) {
        gzclose($zp);//סגירת קבצים
        } else {
        fclose($handle);
        }
}
}
?>