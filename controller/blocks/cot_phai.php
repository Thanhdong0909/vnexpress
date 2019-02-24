<!-- box cat -->
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo $nameCategory['Ten'];?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
                <h3 class="title" ><a href="?p=chitiettin&idTin=<?php echo $NewInformationByCategoryId['idTin'];?>"> <?php echo $NewInformationByCategoryId['TieuDe'];?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $NewInformationByCategoryId['urlHinh']; ?>" align="left" />
                    <div class="des"><?php echo $NewInformationByCategoryId['TomTat'];?> </div>
                  
                  
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
                 <?php foreach($NewInformationByCategoryId_4tin as $key=>$value):?>
                    <h3 class="tlq"><a href="?p=chitiettin&idTin=<?php echo $value['idTin'];?>"><?php echo $value['TieuDe'];?></a></h3>
                <?php endforeach ?>
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->

