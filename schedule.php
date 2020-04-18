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
        #contentTop_SubPage {   background-color:#999900; }
        h2 {color: #999900 }

    </style>
    <!-- InstanceEndEditable -->

</head>
<body>

<div id="overallContent">
<div id="Main_Container_SubPage">

  <div id="headerArea_SubPage">
    
        <div id="headerLeft_SubPage">
        <a href="<?php echo $relPath?>index.php"><img src="_images/global/logoSub.gif" width="180" height="77" border="0" /></a>        </div>
        
      <div id="headerRight_SubPage">
        <!-- InstanceBeginEditable name="headerRight" -->
        <img src="_images/global/subpage_headerImage2.jpg" width="737" height="158" />
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
          <div ice:editable="*"><!-- InstanceBeginEditable name="contentTop" --><img src="_images/global/hed_schedule.gif" alt="Schedule" width="252" height="20" /><!-- InstanceEndEditable --></div>
        </div>
        
      <div id="contentLeft_SubPage"><div class="margin">
        <div ice:editable="*"><!-- InstanceBeginEditable name="contentLeft" -->
<!-- start edit --><h2>
    Worship Services</h2>
<p>
    <img alt="Choir Rehearsal" height="120" src="_images/sub/Choir-Rehearsal.jpg" width="180" /><strong>Current church services and events</strong> consist of weekly worship on Sunday morning, preceded by Sunday school. Sunday school is not held during the summer months when many families return to their homes in other places. There is a nursery and Children&rsquo;s Church during the morning service for children through age 11. Twice monthly, the children ages 9-11 remain in the worship service and worship pages related to the day&rsquo;s service and sermon are provide to enable them to appreciate the service. (See weekly schedule to the right)</p>
<h2>
    Bible Studies and Small Groups</h2>
<p>
    <img alt="Midweek Bible Study" height="120" src="_images/global/bible_study.jpg" width="180" />A <strong>mid-week Bible study followed by fellowship supper</strong> meets Wednesday evenings beginning with prayer at 6:45 PM in the Church Fellowship Hall.</p>
<p>
    Various Bible studies are held weekly and as interest is indicated. There is a <strong>Thursday morning Ecumenical Women&rsquo;s Bible study</strong> and a <strong>Friday afternoon women&rsquo;s Bible study</strong>.</p>
<p>
    There is an active <strong>Women&rsquo;s Guild</strong> which meets on the fourth Wednesday of the month. The women support the mission work of the church and assist with various beautification projects.</p>
<h2>
    Vacation Bible School and Other Events</h2>
<p>
    <img alt="Children's Bible Class" height="120" src="_images/sub/childrens_bible_class.jpg" width="180" />The church hosts the annual <strong>Vacation Bible School</strong> sponsored by The Ecumenical Council of Monterrey. The Ecumenical Council of Monterrey is made up of representatives from the three English-language churches in the city: Holy Family Anglican Church, Immaculate Mary Roman Catholic Parish, and The Union Church of Monterrey. The VBS is held the first full week of August or one week prior to the opening of the schools.</p>
<p>
    Several times each year, special banquets and music programs are presented in the fellowship hall. Three pot-luck luncheons are hosted to welcome people in August, to celebrate our unity at the Annual Church Conference in January, and to say good-bye to families leaving in June.</p>
<h2>
    Annual Community Ecumenical Services</h2>
<p>
    <strong>Service of Christian Unity</strong> in January hosted by Immaculate Mary Roman Catholic Parish</p>
<p>
    <strong>Holy Week Services</strong> &ndash; Palm Sunday, Maundy Thursday Service, Easter Sunrise Service</p>
<p>
    <strong>Vacation Bible School</strong> &ndash; first week of August sponsored by The Ecumenical Council of Monterrey</p>
<p>
    <strong>Thanksgiving Service</strong> &ndash; Sunday before American Thanksgiving hosted by The Union Church</p>
<p>
    <strong>Service of Lessons and Carols</strong> &ndash; third Sunday of Advent hosted by Holy Family Anglican Church</p>
<p>
    <strong>Christmas Eve Candlelight Service</strong>&nbsp;- December 24</p>
<!-- end edit -->
        <!-- InstanceEndEditable --></div>
      </div></div>
        
        <div id="contentRight_SubPage"><div class="margin">
          <div ice:editable="*"><!-- InstanceBeginEditable name="contentRight" -->
        <h4> Weekly Schedule</h4>
        <table border="0" cellspacing="0" cellpadding="0" style="margin-bottom: 65px;">
  <tr>
    <td colspan="2"><strong>Sunday</strong></td>
    </tr>
  <tr>
    <td width="57">10:00 AM
    <td width="103">Sunday School</td>
  <tr>
    <td>11:00 AM</td>
    <td>Morning Worship</td>
  </tr>
  <tr>
    <td>12:15 PM</td>
    <td>Fellowship Hour</td>
  </tr>
  <tr>
    <td>12:30 PM</td>
    <td>Choir Rehersal</td>
  </tr>
  <tr>
    <td height="8" colspan="2"></td>
    </tr>
  <tr>
    <td colspan="2"><strong>Wednesday</strong></td>
    </tr>
  <tr>
    <td>9:30 AM</td>
    <td>Women&rsquo;s Guild <br />
      (4th Wednesday)</td>
  </tr>
  <tr>
    <td>6:45 PM</td>
    <td>Prayer Time</td>
  </tr>
  <tr>
    <td>7:00 PM</td>
    <td>Bible Study</td>
  </tr>
  <tr>
    <td>8:00 PM</td>
    <td>Fellowship Time</td>
  </tr>
  <tr>
    <td height="8" colspan="2"></td>
    </tr>
  <tr>
    <td colspan="2"><strong>Thursday</strong></td>
    </tr>
  <tr>
    <td>10:00 AM</td>
    <td>Ecumenical Women&rsquo;s Bible Study</td>
  </tr>
  <tr>
    <td height="8" colspan="2"></td>
    </tr>
  <tr>
    <td colspan="2"><strong>Friday</strong></td>
    </tr>
  <tr>
    <td>3:30 PM</td>
    <td>Women&rsquo;s Bible Study and Prayer Time</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  </td>
  </tr>
</table>
<img src="_images/global/subpage_sideImage3.jpg" alt="Song and dance" width="140" height="169" />
        <h3>Praises to the Lord through song and dance</h3>
        <img src="_images/global/subpage_sideImage8.jpg" alt="Song and dance" width="140" height="136" />
        <h3>For children through age 11, there is Children's Church during the morning service.</h3>
        <img src="_images/global/subpage_sideImage9.jpg" alt="Song and dance" width="140" height="120" />
        <h3>One of the many music programs presented annually in the fellowship hall.</h3>
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