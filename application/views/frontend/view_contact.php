
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">
    <div class="heading">
        <span>CONTACT US </span>
        <div class="clearfix">
        </div>
        <span id="bordr"></span>
    </div>
    <div class="row">
        <div class="col-sm-7">
            <p><a id="contact_dcsa" href="http://dcsa.puchd.ac.in" target="blank">DEPARTMENT OF COMPUTER SCIENCE AND APPLICATIONS</a></p>
            <p class="contact_address">Panjab University, Chandigarh</p>
            <p class="contact_address">Pin - 160014</p>
            <div class="cord_box"><p class="color1">Events Organisers:</p>
                <div class ="row">
                    <?php 
                        foreach($result as $row)
                        {
                    ?>
                    <div class="col-sm-6 contact_icons">
                        <p class="st_cord"><i class="fa fa-user fa-2x" aria-hidden="true" style="padding-right:20px;"></i><?php echo $row->cor_name; ?></p>
                        <p class="st_cord"><i class="fa fa-phone fa-2x" aria-hidden="true" style="padding-right:20px;"></i><?php echo $row->cor_phone; ?></p>
                        <p class="st_cord"><span class="ev"><i class="fa fa-envelope fa-2x" aria-hidden="true" style="padding-right:15px;"></i></span>
                            <a class="e_mail" href="mailto:<?php echo $row->cor_email; ?>?Subject=EPSILON2K17" target="_top"><?php echo $row->cor_email; ?></a>
                        </p>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-sm-5">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="numb">Phone No:</label>
                    <input type="number" class="form-control" id="numb" placeholder="Enter phone number" name="phn">
                </div>
                <div class="form-group">
                    <label for="comments">Your query:</label>
                    <textarea rows="3" class="form-control" id="comments" name="query" placeholder="Enter your query"></textarea>
                </div> 
                <button type="submit" class="btn btn-default" >Submit</button>	
            </form>
        </div>
    </div>
</div>
<?php echo $map['js']; ?>
<?php echo $map['html']; ?>

</body>
</html>