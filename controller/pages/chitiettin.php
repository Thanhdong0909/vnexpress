<?php
  if(isset($_GET['idTin']))
  {
    $idTin = $_GET['idTin'];
  }
  else{
    $idTin=1;
  }
  Demsolanxemtin($idTin); // tang so lan xem tin len 1
  $tinchitiet=get_chitiettin($idTin);
  $loaitin=$tinchitiet['idLT'];
   $tincungloai = get_tincungloai($idTin,$loaitin);
 ?>

<h1 class="title"><?php echo $tinchitiet['TieuDe'];?></h1>
<div class="des">
<?php echo $tinchitiet['TomTat'];?>
</div>
<div class="chitiet">
<!--noi dung-->
 <?php echo $tinchitiet['Content'];?>
<!--//noi dung-->
</div>
<div class="clear"></div>
<a class="btn_quantam" id="vne-like-anchor-1000000-3023795" href="#" total-like="21"></a>
<div class="number_count"><span id="like-total-1000000-3023795"> <?php echo $tinchitiet['SoLanXem'];?></span></div>
<!--face-->
<div class="left"><div class="fb-like fb_iframe_widget" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true" data-href="http://vnexpress.net/tin-tuc/the-gioi/ukraine-gianh-kiem-soat-nhieu-khu-vuc-gan-hien-truong-mh17-3023795.html" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=&amp;href=http%3A%2F%2Fvnexpress.net%2Ftin-tuc%2Fthe-gioi%2Fukraine-gianh-kiem-soat-nhieu-khu-vuc-gan-hien-truong-mh17-3023795.html&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=false&amp;show_faces=true&amp;width=450"></div></div>
<!--twister-->
<div class="left"></div>
<!--google-->
<div class="left"><div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px; background: transparent;"></div></div>

<div class="clear"></div>

<div id="tincungloai">
<div class="clear"></div>
	<ul>
    	<?php foreach ($tincungloai as $key => $value) : ?>
        <li>       
             <a href="?p=chitiettin&idTin=<?php echo $value['idTin'];?>"><img src="upload/tintuc/<?php echo $value['urlHinh'];?>" width=280px height=280px></a> <br />
       <a class="title" href="?p=chitiettin&idTin=<?php echo $value['idTin'];?>"><?php echo $value['TieuDe'];?></a>
             <span class="no_wrap">   
        </li>
        <?php endforeach;?>
    </ul>
</div>
<div class="clear"></div> 





