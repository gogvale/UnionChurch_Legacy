<?php

$imgHome = "nav_home_off.gif";
$imgAbout = "nav_about_off.gif";
$imgSchedule = "nav_schedule_off.gif";
$imgMinistries = "nav_ministries_off.gif";
$imgHistory = "nav_history_off.gif";
$imgWeddings = "nav_weddings_off.gif";
$imgBodas = "nav_bodas_off.gif";
$imgContact = "nav_contact_off.gif";

$mouseHome =  "onmouseover='roll(event,home)' onmouseout='roll(event,home)'";
$mouseAbout =  "onmouseover='roll(event,about)' onmouseout='roll(event,about)'";
$mouseSchedule =  "onmouseover='roll(event,schedule)' onmouseout='roll(event,schedule)'";
$mouseMinistries = "onmouseover='roll(event,ministries)' onmouseout='roll(event,ministries)'";
$mouseHistory = "onmouseover='roll(event,history)' onmouseout='roll(event,history)'";
$mouseWeddings = "onmouseover='roll(event,weddings)' onmouseout='roll(event,weddings)'";
$mouseBodas = "onmouseover='roll(event,bodas)' onmouseout='roll(event,bodas)'";
$mouseContact = "onmouseover='roll(event,contact)' onmouseout='roll(event,contact)'";


switch ($pageName)
{
	case "index":
		$imgHome = "nav_home_hov.gif";
		$mouseHome = "";
		break;
	case "about":
		$imgAbout = "nav_about_hov.gif";
		$mouseAbout = "";
		break;
	case "schedule":
		$imgSchedule = "nav_schedule_hov.gif";
		$mouseSchedule = "";
		break;
	case "ministries":
		$imgMinistries = "nav_ministries_hov.gif";
		$mouseMinistries = "";
		break;
	case "history":
		$imgHistory = "nav_history_hov.gif";
		$mouseHistory = "";
		break;
	case "weddings":
		$imgWeddings = "nav_weddings_hov.gif";
		$mouseWeddings = "";
		break;
	case "bodas":
		$imgBodas = "nav_bodas_hov.gif";
		$mouseBodas = "";
		break;
	case "contact":
		$imgContact = "nav_contact_hov.gif";
		$mouseContact = "";
		break;
}




?>