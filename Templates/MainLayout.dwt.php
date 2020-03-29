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
    
   <link type="text/css" rel="stylesheet" href="_css/global_Main.css" />
    <link type="text/css" rel="stylesheet" href="_css/global_Menu.css" />

    <script type="text/javascript" src="_js/globalFunctions.js"></script>
    <script language="javaScript" src="_js/mouseover.js"></script>
    <script src="../includes/ice/ice.js" type="text/javascript"></script>
    <!-- TemplateBeginEditable name="head" -->
    <!-- TemplateEndEditable -->

</head>
<body>

<DIV id="overallContent">
<div id="Main_Container_SubPage">

  <div id="headerArea_SubPage">
    
		<div id="headerLeft_SubPage">
        <a href="<?php echo $relPath?>index.php"><img src="../_images/global/logoSub.gif" width="180" height="77" border="0" /></a>		</div>
        
      <div id="headerRight_SubPage">
        <!-- TemplateBeginEditable name="headerRight" -->
        <img src="../_images/global/subpage_headerImage1.jpg" width="737" height="158" />
        <!-- TemplateEndEditable -->
      </div>
  </div>

	<div id="menuArea_SubPage">
    	<div id="menuMain">
		<?php require ($relPath . "#Shared_Code/menuMain.php"); ?>
        </div>
	</div>
	
	<div id="contentArea_SubPage">
    
    	<div id="contentTop_SubPage">
          <div ice:editable="*"><!-- TemplateBeginEditable name="contentTop" --> <!-- TemplateEndEditable --></div>
        </div>
        
      <div id="contentLeft_SubPage"><div class="margin">
        <div ice:editable="*"><!-- TemplateBeginEditable name="contentLeft" --> <!-- TemplateEndEditable --></div>
      </div></div>
        
        <div id="contentRight_SubPage"><div class="margin">
          <div ice:editable="*"><!-- TemplateBeginEditable name="contentRight" --> <!-- TemplateEndEditable --></div>
      </div></div>
        	
	</div>
	
	<div class="clearFloat"></div>
	
	
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
</body>
</html>