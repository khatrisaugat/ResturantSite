<?php
  if (isset($_POST['submit']) && $_POST['submit']=='submit') {
    unset($_POST['submit']);
    if (isset($_FILES['image_name'])) {
      $filename=$_FILES['image_name']['name'];//filename
      $temp_name=$_FILES['image_name']['tmp_name'];//temp name
      $imageFileType = strtolower(pathinfo($filename,PATHINFO_EXTENSION));
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" && $imageFileType!="") {
              echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }else{
      $location='img/'.$filename;
      // echo $location;
      // die();
      move_uploaded_file($temp_name, $location);//upload file
      $_POST['image_name']=$filename;//insert filename in post variable
      $obj->Insert("images",$_POST);
      $_SESSION['msg']='data Successfully inserted';
    }
    }

  }
  $h_types=$obj->select("image_type");
 ?>
<h1>Add Images in Page</h1>
<div class="col-sm-6">
  <?php if (isset($_SESSION['msg'])) {?>
    <div class="alert alert-success">
      <?=$_SESSION['msg'];
      unset($_SESSION['msg']);
      ?>
    </div>
  <?php } ?>

  <form class="form-group" action="" method="post" enctype="multipart/form-data">
    <label for="h_type" class="label label-primary">Image type</label>
    <select class="form-control" name="img_type">
      <option value="" selected>>-Select-<</option>
      <?php foreach ($h_types as $value) { ?>
        <option value="<?=$value['itid']?>"><?=$value['img_type']?></option>
    <?php  } ?>
  </select><br>
    <!-- <label for="heading" class="label label-primary">Heading name</label>
    <input type="text" name="heading" placeholder="Enter the heading you want to display" class="form-control"><br> -->
    <input type="file" name="image_name" value="upload" class="btn btn-warning">
    <br>
    <input type="submit" name="submit" value="submit" class="btn btn-primary">
  </form>
</div>
