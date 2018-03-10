<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<style>
/* Add a dark gray background color to the modal header and center text */
.modal-header, h4, .close {
    background-color: #012345;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
}
.modal-header .close {
    margin-top: -20px;
}
.modal-header, .modal-body {
    padding: 40px 50px;
}
.nav-pills > li.active > a, .nav-pills > li.active > a:focus, .nav-pills > li.active > a:hover {
    color: #fff;
    background-color: #012345;
}
.nav-justified > li > a {
    margin-bottom: 0;
    color: black;
    font-size: 17px;
}
.tab-content > .tab-pane {
    margin-top: 30px;
}
.glyphicon
{
    top: 5px;
    margin-right: 10px;
}
.modal-content
{
    top:80px;
}
</style>
<div class="container events_middle">
    <div class="row events_row text-center">
        <?php foreach($result as $row): ?>
        <div class="col-sm-2 events_border ">
            <img src="<?php echo base_url();?>webroot/frontend/images/events/<?php echo $row->images;?>" class="img-circle" alt="<?php echo $row->name;?>" width="130" height="130" data-toggle="modal" data-target="#myModal" onclick="change(<?php echo $row->id;?>)">
            <h5><?php echo $row->name;?></h5>
        </div>
        <?php endforeach;
        ?>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 id="e_name"><span class="glyphicon glyphicon-info-sign"></span>CODIFICA</h4>
          </div>
          <div class="modal-body">
            <ul class="nav nav-pills nav-justified">
                <li class="active"><a data-toggle="tab" href="#abt">About</a></li>
                <li><a data-toggle="tab" href="#ins">Instructions</a></li>
            </ul>

            <div class="tab-content">
                <div id="abt" class="tab-pane fade in active">
                  <p>Some content.</p>
                </div>
                <div id="ins" class="tab-pane fade">
                    <p>Some content in menu 1.</p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>	

<script>
        function change(element) {
        var inst;
        var desc;
        var name;
        switch(element)
        {
            <?php foreach($result as $row): ?>
            case <?php echo $row->id;?>:
                inst="<?php echo $row->instructions;?>";
                desc="<?php echo $row->description;?>";
                name='<span class="glyphicon glyphicon-info-sign"></span><?php echo $row->name;?>';
                break;
            <?php endforeach;?>    
        }       
        document.getElementById('abt').innerHTML = desc;
        document.getElementById('ins').innerHTML = inst;
        document.getElementById('e_name').innerHTML = name;
    }
</script>    