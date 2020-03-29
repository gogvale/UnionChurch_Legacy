<?php
require ("Utility_class.php");
require ("Site_class.php");

/* Instantiate Utilties Class
---------------------------------------------------- */
$Utility_Class = new Utility();


/* Instantiate Page Variables
---------------------------------------------------- */
$Site_Class = new Site();

if (! isset($virtualDirectory))
{
	echo "<b style=\"color:red\">Error: virtualDirectory variable cannot be found</b><br>Web.config is required for each page.";
} 
else
{
	$pageVariables = $Site_Class->getURLInfo($virtualDirectory); // $virtualDirectory defined in web.config.php
	
	$fileDirectory = $pageVariables["fileDirectory"];
	$section = $pageVariables["section"];
	$subsection = $pageVariables["subsection"];
	$fileName = $pageVariables["fileName"];
	$pageName = $pageVariables["pageName"];
	$relPath = $pageVariables["relPath"];
}

/* Execute Page_Load()
---------------------------------------------------- */
if (isset($virtualDirectory)) {

	$codeBehind = $pageName . ".code.php";
	
	if (! @include_once($codeBehind))
	{
	}
	else
	{
		require_once ($codeBehind);
		Page_Load();
	}
}

/* Set Page Title
---------------------------------------------------- */
if (! isset($pageTitle)) 
{ 
	$pageTitle = $defaultPageTitle; 
}
?>