<?php
$keySearch=$_GET['q'];
$list_loaitin=getSearch($keySearch);

?>

<div class="box-cat">
	<div class="cat1">
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col0 col1">
            	<div class="news">
				  <?php foreach($list_loaitin as $key=>$value):?>
                    <h3 class="title" ><a href="?p=chitiettin&idTin=<?php echo $value['idTin'];?>"><?php echo $value['TieuDe'];?> </a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $value['urlHinh'];?>" align="left" />
                    <div class="des"><?php echo $value['TomTat'];?> </div>
                    <div class="clear"></div>
                 <?php endforeach;?>
				</div>
            </div>
            
        </div>
    </div>
</div>



















