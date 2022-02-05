<?php

require_once '../../../private/Initialised.php';

if (!isset($_GET['id'])) {
    header('Location: ' . setUrlPath('/staff/pages/index.php'));
}

$id = $_GET['id'];
$name = '';
$position = '';
$visible = '';

if (isset($_POST['submit'])) {
    $name = $_POST['menu_name'] ?? '';
    $position = $_POST['position'] ?? '';
    $visible = $_POST['visible'] ?? '';
}

$page_title = 'Edit Page';
include SHARED_PATH . '/staff_header.php';

?>

<div id="content">
  <a class="back-link" href="<?php echo setUrlPath('/staff/pages/index.php'); ?>">&laquo; Back to List</a>
  <div class="page edit">
    <h1>Edit page</h1>
    <form action="" method="post">
      <dl>
        <dt>Menu Name</dt>
        <dd><input type="text" name="menu_name" required value="<?= htmlChars($name) ?>" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1" <?= $position == '1' ? 'selected' : ''; ?>>1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1" <?= $visible == '1' ? 'checked' : ''; ?> />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" name="submit" value="Edit Page" />
      </div>
    </form>
  </div>
</div>

<?php

include SHARED_PATH . '/staff_footer.php';
