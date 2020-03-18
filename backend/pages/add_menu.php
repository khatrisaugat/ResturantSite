<?php
  if (isset($_POST['submit']) && $_POST['submit']=='submit') {
    unset($_POST['submit']);
    $obj->Insert("menu",$_POST);
    $_SESSION['msg']='data Successfully inserted';
  }
 ?>
<h1>Add Headings in Page</h1>
<div class="col-sm-6">
  <?php if (isset($_SESSION['msg'])) {?>
    <div class="alert alert-success">
      <?=$_SESSION['msg'];?>
    </div>
  <?php } ?>

  <form class="form-group" action="" method="post">
    <label for="heading" class="label label-primary">Menu Name</label>
    <input type="text" name="name" placeholder="Enter the menu you want to display" class="form-control">
    <br>
    <label for="heading" class="label label-primary">link</label>
    <input type="text" name="link" placeholder="Enter the link to menu" class="form-control">
    <br>
    <label for="heading" class="label label-primary">Sub-Menu</label>
    <select class="form-control" name="sub_menu">
      <option value="0" selected>NO SUB-MENU</option>
      <option value="1">SUB-MENU</option>
    </select>
    <input type="submit" name="submit" value="submit" class="btn btn-primary">
  </form>
</div>
