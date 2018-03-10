 <?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container about_middle">
    <div class="col-sm-4">
        <div class="form-group">
            <label for="clg_name">College/University:</label>
            <input type="text" class="form-control" id="clg_name" value="<?php foreach($name as $row):echo $row->clg_name; endforeach;?>" readonly>
        </div>
        <?php
			echo "<div class='error_msg'>";
			if (isset($error_message))
			{
                            echo $error_message;
			}
			echo validation_errors();
			echo "</div>";
		?>   
    </div>
    <div class="col-sm-8">
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?php echo base_url(); ?>user/password">
                        <i class="ti-panel"></i>
                        Change Password
                    </a>
                </li>
                <li>
                    <a href="logout">
                        <i class="ti-panel"></i>
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="clearfix">
    </div>            
    <div class="col-sm-8">
        <form method="post" action="<?php echo base_url()."user/dashboard/participantsData"?>">
            <div class="events_title panel-group" id="accordion">
                
                <?php 
                
                foreach($result['event'] as $row):
                if($row->flag==0){break;}
                $count=0;
                
                ?>
		<div class="panel panel-default " id="codifica">
                    <a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $row->id; ?>">
                        <div class="panel-heading panel_blue">
                            <h4 class="panel-title">
                                <?php echo $row->name; ?>
                            </h4>
                        </div>
                    </a>
                    <div id="<?php echo $row->id; ?>" class="events_form panel-collapse collapse in">
                        <input type="hidden" name="<?php echo "min_".$row->id; ?>" value="<?php echo $row->min; ?>">
                        <?php
                            foreach($result['student'] as $row1):
                                if($row->id==$row1->e_id)
                                {
                                $count+=1;
                        ?>
                        
                        <div class="row">
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <input type="hidden" name="id_<?php echo $row->id; ?>[]" value="<?php echo $row1->s_id; ?>">
                                    <input type="text" class="form-control" id="s_name" placeholder="Name" name="name_<?php echo $row->id; ?>[]" value="<?php echo $row1->s_name; ?>" >
                                </div>
                                <div class="col-sm-4">
                                    <input type="email" class="form-control" id="s_email" placeholder="Email" name="email_<?php echo $row->id; ?>[]" value="<?php echo $row1->s_email; ?>" >
                                </div>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="s_phn" placeholder="Contact No." name="phn_<?php echo $row->id; ?>[]" value="<?php echo $row1->s_phn; ?>">
                                </div>
                            </div>
                        </div>
                        <?php
                                }
                            endforeach; 
                            for($i=$count;$i<$row->max;$i++):
                        ?>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="s_name" placeholder="Name" name="name_<?php echo $row->id; ?>[]" value="">
                                </div>
                                <div class="col-sm-4">
                                    <input type="email" class="form-control" id="s_email" placeholder="Email" name="email_<?php echo $row->id; ?>[]" value="" >
                                </div>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" id="s_phn" placeholder="Contact No." name="phn_<?php echo $row->id; ?>[]" value="">
                                </div>
                            </div>
                        </div>
                        <?php   
                                endfor;
                            
                        ?>
                        <div class="p-data-btn">
                            <button type="submit" class="btn btn-lg events_insert_btn" name="sbBtn" value="1_<?php echo $row->id; ?>" <?php echo ($count==$row->max?'disabled':' '); ?>>Insert</button>
                            <button type="submit" class="btn btn-lg events_update_btn" name="sbBtn" value="2_<?php echo $row->id; ?>" <?php echo ($count===0?'disabled':' '); ?>>Update</button>
                            <button type="submit" class="btn btn-lg events_delete_btn" name="sbBtn" value="3_<?php echo $row->id; ?>" <?php echo ($count===0?'disabled':' '); ?>>Delete</button>
                        </div>
                    </div>
                </div>
                <?php
                    endforeach;
                ?>
            </div>
        </form> 
    </div>
    <div class="col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading panel_blue">
                <h4 class="panel-title">
                    GENERAL INSTRUCTIONS
                </h4>
            </div>
            <div class="panel-body">
                <strong>1.</strong> Registrations will start from March 20 th and will end on March 23 rd ,2017 at 5:00 pm.<br><br>
                <strong>2.</strong> The college students must register themselves at epsilon.puchd.ac.in through official authority. Individual registrations are not allowed. All the Participants are required to confirm their registration on 24th March at 9:00 am.<br><br>
                <strong>3.</strong> After the confirmation of registration, the participants are required to report for the events at the allocated venue 15 minutes before the start of the event.<br><br>
                <strong>4.</strong> No student can participate in more than one event except for caption contest, which is open for all.<br><br>
                <strong>5.</strong> Only one team per college is allowed for each event.<br><br>
                <strong>6.</strong> Participants must bring their valid college identity-cards with them.<br><br>
                <strong>7.</strong> The department will not bear any conveyance of the participants. The Judges verdict will be claimed as final.<br><br>
                <strong>8.</strong> The rules can be changed on the spot at the discretion of judges and DCSA authority.<br><br>
                <strong>9.</strong> The inauguration of the IT Fest will be held at 9.45 am in the Auditorium.<br><br>
                <strong>10.</strong> Prize distribution will be held at the end of the IT fest.<br><br>
                <strong>11.</strong> Coupons for refreshment will be given at the time of registration to the participants.<br><br>
                
                For any queries regarding registrations, contact :<br><strong>Akshay Kapoor</strong> (8699934202)<br>Email : dcsa.epsilon@gmail.com<br>
            </div>
        </div> 
    </div>
    <div class="clearfix">
    </div> 
</div>