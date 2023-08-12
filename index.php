<!-- 
https://github.com/stigwo

Simple IP Whois Lookup Script

 -->

<?php

// Get Current User IP Address
$user_ip = $_SERVER['REMOTE_ADDR'];

if (isset($_POST['search'])) {
    
  $user_ip = $_POST['ip'];
}


 
// Get IP Data Using ip-api.com
$data = file_get_contents("http://ip-api.com/json/$user_ip?fields=status,message,country,countryCode,region,regionName,city,zip,lat,lon,timezone,currency,isp,org,as,mobile,proxy,hosting,query");
$json = json_decode($data, true);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="css/all.min.css" />
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/styleip.css" />
  <title>Find IP Whois Info</title>
</head>

<body class="bg-default">
        
    <!-- Header Start -->
        <header>
          <!-- Navbar -->
          <nav class="navbar navbar-expand lg navbar-light bg-dark shadow-sm">
            <div class="container-fluid">
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link text-white" aria-current="page" href="#home"><i class="fa fa-home"></i>&nbsp;Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#howtouse"><i class="fa fa-user">&nbsp;</i>How To Use</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- Navbar -->
        </header>
    <!-- Header End -->
    
    
<div class="container">
    <!-- Search Start -->
      <div class="search">
        <div class="container">
          <div class="row">
            <div class="col-md-5 mx-auto">
              <div class="txt text-center">
               
                   <img src="images/favicon.png" class="w-25 logo" />
                    <h1 class="main-heading">Find IP Whois Info</h1>
               
                <p class="sub-heading">Search IP address or domain name</p>
              </div>
              <form class="form" action="" method="post">
                <input type="text" class="input me-2 bg-white" name="ip" placeholder="IP Address" value="<?php echo $user_ip; ?>" required />
                <button type="submit" name="search" class="btn bg-dark">
                   <i class="fa fa-search ms-1"></i>
                </button>
              </form>
            </div>
          </div>
      </div>
    <!-- Search End -->
<?php





//$message =  $json['message'];
if ($json['status'] == 'success') {
	$message = "xxx";
	$query =  $json['query'];
$status = $json['status']; 
	$country = $json['country'];
$countryCode = $json['countryCode'];
$regionName = $json['regionName'];
$city = $json['city'];
$zip = $json['zip'];
$lat = $json['lat'];
$lon = $json['lon'];
$timezone = $json['timezone'];
$currency = $json['currency'];
$isp = $json['isp'];
$org = $json['org'];
$as = $json['as'];
$mobile = $json['mobile'];
$proxy = $json['proxy'];
$hosting = $json['hosting'];

	
	
	echo "    <div class='row mt-5'  id='home'>
          
      
        <div class='col-md-6 shadow rounded p-3 bg-white m-auto'>
          <table class='item table h-100 p-4 first bg-white'>
            <tbody>
              <tr>
                <td>IP Address:</td>
                <td>" . $query .  "</td>
              </tr>
			  	  
              <tr>
                <td>Country:</td>
                <td>" . $country . "</td>
              </tr>
              <tr>
                <td>Country Code:</td>
                <td>" . $countryCode . "</td>
              </tr>
              <tr>
                <td>State/Region:</td>
                <td>" . $regionName . "</td>
              </tr>
              <tr>
                <td>City:</td>
                <td>" . $city . "</td>
              </tr>
              <tr>
                <td>Zip/Postal Code:</td>
                <td>" . $zip . "</td>
              </tr>
              <tr>
                <td>Latitude:</td>
                <td>" . $lat . "</td>
              </tr>
              <tr>
                <td>Longitude:</td>
                <td>" . $lon . "</td>
              </tr>
              <tr>
                <td>Timezone:</td>
                <td>" . $timezone . "</td>
              </tr>
              <tr>
                <td>Currency:</td>
                <td>" . $currency . "</td>
              </tr>
              <tr>
                <td>ISP:</td>
                <td>" . $isp . "</td>
              </tr>
              <tr>
                <td>ORG:</td>
                <td>" . $org . "</td>
              </tr>
              <tr>
                <td>AS:</td>
                <td>" . $as . "</td>
              </tr>
			     <tr>
                <td>Mobile:</td>
                <td>" . $mobile . "</td>
              </tr>
			      <tr>
                <td>Proxy:</td>
                <td>" . $proxy . "</td>
              </tr>
			   <tr>
                <td>Hosting:</td>
                <td>" . $hosting . "</td>
              </tr>
            </tbody>
          </table>
        </div>
      
"; 
}

 else {
	 $query =  $json['query'];
	 $message =  $json['message'];
	 echo " 
	 <br> <br><div class='txt text-center'>
	 <p class='sub-heading'>Error " . $query .  " is " . $message .  "</p>
	 </div>";
 }
?>
      </div>
      
      
       
        
        </div>
    </div>
</div>
<!-- About App Section-->
<div class="wrapper bg-light p-5" id="howtouse">
    <div class="container">
        <div class="row">
            <h5>About the app:</h5>
            <p>FindIT IP Lookup is a free online tool that is easy to use and lets you grab Location and Related Data of IP or Domain using API.</p>
            <h5>How to Use?</h5>
            <ul>
                <li>1. Enter IP Address or Domain eg. www.google.com</li>
                <li>2. Click the "Search" Button</li>
            </ul>
        </div>
    </div>
</div>

 
<!--Footer-->
    <footer class="page-footer bg-white font-small p-2">
    
      <!-- Copyright -->
      
      <div class="footer-copyright text-center py-3">
        <p>Copyright &copy; <?php echo date("Y"); ?> <b>Find IP Info</b> - All rights reserved</p>
		<p><a href="https://github.com/stigwo">Get the script for free on my Github</p>
      </div>
      <!-- Copyright -->
    
    </footer>
<!-- Footer -->
   <script src="script/jquery-2.2.4.js"></script>
  <!-- Bootstrap Bundle -->
  <script src="script/bootstrap.bundle.min.js"></script>
</body>

</html>