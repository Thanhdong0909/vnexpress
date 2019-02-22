<?php foreach( $theloai_menu as $key=>$value): ?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo $value['TenTL']; ?></a>
        </div>
        <div class="child-cat">
		<?php $loaitin_by_theloai=get_loaitin_from_theloai($value['idTL']); ?>
		<?php foreach($loaitin_by_theloai as $key=>$value) :?>
        	<a href="?p=tintrongloai&idLT=<?php echo $value['idLT'];?>"><?php  echo $value['Ten'];?></a>
         <?php endforeach;?>
        </div>
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
				<?php $tin_by_theloai = get_tin_from_theloai($value['idTL']); ?>
                    <h3 class="title" ><a href="?p=chitiettin&idTin=<?php echo $tin_by_theloai['idTin'];?>"><?php echo $tin_by_theloai['TieuDe'];?> </a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $tin_by_theloai['urlHinh'];?>" align="left" />
                    <div class="des"><?php echo $tin_by_theloai['TomTat'];?></div>
                    <div class="clear"></div>
				</div>
            </div>
            <div class="col2">
			<?php $tin_by_theloai_haitin = get_tin_from_theloai_haitin($value['idTL']); ?>
			<?php foreach($tin_by_theloai_haitin as $key=>$value) :?>
             <p class="tlq">
			 <a href="#"> <?php echo $value['TieuDe'];?> </a>
                </a></p>
			 <?php endforeach; ?>
            </div>    
        </div>
    </div>
</div>
<div class="clear"></div>
<?php endforeach;?>














