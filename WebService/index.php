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
<title>Print Ad Simple Service</title>
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
<li><a href="index.php" class="activelink">Home</a>
</li>
<li><a href="#">Advertisements</a>
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



<form method="Post" id="form" ><h3>Select from the drop down the number for your Ad and then in the from enter your number</h3>
<br></br>
<?php
  if($_POST)
   {
$cell1 = $_POST['from'];
$cell2 = $_POST['tonumber'];
 if(!preg_match('/^[0-9]{11}+$/',$cell1))
     {
         echo "<div id='id_error'>Invalid number: From Mobile Number must be 11 digits e.g 27735266205</div>";
     }
	 elseif(!preg_match('/^[0-9]{11}+$/',$cell2))
     {
         echo "<div id='id_error'>invalid number: To Mobile Number must be 11 digits e.g 27735266205</div>";
     }
    else   
	{
	 redirect_to("getAd.php?from=$cell1&to=$cell2");
     }
   }
   
   



?>
<table>
<tr data-tooltip="Select from the drop down format 27735266205" class="tooltip">
<td>
<label> From</label></td><td><select type="text" name="from"  />
<option></option>
<option>27821112220</option>
<option>27821112221</option>
<option>27821112222</option>
<option>27821112223</option>
<option>27821112224</option>
<option>27821112225</option>
<option>27821112226</option>
<option>27821112227</option>
<option>27821112228</option>
<option>27821112229</option>
<option>..................................</option>

</select></td>
</tr>

<tr data-tooltip=" Number in the format 27735266205 , 11 digits" class="tooltip">
<td>
<label> To</label></td>
<td> <input type="text" name="tonumber" /></td>
</tr>

<tr>
<td><input id='button2' type="Submit" value="Submit"></td><td><input id='button2' type="Reset" value="clear"></td>
</tr>
</table>
</form>
<figure id="ad">
<img src="images/your_ad_here_336x280.jpg"></img>
</figure>
<br></br>
<p id="content">
Use any language to create a web service that is a very simple Please-Call-Me ad-server.  The HTTP request must receive the 'from' and 'to' phone numbers which should look something like this:
http://your.server/getAd?from=27821112220&to=27821112221
The server must then use the telephone numbers from the request and the information in the 2 attached CSV files to return the text of the most most appropriate Ad. For example, I'll want to see something like this in the response:
Please call John on +27 82 111 2220 ** Dial *120*123443#  to get your free coupons at Builders Warehouse **
</p>
</section>
<Footer>

<nav>
<ul>
<li><a href="#" class="activelink">Home</a>
</li>
<li><a href="#">Advertisements</a>
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
