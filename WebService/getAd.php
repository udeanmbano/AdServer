<?php
//import the file with redirect function for a location page
 require_once("includes/functions.php"); ?>
<!Doctype html5>
<!-- 
Author- Udean Mbano
Description: Please Call Me Ad Server
Date: 24/01/2015
-->
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/main.css">
<title>Print Ad Simple Service Response</title>
	<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>

<header>
<figure id="ad2">
<img src="images/ads-here-place-advert-here.gif" height="154" width="153"></img>
</figure>
<figure id="ad3">
<a href="http://www.facebook.com"><img src="images/facebook_glossy_facebook_icon_white_facebook_icon.png" height="35" width="33"></img></a>
</figure>
<figure id="ad4">
<a href="http://www.twitter.com"><img src="images/twitter_white_social.png" height="40" width="40"></img></a>
</figure>
<figure id="ad5">
<a href="http://www.linkedin.com"><img src="images/128.png" height="40" width="40"></img></a>
</figure>
 <div id="search_box">
                                 
					     
                                            <form method="get" action="http://www.google.com/search" id="search" target="_blank"> 
                                                <table>
                                 <tr><td></td><td><input type="text" name="q" size="40" maxlength="255" value="" placeholder="Google Search...">
                                <input id='button' type="submit" value="Search">
                                       <input type="hidden" name="sitesearch" value="http://www.mgi.ac.za" target="_blank"><br></td></tr>
                                                </table>
					</form>
				</div>
<nav>
<ul>
<li><a href="index.php">Home</a>
</li>
<li><a href="#" class="activelink">Advertisements</a>
</li>
</li>
<li><a href="#">About Us</a>
</li>
</li>
<li><a href="#">Contact</a></li>

</li>
</ul>
</nav>

</header>
<section id="main">
<br></br>

<?php

if (isset($_GET['from'])&&$_GET['to'] ) {
$cell2=$_GET['from'];//variable with number with Ad
// Function to import data that is the Persons CSV file into the CSV2Array
function ImportCSV2Array($filename)
{
    $row = 0;//variable to get the row cell value
    $col = 0;//variable to get the column cell value
 
    $handle = @fopen($filename, "r");// function to open the file
    if ($handle) 
    {
        while (($row = fgetcsv($handle, 4096)) !== false) 
        {
            if (empty($fields)) 
            {
                $fields = $row;
                continue;
            }
 
            foreach ($row as $k=>$value) 
            {
                $results[$col][$fields[$k]] = $value;
            }
            $col++;
            unset($row);
        }
        if (!feof($handle)) 
        {
            echo "Error: unexpected fgets() failn";
        }
        fclose($handle);
    }
 
    return $results;// return all the results from the handle into the array
}
// Function to import data that is the Ads CSV file into the CSV2ArrayAds
function ImportCSV2ArrayAds($filename)
{
    $row = 0;//variable to get the row cell value
    $col = 0;//variable to get the column cell value
 
    $handle = @fopen($filename, "r");// function to open the file
    if ($handle) 
    {
        while (($row = fgetcsv($handle, 4096)) !== false) 
        {
            if (empty($fields)) 
            {
                $fields = $row;
                continue;
            }
 
            foreach ($row as $k=>$value) 
            {
                $results[$col][$fields[$k]] = $value;
            }
            $col++;
            unset($row);
        }
        if (!feof($handle)) 
        {
            echo "Error: unexpected fgets() failn";
        }
        fclose($handle);
    }
 
    return $results;// return all the results from the handle into the array
}
$filename = "Persons.csv";//variable to store file name
$csvArray = ImportCSV2Array($filename);// pass file name variable with the file name
 $dob="";// variable to store person name
 $locationFinder="";// variable to store location of matching record with From Number passed from the index.php received as get
 $cellnumber="";// variable to store mobile number from the Persons.csv file from matching record
foreach($csvArray as $row)
{
	if($row['Tel']==$cell2)
		{
      
    $cellnumber=$row['Tel'];
	 $locationFinder=$row['Location'];
	 $dob=$row['Name'];
    break ;
	
		}
}


$filename2 = "Ads.csv";//variable to store file name
$csvArray2 = ImportCSV2ArrayAds($filename2);// pass file name variable with the file name
$urAD="";// variable to store the Ad information matching with locationfinder that got the location value from the Persons.csvArray
// The Persons.csv and Ads.csv are related by location the number selected by the user has a location that matches with the Ad response in the Ads.csv
foreach($csvArray2 as $row)
{
	if($row['Location']==$locationFinder)
	{
	   $urAD=$row['Ad'];
	   break;
	}
	   
}


echo " Please call $dob on +$cellnumber $urAD" ;
}
?>

<figure id="ad">
<img src="images/your-ad-here1.gif"></img>
</figure>
<br></br>
<br></br>
<br></br>
<br></br>
<p id="content">
Click Home to go back and Please-Call-Me ad as may times as you want
</p>
</section>

<Footer>

<nav>
<ul>
<li><a href="index.php">Home</a>
</li>
<li><a href="#" class="activelink">Advertisements</a>
</li>
</li>
<li><a href="#">About Us</a>
</li>
</li>
<li><a href="#">Contact</a></li>

</li>
</ul><table>
<tr>
<td>
<figure >
<a href="http://www.facebook.com"><img src="images/facebook_glossy_facebook_icon_white_facebook_icon.png" height="35" width="33"></img></a>
</figure></td>
<td>
<figure>
<a href="http://www.twitter.com"><img src="images/twitter_white_social.png" height="40" width="40"></img></a>
</figure></td>
<td>
<figure>
<a href="http://www.linkedin.com"><img src="images/128.png" height="40" width="40"></img></a>
</figure></td>
</table>
</nav>

<p id="copyright">
Copyright&#169 2015 Udean Mbano ; RingCo Second Interview Assignment
</p>

</Footer>
</body>

</html>

