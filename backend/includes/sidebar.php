
 <?php
 // session_start();



 ?>


 <!--sidebar start-->
    <aside >
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="index.php"><img src="img/Divya-Gyan-College.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Admin Panel</h5>
          <li class="mt">
            <a class="active" href="<?=base_url();?>">
              <i class="fa fa-dashboard"></i>
              <span>Home</span>
              </a>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Add Content</span>
              </a>
            <ul class="sub">
              <li><a href="<?=base_url('add_content');?>">Add Content</a></li>
              <li><a href="<?=base_url('add_headings');?>">Add Headings</a></li>
              <li><a href="<?=base_url('add_images');?>">Add Images</a></li>
              <li><a href="<?=base_url('add_menu');?>">Add Menu</a></li>
              <li><a href="<?=base_url('add_submenu');?>">Add Sub-menu</a></li>
              <li><a href="<?=base_url('add_blog');?>">Add blog</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Tables</span>
              </a>
            <ul class="sub">
              <li><a href="display_payment.php">Payment Table</a></li>
              <li><a href="display_policy.php">Policy Table</a></li>
              <li><a href="display_fees.php">Fee Table</a></li>
            </ul>
          </li>

          <?php
                if(isset($_SESSION['adminlogin']) && $_SESSION['adminlogin']=="yes"){

                ?>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>


                <span>Extra</span>
              </a>
            <ul class="sub">
              <li><a href="batch_display.php">batch display</a></li>
              <li><a href="batch_insert.php">batch insert</a></li>
              <li><a href="fee_type_insert.php">fee type insert</a></li>
              <li><a href="fee_type_display.php">fee type display</a></li>
              <br><br><br><br><br><br>
            </ul>
          </li>
        </ul>
        <?php
      }
             ?>

        <!-- sidebar menu end-->
      </div>
    </aside>
