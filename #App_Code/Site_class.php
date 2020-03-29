<?php 
class Site
{

	function getURLInfo($virtualDirectoryName)
	{
	
		if (strlen($virtualDirectoryName) > 0)
		{
			$virtualDirectory = "/" . $virtualDirectoryName . "/";
		}
		else
		{
			$virtualDirectory = "/";
		}
		
		$fileVirtualPath = $_SERVER["SCRIPT_NAME"];
		$fileDirectory = substr($fileVirtualPath, strlen($virtualDirectory));
		
		$firstSlash = strpos($fileDirectory,'/');
		
		$countSlash = substr_count($fileDirectory,'/');
		$relPath = "";
		for ($i=1; $i<=$countSlash; $i++) {
				$relPath = '../' . $relPath;
			}
		
		$section = substr ($fileDirectory, 0, $firstSlash);
		$subsection = dirname($fileDirectory);
			if ($subsection == ".") { $subsection = "";}
			
		$fileName = basename($fileVirtualPath);
		$pageName = substr($fileName, 0, strlen($fileName)-4);
		

/*  	echo "fileVirtualPath: &nbsp;&nbsp;" . $fileVirtualPath . "<br>";
		echo "fileDirectory: &nbsp;&nbsp;" . $fileDirectory . "<br>";
		echo "section: &nbsp;&nbsp;" . $section . "<br>";
		echo "subsection: &nbsp;&nbsp;" . $subsection . "<br>";
		echo "fileName: &nbsp;&nbsp;" . $fileName . "<br>";
		echo "pageName: &nbsp;&nbsp;" . $pageName . "<br>";
		echo "relPath: &nbsp;&nbsp;" . $relPath . "<br>";	*/
		
		$pageVariable["fileDirectory"] = $fileDirectory;
		$pageVariable["section"] = $section;
		$pageVariable["subsection"] = $subsection;
		$pageVariable["fileName"] = $fileName;
		$pageVariable["pageName"] = $pageName;
		$pageVariable["relPath"] = $relPath;
		
		return $pageVariable;
		
	}
	
}
?>