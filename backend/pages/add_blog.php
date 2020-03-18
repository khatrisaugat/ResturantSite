<?php
  if (isset($_POST['submit']) && $_POST['submit']=='submit') {
    unset($_POST['submit']);
    $id[]=$obj->Insert("blog",$_POST);
    $data=$obj->Select("blog",'*','id',$id);
    // print_r($data[0]);
    $Path=base_url('pages/blogs/'.$data[0]['blog_name'].'.php');
    echo $Path;
    if (!file_exists($Path) && !is_file($Path)) {
      $myfile = fopen("../frontend/blogs/".$data[0]['blog_name'].".php", "w");
      $head = "<h1>".$data[0]['blog_heading']."</h1>";
      $body="<p>".$data[0]['content']."</p>";
      $txt=$head.$body;
      fwrite($myfile, $txt);
      fclose($myfile);
    }
    $_SESSION['msg']='data Successfully inserted';

  }
 ?>
<h1>Add Blog</h1>
<div class="col-sm-6">
  <?php if (isset($_SESSION['msg'])) {?>
    <div class="alert alert-success">
      <?=$_SESSION['msg'];?>

    </div>
  <?php }
// echo $id;
  ?>

  <form class="form-group" action="" method="post">
    <label for="heading" class="label label-primary">Blog page name</label>
    <input type="text" name="blog_name" placeholder="Enter the blog page name" class="form-control">
    <label for="heading" class="label label-primary">Blog Heading</label>
    <input type="text" name="blog_heading" placeholder="Enter the blog heading" class="form-control">
  </div>
  <div class="col-sm-12">
      <label for="heading" class="label label-primary">blog Content</label>
      <textarea name="content" class="form-control" rows="20"></textarea>
    </div>
    <br>

    <input type="submit" name="submit" value="submit" class="btn btn-primary">
  </form>
</div>
