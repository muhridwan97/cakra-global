<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url();?>/assets/images/profile-picture-anonymous-2.jpg" class="img-circle"
                    alt="User Image">
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

            <li class="<?php echo $sidebar == 'tentang_kami' ? 'active' : '' ; ?>">
                <a href="<?php echo base_url();?>c_admin/tentangKami">
                    <i class="fa fa-newspaper-o"></i>
                    <span>Tentang kami</span>
                    <span class="pull-right-container">
                        <!-- <span class="label label-primary pull-right">4</span> -->
                    </span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i>
                    <span>Layanan kami</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        <!-- <span class="label label-primary pull-right">4</span> -->
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="#"><i class="fa fa-circle-o"></i> PLB (Pusat Logistik Berikat)</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Freight Forwarding</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Custome Handling</a></li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-circle-o"></i> Warehousing
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Open Yard Jakarta Umum</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Gudang PLB Jakarta</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Gudang PLB Surabaya</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Gudang Umum Surabaya</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Project Logistic</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Trucking</a></li>
                </ul>
            </li>
            <!--PAGE GUIDE -->
            <li class="">
                <a href="<?php echo base_url();?>c_admin/artikel">
                    <i class="fa fa-bullhorn"></i>
                    <span>Artikel</span>
                    <span class="pull-right-container">
                        <!-- <span class="label label-primary pull-right">4</span> -->
                    </span>
                </a>
            </li>
            <!--PAGE GUIDE -->

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>