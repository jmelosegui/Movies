<li class="movie">	
	<img src="<?php echo extractImageUrl($movie->c08) ?>" alt="<?php echo $movie->c00 ." (" . $movie->c07 .")" ?>" />		
	<div class="data">
		<label><?php echo $movie->c00 ." " ?></label>
		<b>(<?php echo $movie->c07?>)</b>	
	</div>
<!--
	<div class="data">
		<img style="width:50px;height:34px;" src="assets/images/xbmc/audiocodec/dtshd_hra.png"/>
		<img style="width:68px;height:34px;" src="assets/images/xbmc/resolution/1080.png"/>
		<img style="width:50px;height:34px;" src="assets/images/xbmc/videocodec/msmpeg4v1.png"/>
		<img style="width:50px;height:34px;" src="assets/images/xbmc/aspectratio/1.78.png"/>
	</div>
-->
	<span class="sinopsis"><?php echo $movie->c01 ?></span>
	
</li>