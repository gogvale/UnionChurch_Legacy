<?php
require ("web.config.php");
require ("#App_Code/Page_class.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:ice="http://ns.adobe.com/incontextediting"><!-- InstanceBegin template="/Templates/HomeLayout.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <!-- InstanceBeginEditable name="doctitle" -->
<title><?php echo $defaultPageTitle ?></title>
<!-- InstanceEndEditable -->

	<!-- InstanceBeginEditable name="head_Meta" -->
<!-- InstanceEndEditable -->
    
    <link type="text/css" rel="stylesheet" href="_css/global_Main.css" />
    <link type="text/css" rel="stylesheet" href="_css/global_Menu.css" />
    <link rel="stylesheet" type="text/css" href="_css/slideshow.css" media="screen" />

    <script type="text/javascript" src="_js/globalFunctions.js"></script>
    <script language="javaScript" src="_js/mouseover.js"></script>
	<script type="text/javascript" src="_js/mootools.js"></script>
	<script type="text/javascript" src="_js/slideshow.js"></script>
	<script src="includes/ice/ice.js" type="text/javascript"></script>
	<!-- InstanceBeginEditable name="head" -->
<script type="text/javascript">		
	//<![CDATA[
	  window.addEvent('domready', function(){
	    var data = {
	      'main_pic1.jpg': { caption: '' }, 
	      'main_pic2.jpg': { caption: '' }, 
	      'main_pic3.jpg': { caption: '' }, 
	      'main_pic4.jpg': { caption: '' }, 
	      'main_pic5.jpg': { caption: '' },
	      'main_pic6.jpg': { caption: '' },
	      'main_pic7.jpg': { caption: '' },
	      'main_pic8.jpg': { caption: '' }
	    };
	    var myShow = new Slideshow('show', data, {controller: false, delay: 4000, duration: 2000, height: 368, hu: '_images/home/', thumbnails: false, width: 661});
	  });
	//]]>
	</script>





    
<!-- InstanceEndEditable -->
    

</head>
<body>
<DIV id="overallContent">
<div id="Main_Container">

	<div id="headerArea">
	
		<div id="headerLeft">
			<a href="<?php echo $relPath?>index.php"><img src="_images/home/logoMain.gif" width="244" height="105" /></a>
        </div>
        
           
		
	  <div id="headerRight">
        	<img class="mission" src="_images/home/missionstatement.gif" width="474" height="87" />
            
		<div class="readMore">
		<a href="about.php">Learn more about Union Church<img src="_images/home/readmoreArrow.gif" width="9" height="9" /></a></div>
	
            
	  </div>
	
	</div>

	<div id="menuArea">
        <?php require ($relPath . "#Shared_Code/menuMain.php"); ?>
	</div>
	
	  <style>
	  	.parent-flex img{
			  height: 5.5em;
			  padding: 0 1em;
		  }
		  .parent-flex {
			display: flex;
			flex-direction: row;
			justify-content: center;
			padding: 0 10px;
			align-items: center;
		  }
		  h1, h2,  a, a:visited {
			  color: #CC672B;
		  }
	  </style>

	<div id="picArea">
	<h1 style="text-align:center; padding: 10px;">A Letter from the Church - COVID-19</h1>
	<p>March 20, 2020</p>
	<p>Dear Brethren of the Union Church of Monterrey: <br>
As you well know, we are living very challenging times throughout the world, and our community is no exception.  So far, we have felt most protected by our Lord and are grateful to Him because we have so enjoyed gathering on Sundays.</p>
<p>However, due to the recommendations of specialists, it is imperative for us to now collaborate with what is required, applying health measures aimed at controlling the widespread of this dangerous virus COVID-19 in our community. </p>
<p>For this reason, we are organizing ourselves to support Pastor Robert Wolcott next Sundays through our church’s Facebook and Youtube pages by broadcasting his sermons both during the morning (English) and afternoon (Spanish) so that you can attend from your home.  
<a target="_blank" rel="noreferrer noopener" href="http://www.facebook.com/UnionChurchMonterrey/posts/3063581033675788">Click here for more info.</a>

</p>

	<div class="parent-flex">
	<h2>Watch the sermon on our social media:</h2>
	<a target="_blank" rel="noreferrer noopener" href="https://www.youtube.com/channel/UCuAVTw32s8DJiAE00ALKDfw">
		<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/YouTube_play_button_circular_%282013-2017%29.svg/1200px-YouTube_play_button_circular_%282013-2017%29.svg.png" alt="Youtube Channel">
	</a>
	<a target="_blank" rel="noreferrer noopener" href="https://www.facebook.com/UnionChurchMonterrey/">
		<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Facebook_f_logo_%282019%29.svg/214px-Facebook_f_logo_%282019%29.svg.png" alt="Facebook Page">
	</a>
	</div>


  </div>

	</div>
	
	<div class="clearFloat"></div>
	
	<div id="contentArea">
	
		<div id="contentLeft">
			<div class="contentTop"><a href="about.php"><img src="_images/home/hed_ourpastor.gif" width="109" height="15" border="0" /></a></div>
      <img class="contentPic" src="_images/home/picLeft.jpg" width="319" height="87" />
			<div ice:editable="*"><!-- InstanceBeginEditable name="ContentLeft" -->

			<img class="pic" src="_images/home/pic_pastor.gif" width="86" height="115" />
            <div class="text">
			Pastor Robert W. Wolcott 
			</div>
			<!-- InstanceEndEditable --></div>
<div class="readMore">
  <div ice:editable="*"><!-- InstanceBeginEditable name="readmoreLeft" --><a href="about.php">
			read more<img src="_images/home/readmoreArrow.gif" width="9" height="9" />
			</a><!-- InstanceEndEditable --></div>
</div>
		</div>
		
		<div id="contentMiddle">
			<div class="contentTop"><a href="schedule.php"><img src="_images/home/hed_thisweek.gif" width="192" height="20" border="0" /></a></div>
      <img class="contentPic" src="_images/home/picMiddle.jpg" width="330" height="87" />
            
            <div class="contentText">
              <div ice:editable="*"><!-- InstanceBeginEditable name="ContentMiddle" -->
<h2>Sunday</h2>
10:00 AM - Sunday School<br />
11:00 AM - Morning Worship<br />
12:15 PM - Fellowship Hour<br />
12:30 PM – Choir Rehearsal<br />

<h2>Wednesday</h2>
9:30 AM - Women's Guild (4th Wednesday)<br />
6:45 PM – Prayer time<br />
7:00 PM - Bible Study<br />
8:00 PM - Fellowship time<br /><br />
            <!-- InstanceEndEditable --></div>
          </div>
            
			<div class="readMore">
              <div ice:editable="*"><!-- InstanceBeginEditable name="readmoreMiddle" --><a href="schedule.php">
			read more<img src="_images/home/readmoreArrow.gif" width="9" height="9" />
			</a><!-- InstanceEndEditable --></div>
            </div>
		</div>
		
		<div id="contentRight">
			<div class="contentTop"><a href="ministries.php"><img src="_images/home/hed_communityministries.gif" width="212" height="19" border="0" /></a></div>
      <img class="contentPic" src="_images/home/picRight.jpg" width="331" height="87" />
            
            <div class="contentText">
              <div ice:editable="*"><!-- InstanceBeginEditable name="ContentRight" -->
The <b>Monterrey Hunger Ministry</b> seeks volunteers to purchase food and make deliveries to low-income families who have been chosen for the ministry. Families must own their home, humble as it may be. Find out how you can  get involved with this or	one	of	several other ministries.<!-- InstanceEndEditable --></div>
          </div>
            
			<div class="readMore">
              <div ice:editable="*"><!-- InstanceBeginEditable name="readmoreRight" --><a href="ministries.php">
			read more<img src="_images/home/readmoreArrow.gif" width="9" height="9" />
			</a><!-- InstanceEndEditable --></div>
            </div>
		</div>
		
		<div class="clearFloat"></div>
	
	</div>

	
	<div id="footerArea">
		<div id="footerTop"><a href="http://webmail.unionchurchofmonterrey.org" style="color:white">Log into webmail</a>
		</div>
	</div>

</div>
</div>
<div id="bottomShadow"></div>
<embed src="This_Is_My_Fathers_World.mp3" hidden="true" border="0" width="0" height="0" autostart="true" autoplay="true" loop="false"/>

</body>
<!-- InstanceEnd --></html>
