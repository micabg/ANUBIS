<?
require("config.inc.php");

$link = mysql_connect($dbhost, $dbusername, $dbpassword);
if (!$link) {
    die('FATAL: MySQL Connection failed ! ' . mysql_error());
}
$db_selected = mysql_select_db($dbdatabase, $link);
if (!$db_selected) {
    die ('FATAL: Cannot use Anubis_db !  ' . mysql_error());
}

$configq = mysql_query('SELECT * FROM configuration');
if (!$configq) {
    die('FATAL: MySQL-Error: ' . mysql_error());
}
$config = mysql_fetch_object($configq);



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Anubis - a cgminer web frontend</title>

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/ddsmoothmenu.js">


/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>


<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>



</head>
<body>

<div id="templatemo_wrapper">

	<div id="templatemo_header">
    
    	<div id="site_title"><h1><a href="index.php">Main</a></h1></div>
        
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
              	<li><a href="index.php" >Home</a></li>

              	</li>
          		<li><a href="config.php">Configuration</a>

              	</li>
              	<li><a href="faq.php" class="selected">FAQ</a>

                </li>
              	<li><a href="contact.php">Contact/Donate</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
        
    </div> <!-- end of header -->
    
    
    <div id="templatemo_main">
    	<div class="col_fw">
        	<div class="templatemo_megacontent">
            	<h2>Hosts</h2>
				 
                <div class="cleaner h20"></div>

<table id="rounded-corner" summary="Hostsummary">
    <thead>
    	<tr>
			<th>Whats this ?</th></tr><tr>
			<td>Anubis is a web frontend for cgminer (<a href="https://bitcointalk.org/index.php?topic=28402.0">https://bitcointalk.org/index.php?topic=28402.0</a>) a bitcoin miner for windows/linux.
			Anubis "watches" your hosts by connecting to the API Port of cgminer.</td>
        </tr>
    	<tr>
			<th>How Do I enable it ?</th></tr><tr>
			<td>The Connection is very simple, just add "--api-listen" (and "--api-network") to the cgminer command line and cgminer's api is enabled.
			After installing Anubis simply start by <a href="addhost.php">adding some hosts.</a></td>
        </tr>
    	<tr>
			<th>Something is wrong/does not work as expected.</th></tr><tr>
			<td>Since we are in a very early development stage of Anubis there will surely be bugs. I'll start a git repo in short for Anubis and hope
			this wil speed bugfixes up a little. For the moment, keep checking <a href="https://bitcointalk.org/index.php?board=42.0">https://bitcointalk.org/index.php?board=42.0</a>
			for new messages and/or bugfixes concerning Anubis</td>
        </tr>
    	<tr>
			<th>Installation ?</th></tr><tr>
			<td>All you need is a php/mysql enabled host. This host has to be able to reach your miners by network i.e. you should be
			able to ping your miners from the php/mysql enabled host. Simple copy all the Anubis files into a directory of your choice
			into your webserver root and call it there like: http://my.host.com/anubis i.e.<BR>
			<BR>
			Anubis will need a mysql user/password/database connection. Edit "config.inc.php" and change it to your needs. </td>
        </tr>
        
    </thead>
</table>

                
                
                
                <div class="cleaner h20"></div>
<!--                 <a href="#" class="more float_r"></a> -->
            </div>

            <div class="cleaner"></div>
		</div>

        <div class="cleaner"></div>
        </div>
    </div>
    
    <div class="cleaner"></div>

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
        <? include("footer.inc.php"); ?>
        <div class="cleaner"></div>
    </div>
</div> 
  
</body>
</html>