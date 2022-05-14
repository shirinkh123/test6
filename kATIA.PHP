<?php
require_once "a.php";//include

$db = new a();//meshtane mn sog dbConnection
?><!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style/contact.css" />
    <link rel="icon" href="img/favicon.ico" type="image/png" sizes="16x16" />
    <title>Kolna M3k</title>
</head>

<body>
<div id="existingSupp">
            <?php
               $res = $db->getAllCities();//m3ra5 dename ll sherak
            ?>
                    City:<select name="City">
                        <?php while($row = $res->fetch(PDO::FETCH_ASSOC)) :?>
                            <option><?php echo $row['name_c']; ?></option>
                        <?php endwhile; ?>
                    </select>

                     </body>
 
 </html>