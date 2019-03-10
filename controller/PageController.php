<?php
include '../model/model_db.php';
include '../model/model_page.php';

$action = filter_input(INPUT_POST, 'action');
if(empty($action))
{
	$action = filter_input(INPUT_GET, 'action');
	if(empty($action))
	{
		$action = "showHome";
	}
}
switch ($action) {
	case 'showHome':
	 	$new = getNew();
	 	$new2 =  getNew2();
	 	$idloaitin = 2;
	 	$informationViewMore = getInformationViewMore();
	 	$NewInformationByCategoryId = tinmoinhat_theoloaitin_mottin($idloaitin); 
	 	$NewInformationByCategoryId_4tin=tinmoinhat_theoloaitin_bontin($idloaitin);
	 	$nameCategory = getNameCategory($idloaitin);
	 	//print_r($nameCategory);
	 	 $img_quangcao = get_image_ads(1);
	 	 $thongtin_doanhnghiep = get_image_ads(2);
	 	 //data cho menu
	 	 $theloai_menu=get_theloai();
		include('../view/index.php');
		break;
	
	default:
		# code...
		break;
}
?>