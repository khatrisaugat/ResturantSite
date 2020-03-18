<?php
  if (isset($_POST['submit']) && $_POST['submit']=='submit') {
    unset($_POST['submit']);
    $obj->Insert("headings",$_POST);
    $_SESSION['msg']='data Successfully inserted';
  }
  $h_types=$obj->select("heading_type");
 ?>
<h1>Add Headings in Page</h1>
<div class="col-sm-6">
  <?php if (isset($_SESSION['msg'])) {?>
    <div class="alert alert-success">
      <?=$_SESSION['msg'];?>
    </div>
  <?php } ?>

  <form class="form-group" action="" method="post">
    <label for="h_type" class="label label-primary">Heading type</label>
    <select class="form-control" name="h_type">
      <option value="" selected>>-Select-<</option>
      <?php foreach ($h_types as $value) { ?>
        <option value="<?=$value['htid']?>"><?=$value['h_type']?></option>
    <?php  } ?>
  </select><br>
    <label for="heading" class="label label-primary">Heading name</label>
    <input type="text" name="heading" placeholder="Enter the heading you want to display" class="form-control">
    <br>
    <input type="submit" name="submit" value="submit" class="btn btn-primary">
  </form>
</div>
