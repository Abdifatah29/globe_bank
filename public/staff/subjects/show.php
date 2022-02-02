<?php

require_once '../../../private/Initialised.php';
$page_title = 'Show Subject';
$id = $_GET['id'] ?? '1';

include SHARED_PATH . '/staff_header.php';

?>

<div id="content">
    <a href="<?= setUrlPath('/staff/subjects/index.php')?>"> &laquo; Back to List</a>
    <div class="subject show">
        <p>page ID: <?= htmlChars($id)?></p>
    </div>
</div>
<?php

include SHARED_PATH . '/staff_footer.php';
