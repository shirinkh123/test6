<?php
//Function which validates an email address
function checkEmail($email,&$errArray)
{
	if(!empty($email))
	{
		if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$errArray[]="שגיאה בכתובת המייל";
		}
	}
	else
	{
		$errArray[]="המייל לא יכול להיות ריק זהו שדה חובה";
	}
}
function checkname($name,&$errArray)
{
	if(!empty($name))
	{
		if(!preg_match("/^[a-zA-Z]{2,30}$/",$name))
		{
			$errArray[]="השם יכול להיות מורכב מאותיות באנגלית בלבד ";
		}
	}
	else
	{
		$errArray[]="שם לא יכול להיות ריק זהו שדה חובה";
	}
}

function check($type,$errArray)
{
	if(empty($type))
		$errArray[]="מורה/תלמיד לא יכול להיות ריק שדה זה הוא חובה";	
}

function message($message,$errArray)
{
	if(empty($type))
		$errArray[]="הודעה לא יכולה להיות ריקה";	
}
function subject($message,$errArray)
{
	if(empty($type))
		$errArray[]="שדה נושא לא יכול להיות ריק";	
}

function checkkorse($kors,$errArray)
{
	if(empty($kors))
		$errArray[]=" שדה קורס לא יכול להיות ריק ";	
	
		
}
function checkmkhir($mkhir,$errArray)
{
	if(!empty($mkhir))
	{
		if(!is_numeric($mkhir))
		{
			$errArray[]="מחיר יכול להיות רק מספר חיובי";
		}
	}
		else
		{
			$errArray[]="שדה מחיר הוא חובה ולא יכול להיות ריק";
		}
	if($mkhir>600||$mkhir<=0)
		$errArray[]="מחיר חייב להיות בין 1-600";	
}

function  checktoaar($to2ar,$errArray)
{
	if(empty($to2ar)) 
		$errArray[]="שדה השכלה הוא שדה חובה ולא יכול להיות ריק";	
	
}
function checklemod($lemod,$errArray)
{
	if(empty($lemod))
		$errArray[]="מקצוע לא יכול להיות ריק  ";
	
}
function checkPassword($password,&$errArray)
{
	if(!empty($password))
	{
		if(!preg_match("/^[a-zA-Z0-9]{5,15}$/",$password))
		{
			$errArray[]="הסיסמא יכולה להיות בין 5-15 תווים";
		}
	}
	else
	{
		$errArray[]="שדה סיסמא לא יכול להיות ריק זהו שדה חובה";
	}
}
function checkzehot($zehot,&$errArray)
{
	if(!empty($zehot))
	{
		if(!preg_match("/^[0-9]{9}$/",$zehot))
		{
			$errArray[]="ת.ז חייבת להכיל 9 ספרות";
		}
	}
	else
	{
		$errArray[]="ת.ז לא יכולה להיות ריקה";
	}
}
function checkphone($phone,&$errArray)
{
	if(!empty($phone))
	{
		if(!preg_match("/^[0-9]{10}$/",$phone))
		{
			$errArray[]="פלאפון נייד חייב להיות מורכב מ 10 מספרים";
		}
	}
	else
	{
		$errArray[]="שדה פלאלפון הוא שדה חובה ולא יכול להיות ריק";
	}
}
function checkcity($city,$errArray)
{
	if(empty($city))
		$errArray[]="אנא בחר עיר זהו שדה חובה";	
}



?>