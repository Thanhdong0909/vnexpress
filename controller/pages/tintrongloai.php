<?php
 $idLT=$_GET['idLT'];
 settype($idLT,"integer");
 $sotinmotrang=5; // mot trang se co 5 tin
 if(isset($_GET['page']))
 {    
    $page=$_GET['page'];
 }
 else{
    $page=1;
 }
$from=($page-1) * $sotinmotrang;

$list_loaitin=get_tin_from_loaitin_phantrang($idLT,$from,$sotinmotrang);
$soluongtin = count(get_tin_from_loaitin($idLT));
$pageTotal=ceil($soluongtin/$sotinmotrang);

  $nameTL_LT = breedCrumb($idLT);
?>
<div>
	Trang chủ >> <?php echo $nameTL_LT['TenTL'];?> >> <?php echo $nameTL_LT['Ten'];?>
</div>
<div class="box-cat">
	<div class="cat1">
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col0 col1">
            	<div class="news">
				<?php foreach($list_loaitin as $key=>$value):?>
                    <h3 class="title" ><a href="#"><?php echo $value['TieuDe'];?> </a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $value['urlHinh'];?>" align="left" />
                    <div class="des"><?php echo $value['TomTat'];?> </div>
                    <div class="clear"></div>
                 <?php endforeach;?>
				</div>
            </div>
            
        </div>
    </div>
</div>
<style type="text/css">
    #Phantrang a {
    background-color: #000;
    color: #FFO;
    padding: 5px;
    margin-right: 3px;
}
#Phantrang{
    text-align: center;
}
</style>
<div id="Phantrang">Xem tiếp<br><br>
    
    <?php for($i=1; $i <= $pageTotal; $i++) { ?>
        <a href="?p=tintrongloai&idLT=<?php echo $idLT;?>&page=<?php echo $i;?>" <?php if($i==$page) {echo "style='background-color:red'" ;}?>><?php echo $i." "?></a>
    <?php } ?>
     
</div>


















