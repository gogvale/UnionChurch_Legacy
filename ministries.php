<?php
require "web.config.php";
require "#App_Code/Page_class.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:ice="http://ns.adobe.com/incontextediting"><!-- InstanceBegin template="/Templates/MainLayout.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <!-- InstanceBeginEditable name="doctitle" -->
    <title><?php echo $defaultPageTitle ?></title>
    <!-- InstanceEndEditable -->

    <!-- InstanceBeginEditable name="head_Meta" -->
    <!-- InstanceEndEditable -->
    
   <link type="text/css" rel="stylesheet" href="_css/global_Main.css" />
    <link type="text/css" rel="stylesheet" href="_css/global_Menu.css" />

    <script type="text/javascript" src="_js/globalFunctions.js"></script>
    <script language="javaScript" src="_js/mouseover.js"></script>
    <script src="includes/ice/ice.js" type="text/javascript"></script>
    <!-- InstanceBeginEditable name="head" -->
    <style type="text/css">
        #contentTop_SubPage {   background-color:#990033; }
                h2 {color: #990033 }

    </style>
    <!-- InstanceEndEditable -->

</head>
<body>

<DIV id="overallContent">
<div id="Main_Container_SubPage">

  <div id="headerArea_SubPage">
    
        <div id="headerLeft_SubPage">
        <a href="<?php echo $relPath?>index.php"><img src="_images/global/logoSub.gif" width="180" height="77" border="0" /></a>        </div>
        
      <div id="headerRight_SubPage">
        <!-- InstanceBeginEditable name="headerRight" -->
        <img src="_images/global/subpage_headerImage1.jpg" width="737" height="158" />
        <!-- InstanceEndEditable -->
      </div>
  </div>

    <div id="menuArea_SubPage">
        <div id="menuMain">
        <?php require $relPath . "#Shared_Code/menuMain.php"; ?>
        </div>
    </div>
    
    <div id="contentArea_SubPage">
    
        <div id="contentTop_SubPage">
          <div ice:editable="*"><!-- InstanceBeginEditable name="contentTop" -->
        <img src="_images/global/hed_ministries.gif" width="103" height="15" /> 
        <!-- InstanceEndEditable --></div>
        </div>
        
      <div id="contentLeft_SubPage"><div class="margin">
        <div ice:editable="*"><!-- InstanceBeginEditable name="contentLeft" -->
<!-- start edit --><h2>
    Opportunities to Serve</h2>
<p>
    <strong>There are many ministry opportunities in Monterrey.</strong> The church currently assists with five children&rsquo;s homes or &ldquo;Casas Hogares.&rdquo; Assistance can include financial assistance and opportunity for volunteer service or only one of these.&nbsp;</p>
<p>
    <strong>The five homes are:</strong></p>
<ul>
    <li>
        <em>Casa Hogar Asociacion de Enfermeras y Trabajadoras Sociales</em></li>
    <li>
        <em>El Rancho del Rey</em></li>
    <li>
        <em>Casa Hogar Kayits</em></li>
    <li>
        <em>Manantial de Amor</em></li>
    <li>
        <em>And other benevolent outreach</em></li>
</ul>
<p>
    <strong>
    <img alt="Hogar children singing" height="120" src="_images/global/hogar_children.jpg" width="180" /></strong>The <strong>Salvation Army (Ejercito de Salvacion)</strong> receives assistance for their work in the city.</p>
<p>
    The <strong>Monterrey Hunger Ministry</strong> seeks volunteers to purchase food and make deliveries to low-income families who have been chosen for the ministry. Families must own their home, humble as it may be. They identify a tangible goal to be reached in a five-month period during which the ministry will provide their basic food needs so that they can use their funds to reach their goal &ndash; add a bedroom or bathroom to their house, pour a cement floor, enclose the property with a wall, etc. The church provides a monthly financial donation and encourages members to contribute a food item each month. Members also collect soaps, lotions and shampoos from hotels for gift packs to the families. <strong>Children&rsquo;s Day</strong> gifts are also provided for children of the participating families.</p>
<p>
    The <strong>Women&rsquo;s Guild</strong> sponsors the annual <strong>Angel Tree</strong>. The tree has the names of children from several of the children&rsquo;s homes and the Hunger Ministry. Members take the names to purchase a gift. Guild members plan Christmas parties for the homes and deliver the gifts.</p>
<!-- end edit -->
<!-- InstanceEndEditable --></div>
      </div></div>
        
        <div id="contentRight_SubPage"><div class="margin">
          <div ice:editable="*"><!-- InstanceBeginEditable name="contentRight" -->
<!-- start edit -->
        <img src="_images/global/subpage_sideImage5.jpg" alt="Union Church works with 5 Children's Homes" width="140" height="112" />
        <h3>Union Church works with five children's homes throughout Monterrey.</h3>
        
        <img src="_images/global/ribbon_cutting.jpg" alt="Casa Hogar Sign" width="140" height="139" />
        <h3>Tagline here for the Casa Hogar ribbon cutting dedication.</h3>
        
                <img src="_images/global/casa_hogar_sign.jpg" alt="Casa Hogar Sign" width="140" height="139" />
        <h3>Tagline here for the Casa Hogar sign and dedication.</h3>
<!-- end edit -->
        <!-- InstanceEndEditable --></div>
      </div></div>
            
    </div>
    
    <div class="clearFloat"></div>
    
    
    <div id="footerArea">
        <div id="footerTop"><a href="http://webmail.unionchurchofmonterrey.org" style="color:white">Log into webmail</a>
        </div>
    </div>
    
    
</div>
</div>
<div id="bottomShadow"></div>
</body>
<!-- InstanceEnd --></html>