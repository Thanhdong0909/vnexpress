<?php
 function getNew()
 {
 	// connet with database
 	$db = dataBase::getDB();
 	$query = 'SELECT * FROM tin ORDER BY idTin DESC LIMIT 0,1'; 
 	try {
 		$statement = $db->prepare($query);
 		$statement->execute();
 		$result = $statement->fetch();
 		$statement->closeCursor(); // close db 
 	} catch (PDOException $e) {
 		$err = $e->getMessage();
 		echo $err;
 		exit();
 	}
 	return $result;
 	// tra ve tin moi nhat
 }

 function getNew2()
 {
 	// connet with database
 	$db = dataBase::getDB();
 	$query = 'SELECT * FROM tin ORDER BY idTin DESC LIMIT 1,10'; 
 	try {
 		$statement = $db->prepare($query);
 		$statement->execute();
 		$result = $statement->fetchALL();
 		$statement->closeCursor(); // close db
 	} catch (PDOException $e) {
 		$err = $e->getMessage();
 		echo $err;
 		exit();
 	}
 	return $result; 
 }
 function getInformationViewMore()
 {
 	$db = dataBase::getDB();
 	$query = 'SELECT * FROM tin ORDER BY SolanXem DESC LIMIT 0,6';
 	try {
 		$statement = $db->prepare($query);
 		$statement->execute();
 		$result = $statement->fetchALL();
 		$statement->closeCursor();
 	} catch (PDOException $e) {
 		$err_mgs = $e->getMessage();
 		echo $err_mgs;
 		exit();
 	}
 	return $result;
 }

  function tinmoinhat_theoloaitin_mottin($idLoaitin)
 {
 	// connet with database
 	$db = dataBase::getDB();
 	$query = 'SELECT * FROM tin
 	WHERE idLT=:idLT 
 	ORDER BY idTin DESC LIMIT 0,1'; 
 	try {
 		$statement = $db->prepare($query);
 		$statement->bindValue(':idLT', $idLoaitin);
 		$statement->execute();
 		$result = $statement->fetch();
 		$statement->closeCursor(); // close db 
 	} catch (PDOException $e) {
 		$err = $e->getMessage();
 		echo $err;
 		exit();
 	}
 	return $result;
 	// tra ve tin moi nhat
 }

 function tinmoinhat_theoloaitin_bontin($idLoaitin)
 {
 	// connet with database
 	$db = dataBase::getDB();
 	$query = 'SELECT * FROM tin 
 	WHERE idLT=:idLT
 	ORDER BY idTin DESC LIMIT 1,6'; 
 	try {
 		$statement = $db->prepare($query);
 		$statement->bindValue(':idLT',$idLoaitin);
 		$statement->execute();
 		$result = $statement->fetchALL();
 		$statement->closeCursor(); // close db
 	} catch (PDOException $e) {
 		$err = $e->getMessage();
 		echo $err;
 		exit();
 	}
 	return $result; 
 }
function getNameCategory($idLt)
{
	$db=database::getDB();
	$query='SELECT Ten FROM loaitin
	WHERE idLT=:idLt
	'; 
	try {
			$statement=$db->prepare($query);
			$statement->bindValue(':idLt', $idLt);
			$statement->execute();
			$result=$statement->fetch();
			$statement->closeCursor();
			return $result;		
	}catch(PDOException $e)
	{
		$err_mgs = $e->getMessage();
		echo $err_mgs; 
	}

}
 function get_image_ads($position)
	{
		$db = database::getDB();
		$query=' SELECT * FROM quangcao WHERE vitri=:pos
		';
		try {
			$statement=$db->prepare($query);
			$statement->bindValue(':pos',$position);
			$statement->execute();
			$result=$statement->fetchALL();
			$statement->closeCursor();
			return $result;
			
		} catch (PDOException $e) {
			$err = $e->getMessage();
			echo $err;
		}
	}
function get_theloai()
{
	$db=database::getDB();
	$query = 'SELECT * FROM theloai';
	try {
			$statement = $db->prepare($query);
			$statement->execute();
			$result=$statement->fetchALL();
			$statement->closeCursor();
			return $result;
		
	} catch (PDOException $e) {
		$err = $e->getMessage();
		echo $err;	
	}
}
function get_loaitin_from_theloai($idTL)
{
	$db=database::getDB();
	$query='SELECT * FROM loaitin WHERE idTL=:idTL';
		try {
			$statement = $db->prepare($query);
			$statement->bindValue(':idTL', $idTL);
			$statement->execute();
			$result=$statement->fetchALL();
			$statement->closeCursor();
			return $result;
		
	} catch (PDOException $e) {
		$err = $e->getMessage();
		echo $err;	
	}
}

function get_tin_from_theloai($idTL)
{
	$db=database::getDB();
	$query='SELECT * FROM `tin` WHERE idTL=:idTL ORDER BY idTin DESC Limit 0,1';
	try{
		$statement=$db->prepare($query);
		$statement->bindValue(':idTL', $idTL);
		$statement->execute();
		$result = $statement->fetch();
		$statement->closeCursor();
		return $result;
		
	}catch (PDOException $e)
	{
		$err = $e->getMessage();
		echo $err;	
	}
}
function get_tin_from_theloai_haitin($idTL)
{
	$db=database::getDB();
	$query='SELECT * FROM `tin` WHERE idTL=:idTL ORDER BY idTin DESC Limit 1,2';
	try{
		$statement=$db->prepare($query);
		$statement->bindValue(':idTL', $idTL);
		$statement->execute();
		$result = $statement->fetchALL();
		$statement->closeCursor();
		return $result;
		
	}catch (PDOException $e)
	{
		$err = $e->getMessage();
		echo $err;	
	}
}
function get_tin_from_loaitin($idLT)
{
	$db=database::getDB();
	$query='SELECT * FROM `tin` WHERE idLT=:idLT
	ORDER BY idTin DESC';
	try{
		$statement=$db->prepare($query);
		$statement->bindValue(':idLT', $idLT);
		$statement->execute();
		$result = $statement->fetchALL();
		$statement->closeCursor();
		return $result;
		
	}catch (PDOException $e)
	{
		$err = $e->getMessage();
		echo $err;	
	}
}

function get_tin_from_loaitin_phantrang($idLT, $tinbatdau, $sotinmottrang)
{
	$db=database::getDB();
	$query="SELECT * FROM `tin` WHERE idLT=:idLT
	ORDER BY idTin DESC
	LIMIT $tinbatdau,$sotinmottrang
	";
	try{
		$statement=$db->prepare($query);
		$statement->bindValue(':idLT', $idLT);
		// $statement->bindValue(':tinbatdau',$tinbatdau); 
		// $statement->bindValue(':sotinmottrang',$sotinmottrang);
		$statement->execute();
		$result = $statement->fetchALL();
		$statement->closeCursor();
		return $result;
	}catch (PDOException $e)
	{
		$err = $e->getMessage();
		echo $err;	
	}
}

function breedCrumb($idLT)
{
	$db=database::getDB();
	$query='SELECT Ten, TenTL FROM loaitin 
	INNER JOIN theloai 
	ON loaitin.idLT=theloai.idTL 
	WHERE idLT=:idLT';
	try{
		$statement=$db->prepare($query);
		$statement->bindValue(':idLT', $idLT);
		$statement->execute();
		$result = $statement->fetch();
		$statement->closeCursor();
		return $result;
		
	}catch (PDOException $e)
	{
		$err = $e->getMessage();
		echo $err;	
	}
}
?>