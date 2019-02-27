<?php
//step1
class dataBase{
	private static $dsn='mysql:host=localhost;dbname=db_vnexpress';
	private static $username = 'root';
	private static $password = '';
	// private static $dsn='mysql:host=sql108.byethost14.com;dbname=b14_23520896_ptd';
	//  private static $username = 'b14_23520896';
	//  private static $password = 'dangthuytram261142';
	private static $db;
	private static $option = array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8");

	public static function getDB()
	{
		if(!isset($db))
		{
			try{
					self::$db = new PDO(self::$dsn, self::$username,self::$password,self::$option);
				} 
			catch(PDOEXception $e)
				{
					$err_message = $e->getMessage();
					echo $err_message;
					exit;
				}	
		}
		return self::$db;
	}
}

?>