<?php

require_once '../../../private/Initialised.php';
$page_title = 'Show Subject';
$id = $_GET['id'] ?? '1';

$subject = find_subject_by_id($id);
include SHARED_PATH . '/staff_header.php';

?>

<div id="content">
    <a href="<?= setUrlPath('/staff/subjects/index.php')?>"> &laquo; Back to List</a>
    <div class="subject show">
        <h1>Subject: <?= htmlChars($subject['menu_name'])?></h1>
        <div class="attributes">
            <dl>
                <dt>Menu Name</dt>
                <dd><?= htmlChars($subject['menu_name']); ?></dd>
            </dl>
            <dl>
                <dt>Position</dt>
                <dd><?= htmlChars($subject['position']); ?></dd>
            </dl>
            <dl>
                <dt>Visible</dt>
                <dd><?= $subject['visible'] == '1' ? 'true' : 'false'; ?></dd>
            </dl>
        </div>
    </div>
</div>
<?php

include SHARED_PATH . '/staff_footer.php';
