    <div class="sidebar" data-color="purple" data-image="<?php print cdn('img/sidebar-4.jpg') ?>">

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="dashboard" class="simple-text">
                    <i class="pe-7s-home"></i> Administrator
                </a>
            </div>

            <ul class="nav">
                <li <?php if(isset($dashboard)){ echo 'class="active"'; }?>>
                    <a href="<?php echo base_url(); ?>dashboard">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li <?php if(isset($profile)){ echo 'class="active"'; }?>>
                    <a href="<?php echo base_url(); ?>dashboard/profile">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <li <?php if(isset($data_trace)){ echo 'class="active"'; }?>>
                    <a href="<?php echo base_url(); ?>dashboard/list_member">
                        <i class="pe-7s-server"></i>
                        <p>Data Member</p>
                    </a>
                </li>
                <li class="active-pro">
                    <a href="<?php echo base_url(); ?>dashboard/logout">
                        <i class="pe-7s-power"></i>
                        <p>Logout System</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>