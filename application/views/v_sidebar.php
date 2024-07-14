<aside class="main-sidebar">
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>/assets/images/profile-picture-anonymous-2.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php echo ($sidebar == 'dashboard') ? 'active' : '' ; ?>">
          <a href="<?php echo base_url();?>c_admin/tampilanAdmin">
            <i class="fa fa-dashboard"></i> <span>Dashboard </span>
          </a>
        </li>

        <li class="<?php echo $sidebar == 'layanan_kami' ? 'active' : '' ; ?>">
          <a href="<?php echo base_url();?>c_admin/adminInstagram">
            <i class="fa fa-newspaper-o"></i>
            <span>Layanan Kami</span>
            <span class="pull-right-container">
              <!-- <span class="label label-primary pull-right">4</span> -->
            </span>
          </a>
        </li>
        <!--PAGE GUIDE -->
        <li class="">
          <a href="<?php echo base_url();?>c_admin/adminInstagram">
            <i class="fa fa-instagram"></i>
            <span>Instagram</span>
            <span class="pull-right-container">
              <!-- <span class="label label-primary pull-right">4</span> -->
            </span>
          </a>
        </li>
        <!--PAGE GUIDE -->
        <!--PAGE GALERI -->
         <li class="">
          <a href="<?php echo base_url();?>c_admin/adminProduk">
            <i class="fa fa-photo"></i>
            <span>Produk</span>
            <span class="pull-right-container">
              <!-- <span class="label label-primary pull-right">4</span> -->
            </span>
          </a>
        </li>
    
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>