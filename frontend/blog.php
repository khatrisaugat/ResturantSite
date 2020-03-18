<?php if (isset($_GET['blog'])):?>
  <div class="container text-center" style="margin-top:20vh;">
    <?php   include("blogs/".$_GET['blog']); ?>
  </div>

 <?php endif; ?>
