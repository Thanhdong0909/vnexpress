<div id="slide-left">
        	<div id="slideleft-main">
                <img src="upload/tintuc/<?php echo $new['urlHinh']; ?>"  /><br />
                <h2 class="title"><a href="?p=chitiettin&idTin=<?php echo $new['idTin'];?>"><?php echo $new['TieuDe']?></a> </h2>
                <div class="des">
                    <?php echo $new['TomTat'];?> 
                </div>        
        	</div>

            <div id="slideleft-scroll">
            	
              <div class="content_scoller width_common">

            <ul>
              <?php foreach ($new2 as $key => $value) : ?>              
              <li>
                <div class="title_news">
               		<a href="?p=chitiettin&idTin=<?php echo $value['idTin'];?>" class="txt_link"> <?php echo $value['TieuDe'];?> </a> 
                </div>
              </li>
             <?php endforeach;?>
            </ul>
            </div>			
            
			<div id="gocnhin">
                <img alt="" src="http://khoapham.vn/images/logoKhoaPham.png" width="100%"></a>
                <div class="title_news"></div>
            </div>
                
            </div>
</div>


     