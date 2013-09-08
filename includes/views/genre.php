<?php render('_header',array('title'=>$title))?>

<div class="rightColumn">
	<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="c">
        <?php render($movies) ?>
    </ul>
</div>

<div class="leftColumn">
    <ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
        <li data-role="list-divider"><?php echo $_GET['group']?></li>
        <?php render($genres,array('active'=>$_GET['id'])) ?>
    </ul>
</div>


<?php render('_footer')?>