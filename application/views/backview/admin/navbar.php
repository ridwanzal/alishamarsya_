<div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <!-- <a class="navbar-brand" href="index.html">Concept</a> -->
                <!-- <center><a href="<?php echo base_url();?>"><h3 style="position:relative;top:7px;left:15px;">KAOSTUM.ID</h3></a></center> -->
                <center>
                    <a href="<?php echo base_url();?>"><img width="150" style="margin-left:20px;" src="<?php echo base_url()?>/assets/logo.svg"></a>
                </center>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="<?php echo base_url()?>admin/notifikasi" id="navbarDropdownMenuLink1"><i class="fas fa-fw fa-bell"></i> Notifikasi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="https://image.flaticon.com/icons/svg/2948/2948035.svg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">Welcome Administrator</h5>
                                </div>
                                <a class="dropdown-item" href="<?php echo base_url();?>login/logout"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                             <li class="nav-item active" style="margin-top:0px;">
                                <a class="nav-link active" href="<?php echo base_url(); ?>" target="_blank"><i class="fa fa-fw fa-comments"></i>Go to Main Page<span class="badge badge-success"></span></a>
                            </li>
                            <div style="border:0.1px solid #206f44; margin-top:15px; margin-bottom:15px;">
                            </div>
                            <li class="nav-divider">
                                LAMAN ADMIN 
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo base_url(); ?>admin/kategori" >Kelola Kategori<span class="badge badge-success">6</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo base_url(); ?>admin" >Kelola Produk<span class="badge badge-success">6</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo base_url(); ?>admin/banner" >Kelola Banner<span class="badge badge-success">6</span></a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo base_url(); ?>admin/bannertwo" >Kelola Small Banner<span class="badge badge-success">6</span></a>
                            </li>
                            <div style="border:0.1px solid #206f44; margin-top:15px; margin-bottom:15px;">
                            </div>
                            <li class="nav-item ">
                                <a class="nav-link" href="<?php echo base_url(); ?>login/logout" ><i class="fa fa-fw fa-unlock"></i>Logout<span class="badge badge-success">6</span></a>
                            </li>
                            <!-- <li class="nav-divider">
                                MENU
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>" ><i class="fas fa-fw fa-file"></i> Kelola Blog </a>
                            </li> -->
                        </ul>
                    </div>
                </nav>
            </div>
        </div>