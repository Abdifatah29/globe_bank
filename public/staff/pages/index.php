<?php

require_once '../../../private/Initialised.php';
$page_title = 'Pages';
include SHARED_PATH . '/staff_header.php';

$pages = [
    [
        'id' => 1,
        'position' => 1,
        'visible' => true,
        'name' => 'About',
    ],
    [
        'id' => 2,
        'position' => 2,
        'visible' => true,
        'name' => 'Contact',
    ],
    [
        'id' => 3,
        'position' => 3,
        'visible' => false,
        'name' => 'Experience',
    ],
    [
        'id' => 4,
        'position' => 4,
        'visible' => true,
        'name' => 'Skills',
    ]
]
?>

<div id="content">
    <div class="pages listing">
        <h1><?= $page_title?></h1>
        <div class="actions"><a class="action" href="">Create New Page</a></div>
        <table class="list">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Position</th>
                    <th>Visible</th>
                    <th>Name</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>
<?php
    foreach ($pages as $page) {
?>
    <tr>
        <td><?= htmlChars($page['id'])?></td>
        <td><?= htmlChars($page['position'])?></td>
        <td><?= $page['visible'] ? 'true' : 'false' ?></td>
        <td><?= htmlChars($page['name'])?></td>
        <td><a class="action" href="<?= setUrlPath('/staff/pages/show.php?id=' . htmlChars(eUrl($page['id']))) ?>">View</a></td>
        <td><a class="action" href="">Edit</a></td>
        <td><a class="action" href="">Delete</a></td>
    </tr>
<?php
    }
?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>

<?php
require_once SHARED_PATH . '/staff_footer.php';

