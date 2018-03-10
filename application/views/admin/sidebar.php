<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                    Epsilon
                </a>
            </div>
	<?php $base=base_url(); $current=current_url(); ?>
            <ul class="nav">
                <li class="<?php if($current==$base."admin/dashboard/studentData"||$current==$base."admin/dashboard/studentData/"){echo "active";} ?>">
                    <a href="<?php echo base_url(); ?>admin/dashboard/studentData">
                        <i class="ti-user"></i>
                        <p>Edit Student Data</p>
                    </a>
                </li>
                <li class="<?php if($current==$base."admin/dashboard/collegeData"||$current==$base."admin/dashboard/collegeData/"){echo "active";} ?>">
                    <a href="<?php echo base_url(); ?>admin/dashboard/collegeData">
                        <i class="ti-view-list-alt"></i>
                        <p>Edit College Data</p>
                    </a>
                </li>
                <li class="<?php if($current==$base."admin/dashboard/teamNames"||$current==$base."admin/dashboard/teamNames/"){echo "active";} ?>">
                    <a href="<?php echo base_url(); ?>admin/dashboard/teamNames">
                        <i class="ti-text"></i>
                        <p>Assign Team Names</p>
                    </a>
                </li>
                <li class="<?php if($current==$base."admin/dashboard/printCollegewise"||$current==$base."admin/dashboard/printCollegewise/"){echo "active";} ?>">
                    <a href="<?php echo base_url(); ?>admin/dashboard/printCollegewise">
                        <i class="ti-pencil-alt2"></i>
                        <p>Print Collegewise</p>
                    </a>
                </li>
                <li class="<?php if($current==$base."admin/dashboard/printEventwise"||$current==$base."admin/dashboard/printEventwise/"){echo "active";} ?>">
                    <a href="<?php echo base_url(); ?>admin/dashboard/printEventwise">
                        <i class="ti-pencil-alt2"></i>
                        <p>Print Eventwise</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

