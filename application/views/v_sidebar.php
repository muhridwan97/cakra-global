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
            <?php
            $active_values = ['plb', 'freight_forwarding', 'custome_handling', 'custome_handling',
            'project_logistic', 'trucking', 'open_yard_jakarta_umum', 'gudang_plb_jakarta', 'gudang_plb_surabaya',
            'gudang_umum_surabaya'];
            $active_warehouse = ['open_yard_jakarta_umum', 'gudang_plb_jakarta', 'gudang_plb_surabaya',
            'gudang_umum_surabaya'];
            ?>
            <li class="treeview <?php echo in_array($sidebar, $active_values) ? 'active' : '' ; ?>">
                <a href="#">
                    <i class="fa fa-share"></i>
                    <span>Layanan kami</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                        <!-- <span class="label label-primary pull-right">4</span> -->
                    </span>
                </a>
                <ul class="treeview-menu"
                    style="display: <?php echo in_array($sidebar, $active_values) ? 'block' : 'none' ; ?>;">
                    <li class="<?php echo $sidebar == 'plb' ? 'active' : '' ; ?>">
                        <a href="<?php echo base_url();?>c_layanan/layananKami/plb"><i class="fa fa-circle-o"></i> PLB (Pusat Logistik Berikat)</a>
                    </li>
                    <li class="<?php echo $sidebar == 'freight_forwarding' ? 'active' : '' ; ?>">
                        <a href="<?php echo base_url();?>c_layanan/layananKami/freight_forwarding"><i class="fa fa-circle-o"></i> Freight Forwarding</a>
                    </li>
                    <li class="<?php echo $sidebar == 'custome_handling' ? 'active' : '' ; ?>">
                        <a href="<?php echo base_url();?>c_layanan/layananKami/custome_handling"><i class="fa fa-circle-o"></i> Custome Handling</a>
                    </li>
                    <li class="treeview <?php echo in_array($sidebar, $active_warehouse) ? 'active' : '' ; ?>">
                        <a href="#"><i class="fa fa-circle-o"></i> Warehousing
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu" style="display: <?php echo in_array($sidebar, $active_warehouse) ? 'block' : 'none' ; ?>;">
                            <li class="<?php echo $sidebar == 'open_yard_jakarta_umum' ? 'active' : '' ; ?>">
                                <a href="<?php echo base_url();?>c_layanan/layananKami/open_yard_jakarta_umum"><i class="fa fa-circle-o"></i> Open Yard Jakarta Umum</a>
                            </li>
                            <li class="<?php echo $sidebar == 'gudang_plb_jakarta' ? 'active' : '' ; ?>">
                                <a href="<?php echo base_url();?>c_layanan/layananKami/gudang_plb_jakarta"><i class="fa fa-circle-o"></i> Gudang PLB Jakarta</a>
                            </li>
                            <li class="<?php echo $sidebar == 'gudang_plb_surabaya' ? 'active' : '' ; ?>">
                                <a href="<?php echo base_url();?>c_layanan/layananKami/gudang_plb_surabaya"><i class="fa fa-circle-o"></i> Gudang PLB Surabaya</a>
                            </li>
                            <li class="<?php echo $sidebar == 'gudang_umum_surabaya' ? 'active' : '' ; ?>">
                                <a href="<?php echo base_url();?>c_layanan/layananKami/gudang_umum_surabaya"><i class="fa fa-circle-o"></i> Gudang Umum Surabaya</a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php echo $sidebar == 'project_logistic' ? 'active' : '' ; ?>">
                        <a href="<?php echo base_url();?>c_layanan/layananKami/project_logistic"><i class="fa fa-circle-o"></i> Project Logistic</a>
                    </li>
                    <li class="<?php echo $sidebar == 'trucking' ? 'active' : '' ; ?>">
                        <a href="<?php echo base_url();?>c_layanan/layananKami/trucking"><i class="fa fa-circle-o"></i> Trucking</a>
                    </li>
                </ul>
            </li>
            <!--PAGE GUIDE -->
            <li class="<?php echo $sidebar == 'artikel' ? 'active' : '' ; ?>">
                <a href="<?php echo base_url();?>c_artikel">
                    <i class="fa fa-bullhorn"></i>
                    <span>Artikel</span>
                    <span class="pull-right-container">
                        <!-- <span class="label label-primary pull-right">4</span> -->
                    </span>
                </a>
            </li>
            <!--PAGE GUIDE -->
            <!-- <li class="<?php echo $sidebar == 'team' ? 'active' : '' ; ?>">
                <a href="<?php echo base_url();?>c_team">
                    <i class="fa fa-group"></i>
                    <span>Team</span>
                </a>
            </li> -->
            <li class="<?php echo $sidebar == 'history' ? 'active' : '' ; ?>">
                <a href="<?php echo base_url();?>c_history">
                    <i class="fa fa-history"></i>
                    <span>History</span>
                </a>
            </li>
            <!-- <li class="<?php echo $sidebar == 'testimoni' ? 'active' : '' ; ?>">
                <a href="<?php echo base_url();?>c_testimoni">
                    <i class="fa fa-quote-left"></i>
                    <span>Testimoni</span>
                </a>
            </li> -->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>