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
    <script type="text/javascript" src="_js/prototype.js"></script>
    <script type="text/javascript" src="_js/scriptaculous.js?load=effects,builder"></script>
    <script type="text/javascript" src="_js/lightbox.js"></script>
    <link rel="stylesheet" href="_css/lightbox.css" type="text/css" media="screen" />

<style type="text/css">
                h2 {color: #990033 }

    </style>
    
    <SCRIPT LANGUAGE="JavaScript">

    function isEmailAddr(email)
    {
      var result = false
      var theStr = new String(email)
      var index = theStr.indexOf("@");
      if (index > 0)
      {
        var pindex = theStr.indexOf(".",index);
        if ((pindex > index+1) && (theStr.length > pindex+1))
        result = true;
      }
      return result;
    }
    
    
    function checkFields() {
    missinginfo = "";
    
    if (document.form.contactName.value == "") {
    missinginfo += "\n     -  First Name";
    }
    
    if (document.form.email.value == "") {
    missinginfo += "\n     -  Email";
    }
    
    
    if (!isEmailAddr(document.form.email.value)) {
    missinginfo += "\n     -  Please enter a valid Email";
    }
    
    if (missinginfo != "") {
    missinginfo ="_____________________________\n" +
    "These fields cannot be left empty:\n" +
    missinginfo + "\n_____________________________" +
    "\nPlease re-enter and submit again!";
    alert(missinginfo);
    return false;
    }
    else return true;
    }

    </script>
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
        <img src="_images/global/subpage_headerImage5.jpg" width="737" height="158" />
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
          <div ice:editable="*"><!-- InstanceBeginEditable name="contentTop" --><img src="_images/global/hed_contact_us.gif" alt="Contact Us" width="109" height="15" />        <!-- InstanceEndEditable --></div>
        </div>
        
      <div id="contentLeft_SubPage"><div class="margin">
        <div ice:editable="*"><!-- InstanceBeginEditable name="contentLeft" -->
        <h2>Thank   You</h2>
        <p>Thank you for contacting Union Church of Monterrey. Someone will respond to you personally shortly. </p>
        <p><a href="contact.php">Return to Contact Page</a> | <a href="index.php">Home Page</a></p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <!-- InstanceEndEditable --></div>
      </div></div>
        
        <div id="contentRight_SubPage"><div class="margin">
          <div ice:editable="*"><!-- InstanceBeginEditable name="contentRight" -->
        
        
        <!-- InstanceEndEditable --></div>
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
</body>
<!-- InstanceEnd --></html>