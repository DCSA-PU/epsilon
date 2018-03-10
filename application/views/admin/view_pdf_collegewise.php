<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>webroot/admin/img/apple-icon.png">
	<link rel="icon" href="<?php base_url(); ?>webroot/images/logofinal.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Pdf| Epsilon</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>webroot/admin/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url(); ?>webroot/admin/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url(); ?>webroot/admin/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  Fonts and icons     -->
    <link rel="stylesheet" href="<?php echo base_url();?>/webroot/frontend/font-awesome-4.6.3/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>/webroot/admin/css/themify-icons.css" rel="stylesheet">
</head>
<body>

<style>
    ul {
    float: left;
    
    
    }
    li {
        float: left;
        font-size: 15px;
        margin-right: 20px;
    }
    .clearix
    {
        clear:both;
    }
</style>
<div class="container-fluid">
        <ul style="float: left;list-style: outside none none;">
                <li style="float:left; width:140px; font-size:20px;">Name</li>
                <li style="float:left; width:140px; font-size:20px;">Phone</li>
                <li style="float:left; width:180px;font-size:20px;">Email</li>
                <li style="float:left; width:160px;font-size:20px;">Event Name</li>
                
        </ul>
    
<div class="clearfix"></div>
    <?php foreach($result as $row): ?>
        <ul style="float: left;list-style: outside none none;">
            <li style="float:left; width:140px;"><?php echo $row->s_name; ?></li>
            <li style="float:left; width:140px;"><?php echo $row->s_phn; ?></li>
            <li style="float:left; width:180px;"><?php echo $row->s_email; ?></li>
            <li style="float:left; width:140px;"><?php echo $row->name; ?></li>
            
        </ul>
        <?php endforeach; ?>
</div>
</body>
</html>