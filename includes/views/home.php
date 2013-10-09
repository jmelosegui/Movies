<?php render('_header', array('title' => $title)) ?>
<p>This site use the XBMC MySql Database, PHP, and jQuery mobile.</p>

<div data-role="fieldcontain" style="width:100%">
    <label for="groupSelect" class="select">Choose grouping method</label>
    <select name="groupSelect" id="groupSelect" data-mini="true" data-inline="true" data-native-menu="false">
        <option value="./?group=genre"<?php echo($_GET['group'] == 'genre' ? 'selected' : '') ?>>Genre</option>
        <option value="./?group=director" <?php echo($_GET['group'] == 'director' ? 'selected' : '') ?>>Director
        </option>
        <option value="./?group=year" <?php echo($_GET['group'] == 'year' ? 'selected' : '') ?>>Year</option>
        <option value="./?group=set"<?php echo($_GET['group'] == 'set' ? 'selected' : '') ?>>Set</option>
        <option value="./?group=all"<?php echo($_GET['group'] == 'all' ? 'selected' : '') ?>>All Movies</option>
    </select>
</div>

<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
    <li data-role="list-divider">Choose a movie <?php echo ($_GET['group']) ? $_GET['group'] : 'genre' ?></li>
    <?php render($content) ?>
</ul>

<?php render('_footer') ?>
