<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script src="<?php echo base_url(); ?>webroot/frontend/js/count.js"></script>
<script type="text/javascript">
            /*  Change the items noted in light blue below to create your countdown target date and announcement once the target date and time are reached.  */
            var current="Its fest time";//-->enter what you want the script to display when the target date and time are reached, limit to 20 characters
            var year=2017;      //-->Enter the count down target date YEAR
            var month=3;        //-->Enter the count down target date MONTH
            var day=24;         //-->Enter the count down target date DAY
            var hour=09;        //-->Enter the count down target date HOUR (24 hour clock)
            var minute=00;      //-->Enter the count down target date MINUTE
            var tz=5.5;          //-->Offset for your timezone in hours from UTC (see http://wwp.greenwichmeantime.com/index.htm to find the timezone offset for your location)

            //-->    DO NOT CHANGE THE CODE BELOW!    <--
            var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");

            function countdown(yr,m,d,hr,min){
                theyear=yr;themonth=m;theday=d;thehour=hr;theminute=min;
                var today=new Date();
                var todayy=today.getYear();
                if (todayy < 1000) {todayy+=1900;}
                var todaym=today.getMonth();
                var todayd=today.getDate();
                var todayh=today.getHours();
                var todaymin=today.getMinutes();
                var todaysec=today.getSeconds();
                var todaystring1=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec;
                var todaystring=Date.parse(todaystring1)+(tz*1000*60*60);
                var futurestring1=(montharray[m-1]+" "+d+", "+yr+" "+hr+":"+min);
                var futurestring=Date.parse(futurestring1)-(today.getTimezoneOffset()*(1000*60));
                var dd=futurestring-todaystring;
                var dday=Math.floor(dd/(60*60*1000*24)*1);
                var dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1);
                var dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
                var dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
                if(dday<=0&&dhour<=0&&dmin<=0&&dsec<=0){
                    document.getElementById('count2').innerHTML=current;
                    document.getElementById('count2').style.display="inline";
                    document.getElementById('count2').style.width="390px";
                    document.getElementById('dday').style.display="none";
                    document.getElementById('dhour').style.display="none";
                    document.getElementById('dmin').style.display="none";
                    document.getElementById('dsec').style.display="none";
                    document.getElementById('days').style.display="none";
                    document.getElementById('hours').style.display="none";
                    document.getElementById('minutes').style.display="none";
                    document.getElementById('seconds').style.display="none";
                    document.getElementById('spacer1').style.display="none";
                    document.getElementById('spacer2').style.display="none";
                    return;
                }
                else {
                    document.getElementById('count2').style.display="none";
                    document.getElementById('dday').innerHTML=dday;
                    document.getElementById('dhour').innerHTML=dhour;
                    document.getElementById('dmin').innerHTML=dmin;
                    document.getElementById('dsec').innerHTML=dsec;
                    setTimeout("countdown(theyear,themonth,theday,thehour,theminute)",1000);
                }
            }
</script>
<style type="text/css">
.numbers {
    width: 55px;
    text-align: center; 
    font-family: Arial; 
    font-size: 32px;
    font-weight: bold;    /* options are normal, bold, bolder, lighter */
    font-style: normal;   /* options are normal or italic */
    color: #fff;       /* change color using the hexadecimal color codes for HTML */
}
.title {/* the styles below will affect the title under the numbers, i.e., "Days", "Hours", etc. */
    width: 55px;
    text-align: center; 
    font-family: Arial; 
    font-size: 11px;
    font-weight: bold;    /* options are normal, bold, bolder, lighter */
    color: #dddddd;       /* change color using the hexadecimal color codes for HTML */
}
#table {
    width: 400px;
    height: 48px;
    border-style: none;
    background-color: transparent;
    margin: 0px auto;
    position: relative;   /* leave as "relative" to keep timer centered on your page, or change to "absolute" then change the values of the "top" and "left" properties to position the timer */
    top: 0px;             /* change to position the timer */
    left: 0px; 
    display: none/* change to position the timer; delete this property and it's value to keep timer centered on page */
}
</style>

