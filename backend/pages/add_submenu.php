<?php
  if (isset($_POST['submit']) && $_POST['submit']=='submit') {
    unset($_POST['submit']);
    $obj->Insert("sub_menu",$_POST);
    $_SESSION['msg']='data Successfully inserted';
  }
  $menus=$obj->Select("menu",'*',"sub_menu",array(1));
 ?>
<h1>Add Headings in Page</h1>
<div class="col-sm-6">
  <?php if (isset($_SESSION['msg'])) {?>
    <div class="alert alert-success">
      <?=$_SESSION['msg'];?>
    </div>
  <?php } ?>

  <form class="form-group" action="" method="post">
    <label for="heading" class="label label-primary">Parent Menu</label>
    <select class="form-control" name="mid">
      <option selected disabled>---Select---</option>
      <?php foreach ($menus as $menu) { ?>
        <option value="<?=$menu['mid']?>"><?=$menu['name'];?></option>
      <?php  } ?>
    </select>
    <label for="heading" class="label label-primary">Menu Name</label>
    <input type="text" name="name" placeholder="Enter the sub-menu you want to display" class="form-control">
    <br>
    <label for="heading" class="label label-primary">link</label>
    <input type="text" name="link" placeholder="Enter the link to sub-menu" class="form-control">
    <br>

    <input type="submit" name="submit" value="submit" class="btn btn-primary">
  </form>
</div>
