<?php
require ("web.config.php");
require ("#App_Code/Page_class.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:ice="http://ns.adobe.com/incontextediting">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- TemplateBeginEditable name="doctitle" -->
    <title><?php echo $defaultPageTitle ?></title>
    <!-- TemplateEndEditable -->

	<!-- TemplateBeginEditable name="head_Meta" -->
    <!-- TemplateEndEditable -->
    
    <link type="text/css" rel="stylesheet" href="../_css/global_Main.css" />
    <link type="text/css" rel="stylesheet" href="../_css/global_Menu.css" />
    <link rel="stylesheet" type="text/css" href="../_css/slideshow.css" media="screen" />

    <script type="text/javascript" src="../_js/globalFunctions.js"></script>
    <script language="javaScript" src="../_js/mouseover.js"></script>
	<script type="text/javascript" src="../_js/mootools.js"></script>
	<script type="text/javascript" src="../_js/slideshow.js"></script>
	<script src="../includes/ice/ice.js" type="text/javascript"></script>
	<!-- TemplateBeginEditable name="head" -->
 
    <!-- TemplateEndEditable -->
    

</head>
<body>
<DIV id="overallContent">
<div id="Main_Container">

	<div id="headerArea">
	
		<div id="headerLeft">
			<a href="<?php echo $relPath?>index.php"><img src="../_images/home/logoMain.gif" width="244" height="105" /></a>
        </div>
        
           
		
	  <div id="headerRight">
        	<img class="mission" src="../_images/home/missionstatement.gif" width="474" height="87" />
            
		<div class="readMore">
		<a href="about.php">Learn more about Union Church<img src="../_images/home/readmoreArrow.gif" width="9" height="9" /></a></div>
	
            
	  </div>
	
	</div>

	<div id="menuArea">
        <?php require ($relPath . "#Shared_Code/menuMain.php"); ?>
	</div>
	
	<div id="picArea">
        <div id="show" class="slideshow">
    <img src="_images/home/main_pic1.jpg" alt="Union Church of Monterrey" />
  </div>

	</div>
	
	<div class="clearFloat"></div>
	
	<div id="contentArea">
	
		<div id="contentLeft">
			<div class="contentTop"><a href="../about.php"><img src="../_images/home/hed_ourpastor.gif" width="109" height="15" border="0" /></a></div>
      <img class="contentPic" src="../_images/home/picLeft.jpg" width="319" height="87" />
			<div ice:editable="*"><!-- TemplateBeginEditable name="ContentLeft" --> ContentArea <!-- TemplateEndEditable --></div>
<div class="readMore">
  <div ice:editable="*"><!-- TemplateBeginEditable name="readmoreLeft" --> read more<img src="../_images/home/readmoreArrow.gif" width="9" height="9" /> <!-- TemplateEndEditable --></div>
</div>
		</div>
		
		<div id="contentMiddle">
			<div class="contentTop"><a href="../schedule.php"><img src="../_images/home/hed_thisweek.gif" width="192" height="20" border="0" /></a></div>
      <img class="contentPic" src="../_images/home/picMiddle.jpg" width="330" height="87" />
            
            <div class="contentText">
              <div ice:editable="*"><!-- TemplateBeginEditable name="ContentMiddle" --> ContentArea <!-- TemplateEndEditable --></div>
          </div>
            
			<div class="readMore">
              <div ice:editable="*"><!-- TemplateBeginEditable name="readmoreMiddle" --> read more<img src="../_images/home/readmoreArrow.gif" width="9" height="9" /> <!-- TemplateEndEditable --></div>
            </div>
		</div>
		
		<div id="contentRight">
			<div class="contentTop"><a href="../ministries.php"><img src="../_images/home/hed_communityministries.gif" width="212" height="19" border="0" /></a></div>
      <img class="contentPic" src="../_images/home/picRight.jpg" width="331" height="87" />
            
            <div class="contentText">
              <div ice:editable="*"><!-- TemplateBeginEditable name="ContentRight" --> ContentArea <!-- TemplateEndEditable --></div>
          </div>
            
			<div class="readMore">
              <div ice:editable="*"><!-- TemplateBeginEditable name="readmoreRight" --> read more<img src="../_images/home/readmoreArrow.gif" width="9" height="9" /> <!-- TemplateEndEditable --></div>
            </div>
		</div>
		
		<div class="clearFloat"></div>
	
	</div>

	
	<div id="footerArea">
		<div id="footerTop">
		</div>
	</div>

</div>
</DIV>
<DIV id="bottomShadow"></DIV>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-1235481-9");
pageTracker._trackPageview();
} catch(err) {}</script>
 <embed src="This_Is_My_Fathers_World.mp3" hidden="false" border="0" width="0" height="0" autostart="true" autoplay="true" loop="false">

</body>
</html>