<div id="container-fluid">
    <form method="post"  action="<?php echo base_url()."home/index"?>">
    <div class="index_banner">
        <img class="img-responsive" src="<?php echo base_url(); ?>webroot/frontend/images/epsilon_banner.gif" class="img-responsive">
    </div>
    <div class="container-fluid countdown text-center">
        <div class="container">
            <div class="col-sm-3">
                <div class="row">
                    <i class="fa fa-trophy"></i>
                </div>
                <div class="row">
                    <span class=".numbers-with-commas">30</span>
                </div>
                <div class="row">
                    <p class="c_text">Prizes</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <i class="fa fa-send-o"></i>
                </div>
                <div class="row">
                    <span class=".numbers-with-commas"><?php foreach($result2  as $row2): ?><?php echo $row2->sponsors; ?><?php endforeach; ?></span>
                </div>
                <div class="row">
                    <p class="c_text">Sponsors</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <i class="fa fa-plus"></i>
                </div>
                <div class="row">
                    <span class=".numbers-with-commas"><?php foreach($result  as $row): ?><?php echo $row->clgs; ?><?php endforeach; ?></span>
                </div>
                <div class="row">
                    <p class="c_text">Colleges</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <i class="fa fa-user"></i>
                </div>
                <div class="row">
                    <span class=".numbers-with-commas"><?php foreach($result1  as $row1): ?><?php echo $row1->students; ?><?php endforeach; ?></span>
                </div>
                <div class="row">
                    <p class="c_text">Students</p>
                </div>
            </div>
        </div>
    </div>    
        
    <div class="stats_data">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="col-sm-4">
                        <img src="<?php echo base_url(); ?>webroot/frontend/images/png/computer.png" class="img-responsive">
                    </div>
                    <div class="col-sm-8 stat_data_red">
                        <h4>Compete and Defeat</h4>
                        <p> Relish your competitive streak by participating in the various technical and non-technical events.
                        </p>    
                    </div>
                </div>
				<div class="col-sm-6">
                    <div class="col-sm-4">
                        <img src="<?php echo base_url(); ?>webroot/frontend/images/png/video-player.png" class="img-responsive">
                    </div>
                    <div class="col-sm-8 stat_data_green">
                        <h4>Epsilon - a legacy</h4>
                        <p> 2016 was a great year with  participants who made epsilon 2016 a roaring success.
                        </p>    
                    </div>
                </div>
            </div>
			<br>
            <div class="row">
                <div class="col-sm-6">
                    <div class="col-sm-4">
                        <img src="<?php echo base_url(); ?>webroot/frontend/images/png/team.png" class="img-responsive">
                    </div>
                    <div class="col-sm-8 stat_data_blue">
                        <h4>Anchors of our ship</h4>
                        <p> Our sponsors are our anchors that have helped us in soaring heights and bring about a fiesta that is not only our department’s pride but a fun-filled ride for all the participants.
                        </p>    
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-4">
                        <img src="<?php echo base_url(); ?>webroot/frontend/images/png/technology.png" class="img-responsive">
                    </div>
                    <div class="col-sm-8 stat_data_pink">
                        <h4>Glitters to the glory</h4>
                        <p>A range of exciting prizes and gifts to bedazzle the armors of our winners and add more glitter to their glory.
                        </p>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="time_stat">
        <div class="container">
            <div class="col-sm-8 tablet">
                <div class="row">
                <div class="col-sm-6 col-sm-offset-3 text-center tablet_count">
                    <div class="row">
                    <div class="col-sm-3 tablet_color_1">
                        <div class="numbers" id="dday"></div>
                        <div class="title" id="days">Days</div>
                    </div>
                    <div class="col-sm-3 tablet_color_2">
                        <div class="numbers" id="dhour"></div>
                        <div class="title" id="hours">Hours</div>
                    </div>
                    <div class="col-sm-3 tablet_color_3">
                        <div class="numbers" id="dmin"></div>
                        <div class="title" id="minutes">Minutes</div>
                    </div>
                    <div class="col-sm-3 tablet_color_1">
                        <div class="numbers" id="dsec"></div>
                        <div class="title" id="seconds">Seconds</div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-4 tablet_data">
                <div class="row t_data">
                    <div class="col-sm-1">
                        <i class="fa fa-plus" aria-hidden="true" style="font-size:30px"></i>
                    </div>
                    <div class="col-sm-11">
                        <h4>An exciting day awaits you all.</h4>
                        <p>The most awaited IT fest comes along on 24 March, 2017.
                            </p>
                    </div>
                </div>
                <div class="row t_data">
                    <div class="col-sm-1">
                        <i class="fa fa-plus" aria-hidden="true" style="font-size:30px"></i>
                    </div>
                    <div class="col-sm-11">
                        <h4>Attractions of the fest.</h4>
                        <p>Epsilon offers the winners exciting cash prizes and a helluva loads of fun. 
                            </p>
                    </div>
                </div>
                <div class="row t_data">
                    <div class="col-sm-1">
                        <i class="fa fa-plus" aria-hidden="true" style="font-size:30px"></i>
                    </div>
                    <div class="col-sm-11">
                        <h4>Tame your horses.</h4>
                        <p>A dose of game will help you brush up your skills and also give you a chance to win some cool prizes.
                            </p>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
	
</div>
<table id="table" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center" colspan="6"><div class="numbers" id="count2" style="padding: 5px 0 0 0; "></div></td>
    </tr>
    <tr id="spacer1" height="30">
        <td align="center" ><div class="numbers" ></div></td>
        <td align="center" ><div class="numbers" id="dday"></div></td>
        <td align="center" ><div class="numbers" id="dhour"></div></td>
        <td align="center" ><div class="numbers" id="dmin"></div></td>
        <td align="center" ><div class="numbers" id="dsec"></div></td>
        <td align="center" ><div class="numbers" ></div></td>
    </tr>
    <tr id="spacer2" height="12">
        <td align="center" ><div class="title" ></div></td>
        <td align="center" ><div class="title" id="days">Days</div></td>
        <td align="center" ><div class="title" id="hours">Hours</div></td>
        <td align="center" ><div class="title" id="minutes">Minutes</div></td>
        <td align="center" ><div class="title" id="seconds">Seconds</div></td>
        <td align="center" ><div class="title" ></div></td>
    </tr>
</table>
</form>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>webroot/frontend/js/jquery.counterup.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script>
    jQuery(document).ready(function( $ ) {
        $('span').counterUp({
        delay: 10, // the delay time in ms
        time: 1000 // the speed time in ms
        });
    });
</script>

