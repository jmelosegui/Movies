<?php render('_header', array('title' => $title)) ?>

    <div  <?php echo ($_GET['group'] == all) ? 'style="margin-top: 27px"' : 'class="rightColumn"' ?> >
        <ul data-role="listview" data-inset="true" data-theme="c"
            data-dividertheme="c" <?php echo ($_GET['group'] == all) ? 'data-filter="true" data-filter-placeholder="Search movies..."' : '' ?>>
            <?php render($movies) ?>
        </ul>
    </div>

<?php if ($_GET['group'] != all) { ?>

    <div class="leftColumn">
        <ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
            <li data-role="list-divider"><?php echo $_GET['group'] ?></li>
            <?php render($groups, array('active' => $_GET['id'])) ?>
        </ul>
    </div>

<?php
}

render('_footer')

?>