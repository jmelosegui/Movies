<li class="movie">
    <img src="<?php echo extractImageUrl($movie->image) ?>"
         alt="<?php echo $movie->name . " (" . $movie->year . ")" ?>"/>

    <div class="data">
        <label><?php echo $movie->name . " " ?></label>
        <b>(<?php echo $movie->year ?>)</b>
    </div>

    <span class="sinopsis"><?php echo $movie->sinopsis ?></span>
    <!--
    <div class="properties">
        <img src="assets/images/xbmc/resolution/<?php echo $movie->resolution ?>.png"/>
        <img src="assets/images/xbmc/videocodec/<?php echo $movie->videocodec ?>.png"/>
        <?php

        foreach (explode(",", $movie->audio) as $audiocodec) {
        ?>
            <img src="assets/images/xbmc/audiocodec/<?php echo $audiocodec ?>.png"/>
        <?php
        }

        ?>


        <img style="width:30px;height:20.4px;" src="assets/images/xbmc/aspectratio/1.78.png"/>

    </div>
    -->
</li>