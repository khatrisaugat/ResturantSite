<?php
  if (isset($_POST['submit']) && $_POST['submit']=='submit') {
    unset($_POST['submit']);
    $obj->Insert("content",$_POST);
    $_SESSION['msg']='data Successfully inserted';
  }
  $headings=$obj->Select("headings");
 ?>
<h1>Add Headings in Page</h1>
<div class="col-sm-6">
  <?php if (isset($_SESSION['msg'])) {?>
    <div class="alert alert-success">
      <?=$_SESSION['msg'];?>
    </div>
  <?php } ?>

  <form class="form-group" action="" method="post">
    <label for="heading" class="label label-primary">Parent Heading</label>
    <select class="form-control" name="mid">
      <option selected disabled>---Select---</option>
      <?php foreach ($headings as $heading) { ?>
        <option value="<?=$heading['hid']?>"><?=$heading['heading'];?></option>
      <?php  } ?>
    </select>
  </div>
  <div class="col-sm-12">
      <label for="heading" class="label label-primary">Content</label>
      <textarea name="content" class="form-control" rows="20"></textarea>
    </div>
    <br>

    <input type="submit" name="submit" value="submit" class="btn btn-primary">
  </form>
</div>
