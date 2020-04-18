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
        <div ice:editable="*">
  <!-- InstanceBeginEditable name="contentLeft" -->
  <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-bottom: 7px;">
    <tbody>
      <tr>
        <td width="50%" style="padding-right: 10px;">
          <h2>
            Physical Location
          </h2>
          <p>
            Oscar F. Castillon 200<br />
            Colonia Chepevera<br />
            Monterrey, Nuevo Leon 64030<br />
            Mexico<br />
            <span style="font-weight: bold;">Telephone:</span><br />
            +52 81.8346.0541
          </p>
          <p style="font-size: .85em;">
            Located at the corner of Castillon and Laralde, behind the Plaza Real Monterrey Shopping Center (H.E.B. Gonzalitos)
          </p>
        </td>
        <td>
          <h2>
            Mailing Address
          </h2>
          <p>
            The Union Church of Monterrey<br />
            PMB 638<br />
            1001 South 10th Street – Suite G<br />
            McAllen, Texas 78501
          </p>
          <p>
            Pastor Robert W. Wolcott
          </p>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
              <tr>
                <td>
                  <span style="font-weight: bold;">Email:</span>
                </td>
                <td>
                  <a href="mailto:robertwolcott@hotmail.com">robertwolcott@hotmail.com</a>
                </td>
              </tr>
              </tbody>
          </table>
        </td>
      </tr>
    </tbody>
  </table>
  <h2>
    Directions to Union Church of Monterrey
  </h2>
  <table class="map" width="140" border="0" cellspacing="0" cellpadding="0" align="right">
    <tbody>
      <tr>
        <td>
          <iframe width="300" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=union+church+of+monterrey&amp;aq=&amp;sll=25.677386,-100.347598&amp;sspn=0.010308,0.021136&amp;ie=UTF8&amp;hq=union+church+of+monterrey&amp;hnear=&amp;t=m&amp;ll=25.677386,-100.347619&amp;spn=0.011603,0.012875&amp;z=15&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=union+church+of+monterrey&amp;aq=&amp;sll=25.677386,-100.347598&amp;sspn=0.010308,0.021136&amp;ie=UTF8&amp;hq=union+church+of+monterrey&amp;hnear=&amp;t=m&amp;ll=25.677386,-100.347619&amp;spn=0.011603,0.012875&amp;z=15" style="color:#0000FF;text-align:left">View Larger Map</a></small>
        </td>
      </tr>
      <tr>
        <td>
          <h3 align="center" style="font-weight: bold; color: #990033; font-size: 9px;">
            Click map for larger view.
          </h3>
        </td>
      </tr>
    </tbody>
  </table>
  <p class="textIndent">
    <span style="font-weight: bold;">From San Pedro</span><br />
    Take Calzada San Pedro north<br />
    Where it ends turn right – then veer left, keeping parallel to railway tracks<br />
    Continue on "Fleteros" past Plaza Real Mall & H.E.B. Gonzalitos<br />
    At first light after HEB, turn right onto Oscar Castillon<br />
    Church is three blocks down on the right
  </p>
  <p class="textIndent">
    <span style="font-weight: bold;">Other Option from San Pedro</span><br />
    Take Ricardo Margain Zozoya north to Avenida Gonzalitos<br />
    At the Plaza Real de Monterrey turn right on Pablo Gonzalez – do not cross railroad<br />
    Go one block and turn right on Oscar F. Castillon – Gonal is on the corner<br />
    Church is three blocks down on the right
  </p>
  <p class="textIndent">
    <span style="font-weight: bold;">From San Augustin and Valle Oriente</span><br />
    Take Lazaro Cardenas west to Avenida Gonzalitos north<br />
    At the Plaza Real de Monterrey turn right on Pablo Gonzalez – do not cross railroad<br />
    Go one block and turn right on Oscar F. Castillon – Gonal is on the corner<br />
    Church is three blocks down on the right
  </p>
  <div class="rule"></div><!-- InstanceEndEditable -->
</div>
      </div></div>
        
        <div id="contentRight_SubPage"><div class="margin">
          <div ice:editable="*"><!-- InstanceBeginEditable name="contentRight" -->
        <div id="contactForm">
        <h4 style="color: #3767a4; margin-bottom: 20px;" >Contact us today </h4>
        
        <form name="form" method="POST" action="contact.Send.php" onSubmit="return checkFields();">

          <label for="Name">Name</label>
          <input type="text" name="contactName" id="Name" />
          <label for="Email">Email</label>
          <input type="text" name="email" id="Email" />
          <label for="Phone">Phone</label>
          <input type="text" name="phoneNumber" id="Phone" />
          <label for="Comments">Comments</label>
          <textarea name="Comments" id="Comments"></textarea>
          <input class="submit" name="Submit" type="submit" value="Submit" />
          
        </form>
        </div>
        
        <!-- InstanceEndEditable --></div>
      </div></div>
            
    </div>
    
    <div class="clearFloat"></div>
    
    
    <div id="footerArea">
        <div id="footerTop"><a href="http://webmail.unionchurchofmonterrey.org" style="color:white">Log into webmail</a>
        </div>
    </div>
    
    
</div>
</DIV>
<DIV id="bottomShadow"></DIV>
</body>
<!-- InstanceEnd --></html>