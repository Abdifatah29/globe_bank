
<?php

require_once('../../private/Initialised.php');
$page_title = 'Staff Menu';
include SHARED_PATH . '/staff_header.php';
?>
    <div id="content">
        <div id="main-menu">
            <h2>Main Menu</h2>
            <ul>
                <li><a href="<?= setUrlPath("staff/subjects/index.php")?>">Subjects</a></li>
                <li><a href="<?= setUrlPath("staff/pages/index.php")?>">Pages</a></li>
            </ul>
        </div>
    </div>
<?php

include SHARED_PATH  . '/staff_footer.php';

?>
</body>
</html>
