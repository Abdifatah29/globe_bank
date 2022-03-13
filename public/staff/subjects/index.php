
<?php

require_once('../../../private/Initialised.php');
$page_title = 'Subjects';
include SHARED_PATH . '/staff_header.php';


/*
  mysqli_fetch_row
    - Results are in standard array
    - ['1', 'About', ....]
    - Keys are integers
    - echo $subject[1]


  mysqli_fetch_assoc
    - Results are in an assoc array
    - [
        'id' => '1',
        'name' => ...
        .....
      ]
    - keys are column names
    - echo 


  - mysqli_fetch_array
  - Results are in either or both types of array
  - MYSQL_NUM, MYSQL_ASSOC MYSQL_BOTH
*/

$sets = find_subbjects();

?>

<div id="content">
  <div class="subjects listing">
    <h1><?= $page_title ?></h1>

    <div class="actions">
      <a class="action" href="<?= setUrlPath('/staff/subjects/new.php')?>">Create New Subject</a>
    </div>

  	<table class="list">
  	  <tr>
        <th>ID</th>
        <th>Position</th>
        <th>Visible</th>
  	    <th>Name</th>
  	    <th>&nbsp;</th>
  	    <th>&nbsp;</th>
        <th>&nbsp;</th>
  	  </tr>

<?php
    while($subject = mysqli_fetch_assoc($sets))
    {
?>
        <tr>
          <td><?= htmlChars($subject['id']); ?></td>
          <td><?= htmlChars($subject['position']); ?></td>
          <td><?= $subject['visible'] ? 'true' : 'false'; ?></td>
    	    <td><?= htmlChars($subject['menu_name']); ?></td>
          <td><a class="action" href="<?= setUrlPath("/staff/subjects/show.php?id=" . htmlChars(eUrl($subject['id'])))?>">View</a></td>
          <td><a class="action" href="<?= setUrlPath("/staff/subjects/edit.php?id=" . htmlChars(eUrl($subject['id'])))?>">Edit</a></td>
          <td><a class="action" href="">Delete</a></td>
        </tr>
<?php
    }
?>
  	</table>
  </div>
  <?php
    mysqli_free_result($sets);
  ?>
</div>
</body>
</html>
<?
include SHARED_PATH . '/staff_footer.php';
