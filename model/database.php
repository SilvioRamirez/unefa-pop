<?php
class Database
{	

    public static function StartUp()
    {	
    	$db_host = 'mysql.webcindario.com';
		$db_name = 'unefa';
		$db_user = 'unefa';
		$db_pass = 'Cel04161788328';

    	/*$db_host = 'localhost';
		$db_name = 'unefa';
		$db_user = 'root';
		$db_pass = '';*/

        $pdo = new PDO('mysql:host='.$db_host.';dbname='.$db_name.';charset=utf8',$db_user,$db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}