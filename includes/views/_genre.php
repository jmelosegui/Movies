<li <?php echo ($active == $genre->idGroup ? 'data-theme="a"' : '') ?>>
<a href="?group=<?php echo $genre->jjj ?>&id=<?php echo $genre->idGroup?>" data-transition="fade">
	<?php echo $genre->strGroup ?>
    <span class="ui-li-count"><?php echo $genre->moviesCount?></span></a>
</li>