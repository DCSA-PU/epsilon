<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container-fluid ep_2k16">
    
        
        <div class="container">
        <div id="main_area">
                <!-- Slider -->
                <div class="row">
                    <div class="col-xs-12" id="slider">
                        <!-- Top part of the slider -->
                        <div class="row">
                            <div class="col-sm-3  ep_events text-center">
                                <h2>EPSILON 2K16</h2>
                                <button class="btn-default ep_btn" onclick="change(1)">Technical Events</button>


                                    <button class="btn-default ep_btn" onclick="change(2)">Non Technical Events</button>


                                    <button class="btn-default ep_btn" onclick="change(3)">Performances</button>

                                    <button class="btn-default ep_btn" onclick="change(4)">Prize Distribution</button>

                            </div>
                            <div class="col-sm-8 pull-right" id="carousel-bounding-box">
                                <div class="carousel slide" id="myCarousel">
                                    <!-- Carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item" data-slide-number="0">
                                        <img id="c_1" src="<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/tech/pic1.jpg"></div>

                                        <div class="item" data-slide-number="1">
                                        <img id="c_2" src="<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/tech/pic2.jpg"></div>

                                        <div class="item" data-slide-number="2">
                                        <img  id="c_3" src="<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/tech/pic3.jpg"></div>

                                        <div class="item" data-slide-number="3">
                                        <img   id="c_4" src="<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/tech/pic4.jpg"></div>

                                        <div class="item" data-slide-number="4">
                                        <img id="c_5" src="<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/tech/pic5.jpg"></div>

                                        <div class="item" data-slide-number="5">
                                        <img id="c_6" src="<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/tech/pic6.jpg"></div>
                                    </div><!-- Carousel nav -->
                                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                    </a>                                
                                </div>
                            </div>

                            <div class="col-sm-4" id="carousel-text"></div>

                            
                        </div>
                    </div>
                </div><!--/Slider-->

                <div class="row hidden-xs" id="slider-thumbs">
                        <!-- Bottom switcher of slider -->
                        <ul class="hide-bullets">
                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-0"><img id="t_1" src="<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/tech/pic1.jpg" ></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-1"><img id="t_2" src="<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/tech/pic2.jpg"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-2"><img id="t_3" src="<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/tech/pic3.jpg"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-3"><img id="t_4" src="<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/tech/pic4.jpg"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-4"><img id="t_5" src="<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/tech/pic5.jpg"></a>
                            </li>

                            <li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-5"><img id="t_6" src="<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/tech/pic6.jpg"></a>
                            </li>
                        </ul>                 
                </div>
        </div>
</div>
    
</div>
<script>
  jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
       $('[id^=carousel-selector-]').click( function(){
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
function change(element) {
        var a_1,a_2,a_3,a_4,a_5,a_6;
        var b_1,b_2,b_3,b_4,b_5,b_6;
        switch(element)
        {
            case 1:
                a_1='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/tech/pic1.jpg';
                a_2='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/tech/pic2.jpg';
                a_3='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/tech/pic3.jpg';
                a_4='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/tech/pic4.jpg';
                a_5='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/tech/pic5.jpg';
                a_6='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/tech/pic6.jpg';
                b_1='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/tech/pic1.jpg';
                b_2='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/tech/pic2.jpg';
                b_3='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/tech/pic3.jpg';
                b_4='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/tech/pic4.jpg';
                b_5='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/tech/pic5.jpg';
                b_6='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/tech/pic6.jpg';
                break;
            case 2:
                a_1='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/nontech/pic1.jpg';
                a_2='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/nontech/pic2.jpg';
                a_3='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/nontech/pic3.jpg';
                a_4='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/nontech/pic4.jpg';
                a_5='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/nontech/pic5.jpg';
                a_6='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/nontech/pic6.jpg';
                b_1='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/nontech/pic1.jpg';
                b_2='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/nontech/pic2.jpg';
                b_3='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/nontech/pic3.jpg';
                b_4='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/nontech/pic4.jpg';
                b_5='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/nontech/pic5.jpg';
                b_6='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/nontech/pic6.jpg';
                break;
            case 3:
                a_1='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/perform/pic1.jpg';
                a_2='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/perform/pic2.jpg';
                a_3='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/perform/pic3.jpg';
                a_4='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/perform/pic4.jpg';
                a_5='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/perform/pic5.jpg';
                a_6='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/perform/pic6.jpg';
                b_1='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/perform/pic1.jpg';
                b_2='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/perform/pic2.jpg';
                b_3='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/perform/pic3.jpg';
                b_4='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/perform/pic4.jpg';
                b_5='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/perform/pic5.jpg';
                b_6='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/perform/pic6.jpg';
                break;
            case 4:
                a_1='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/prizes/pic1.jpg';
                a_2='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/prizes/pic2.jpg';
                a_3='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/prizes/pic3.jpg';
                a_4='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/prizes/pic4.jpg';
                a_5='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/prizes/pic5.jpg';
                a_6='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/prizes/pic6.jpg';
                b_1='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/prizes/pic1.jpg';
                b_2='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/prizes/pic2.jpg';
                b_3='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/prizes/pic3.jpg';
                b_4='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/prizes/pic4.jpg';
                b_5='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/prizes/pic5.jpg';
                b_6='<?php echo base_url(); ?>webroot/frontend/images/ep_2k16/prizes/pic6.jpg';
                break;    
        }       
        document.getElementById('c_1').src = a_1;
        document.getElementById('c_2').src = a_2;
        document.getElementById('c_3').src = a_3;
        document.getElementById('c_4').src = a_4;
        document.getElementById('c_5').src = a_5;
        document.getElementById('c_6').src = a_6;
        document.getElementById('t_1').src =b_1;
        document.getElementById('t_2').src =b_2;
        document.getElementById('t_3').src =b_3;
        document.getElementById('t_4').src =b_4;
        document.getElementById('t_5').src =b_5;
        document.getElementById('t_6').src =b_6;
        
        
        
    }
</script>

