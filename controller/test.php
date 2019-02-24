<?php
  if(isset($_GET['idTin']))
  {
    $idTin = $_GET['idTin'];
  }
  else{
    $idTin=1;
  }
  $tinchitiet=get_chitiettin($idTin);
  $loaitin=$tinchitiet['idLT'];
   $tincungloai = get_tincungloai($idTin,$loaitin);
   echo count($tincungloai);
 ?>