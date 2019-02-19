<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#">Tin xem nhiều</a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        	
            <?php foreach ($informationViewMore as $key => $value) :?>
                   <div class="col1">
                <div class="news">
                  <img class="images_news" src="upload/tintuc/<?php echo $value['urlHinh'];?>"  />
                    <h3 class="title" ><a href="?p=chitiettin&id=<?php echo $value['idTin'];?>"><?php echo $value['TieuDe'];?></a><span class="hit"><?php echo $value['SoLanXem'];?></span></h3>
                    <div class="clear"></div>
                </div>
            </div>
            <?php endforeach; ?>   
            
        </div>
    </div>
</div>
<div class="clear"></div>

