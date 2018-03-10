
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid">
    <div class="container">
        <div class="heading">
            <span>OUR SPONSORS </span>
            <div class="clearfix">
            </div>
            <span id="bordr"></span>
        </div>
        <?php foreach($result as $row) 
        {    
        ?>
        <!--
        <div class="col-sm-4">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1><?php echo $row->name; ?></h1>
                </div>
                <div class="panel-body text-center">
                    <img src="<?php echo base_url()."webroot/frontend/images/sponsors/".$row->image;?>" class="img-responsive" height="150px" width="150px">
                    <p><?php echo $row->des; ?></p>
                    <button class="btn btn-default"><a href="<?php echo $row->link; ?>" target="_blank">More Info</a></button> 
                </div>
            </div> 
        </div>
        -->
        <div class="row sponsors_div">
            <div class="sponsors_data text-center col-sm-offset-1 col-sm-10">
                <div class="row sponsors_padding"></div>
                <div class="row">
                    <div class="col-sm-3">
                        <img src="<?php echo base_url()."webroot/frontend/images/sponsors/".$row->image;?>" class="img-responsive" height="300" width="300">
                    </div>
                    <div class="col-sm-9">
                        <h1><?php echo $row->name; ?></h1>
                        <p><?php echo $row->des; ?></p>
                        <button class="btn btn-default"><a href="<?php echo $row->link; ?>" target="_blank">More Info</a></button> 
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>
    

		