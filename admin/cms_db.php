<?php
session_start();
include "config.php";
$site_name="Accretion";
$site_url="accretion.in";

try
 {
  $dbh = new PDO( "mysql:host=$servername;dbname=$dbname", $username, $password);
  //echo "database connected";
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
       {
         echo "Database connectivity failed ";
         //echo $e->getMessage();
      }



//this function for upload file and images
function upload_file($temp_file,$file,$filename,$path,$allowedExts=array("jpg","gif","png","jpeg"),$filetypes=array("image/jpeg","image/gif","image/png","image/jpeg"))
{
	$pos = strpos($file["name"],'php');
	if($pos === false)
	{
		if(!file_exists($path.$filename))
		{
				$temp = explode(".", $file["name"]);
				$extension = end($temp);
				if (in_array($extension, $allowedExts))
				{
					foreach ($filetypes as $filetype)
					{
						if ($file["type"] == $filetype)
						{
								if ($file["error"] == 0)
								{
									move_uploaded_file($temp_file,$path."/".$filename);

									$_SESSION['message']="File ".$file["name"]." Uploaded";
									return 1;
								} else $_SESSION['message']="Upload Error : " . $file["error"];
						}  else $_SESSION['message']="File Type Not Allowed";
					}
				} else $_SESSION['message']="File Extension Not Allowed";
		} else $_SESSION['message']="File Already Exists";
	}	else $_SESSION['message']="File Type Not Allowed";
return 0;
}

function clean_url($str) {
	$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $str);
	$clean = strtolower(trim($clean, '-'));
	$clean = preg_replace("/[\/_|+ -]+/", '-', $clean);
	return $clean;
}
function clean_filename($filename)
  {
      $breakpoint  = strrpos($filename, '.');
      $beforeext  = substr($filename, 0,$breakpoint);
      // Reduce file name characters
      if (strlen($beforeext)>50)
        {
          $beforeext = substr($beforeext, 0,50);
        }
      $extension = substr($filename, $breakpoint);
      // Check PHP Extension
      if (strpos($extension,"php")>0)
        $extension.="Possible Attack File.Not-allowed";
      $clean     = preg_replace("([^\w\s\d\-_~,;\[\]\(\)])", "", $beforeext);
      $finalname  = str_replace(' ', '-', $clean).$extension;
      return strtolower($finalname);
  }

function show_msg()
{
if (isset($_SESSION['message']) && ($_SESSION['message']!=""))
	{echo '<div class="notify">';
	echo  $_SESSION['message'];
	$_SESSION['message']="";
	echo '</div>';
	}
}

function deleteDirectory($dir) {
    if (!file_exists($dir)) return true;
    if (!is_dir($dir) || is_link($dir)) return unlink($dir);
        foreach (scandir($dir) as $item) {
            if ($item == '.' || $item == '..') continue;
            if (!deleteDirectory($dir . "/" . $item)) {
                chmod($dir . "/" . $item, 0777);
                if (!deleteDirectory($dir . "/" . $item)) return false;
            };
        }
        return rmdir($dir);
    }



?>
