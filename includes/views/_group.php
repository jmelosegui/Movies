<li <?php echo ($active == $group->groupId ? 'data-theme="a"' : '') ?>>
<a href="?group=<?php echo $group->groupCategory ?>&id=<?php echo $group->groupId?>" data-transition="fade">
	<?php echo $group->groupName ?>
    <span class="ui-li-count"><?php echo $group->moviesCount?></span></a>
</li>