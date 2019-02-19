
<?php foreach($img_quangcao as $key=>$value):?>
	<a href="<?php echo $value['Url'];?>">
	<img width="280" src="upload/quangcao/<?php echo $value['urlHinh'];?>" />
	</a>
	<div style="height:10px"></div>
<?php endforeach;?>