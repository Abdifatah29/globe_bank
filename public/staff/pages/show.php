<?php

require_once '../../../private/Initialised.php';
$page_title = 'Show Page';
$id = $_GET['id'] ?? '1';

include SHARED_PATH . '/staff_header.php';

?>

<div id="content">
    <a href="<?= setUrlPath('/staff/pages/index.php')?>"> &laquo; Back to List</a>
    <div class="page show">
        <p>page ID: <?= htmlChars($id)?></p>
    </div>
</div>

<?php

include SHARED_PATH . '/staff_footer.php';
