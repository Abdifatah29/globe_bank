<?php

require_once '../../../private/Initialised.php';
$page_title = 'Pages';
include SHARED_PATH . '/staff_header.php';

$pages = find_pages();

?>

<div id="content">
    <div class="pages listing">
        <h1><?= $page_title?></h1>
        <div class="actions"><a class="action" href="<?= setUrlPath('/staff/pages/new.php')?>">Create New Page</a></div>
        <table class="list">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Subject ID</th>
                    <th>Position</th>
                    <th>Visible</th>
                    <th>Name</th>
                    <th>Content</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
<?php
    while ($page = mysqli_fetch_assoc($pages)) {
?>
    <tr>
        <td><?= htmlChars($page['id'])?></td>
        <td><?= htmlChars($page['subject_id'])?></td>
        <td><?= htmlChars($page['position'])?></td>
        <td><?= $page['visible'] ? 'true' : 'false' ?></td>
        <td><?= htmlChars($page['menu_name'])?></td>
        <td><?= htmlChars($page['content'])?></td>
        <td><a class="action" href="<?= setUrlPath('/staff/pages/show.php?id=' . htmlChars(eUrl($page['id']))) ?>">View</a></td>
        <td><a class="action" href="<?= setUrlPath('/staff/pages/edit.php?id=' . htmlChars(eUrl($page['id']))) ?>">Edit</a></td>
        <td><a class="action" href="">Delete</a></td>
    </tr>
<?php
    }
?>
            </tbody>
        </table>
    </div>
<?php
    mysqli_free_result($pages);
?>
</div>
</body>
</html>

<?php
require_once SHARED_PATH . '/staff_footer.php';

