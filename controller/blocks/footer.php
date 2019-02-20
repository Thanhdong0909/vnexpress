<div class="thongtin-title">
	<div class="right">
    
          <a href="#"><span class="SetHomePage ico_respone_01">&nbsp;</span>Đặt VnExpress làm trang chủ</a>
          
          <a href="#"><span class="top">&nbsp;</span>Về đầu trang</a>
       
    </div>
</div>
<div class="thongtin-content">

<?php foreach($theloai_menu as $key=>$value):?>
	<ul class="ulBlockMenu">
                <li class="liFirst">
                   <h2>
                      <a class="mnu_giaoduc" href="#"><?php echo $value['TenTL'];?></a>
                   </h2>
                </li>
              <?php $loaitin_by_theloai=get_loaitin_from_theloai($value['idTL']); ?>
              <?php foreach($loaitin_by_theloai as $key=>$value):?>
                <li class="liFollow">
                   <h2>
                      <a href="?p=tintrongloai&idLT=<?php echo $value['idLT'];?>"><?php echo $value['Ten'];?></a>
                   </h2>
                </li>
              <?php endforeach;?>
             </ul>
<?php endforeach; ?>   
</div>




