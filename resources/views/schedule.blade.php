<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Schedule') }}
        </h2>
    </x-slot>

    <!-- Information container -->
<div class="w3-container w3-padding-64 w3-blue-grey w3-grayscale-min w3-xlarge">
  <div class="w3-content">
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">Book Space</h1>
    <p></p>
    <p> We offer consulations and instalations services, book here</p>
    <p class="w3-xxlarge"><strong>Reserve</strong> a date for consulatons and installations where available</p>


                 
                 
                </div>
            </div>
       
    
   

  
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<div>
  <style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
.section {
	position: relative;
	height: 100vh;
}

.section .section-center {
	position: absolute;
	top: 50%;
	left: 0;
	right: 0;
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
}

#booking {
	font-family: 'Hind', sans-serif;
	background-image: url('../img/background.jpg');
	background-size: cover;
	background-position: center;
}

#booking::before {
	content: '';
	position: absolute;
	left: 0;
	right: 0;
	bottom: 0;
	top: 0;
	background: rgba(0, 0, 0, 0.6);
}

.booking-form {
	max-width: 586px;
	width: 100%;
	margin: auto;
}

.booking-form .form-header {
	text-align: center;
	margin-bottom: 25px;
}

.booking-form .form-header h1 {
	font-size: 42px;
	color: #fff;
	margin-top: 0;
	margin-bottom: 0px;
	font-weight: 700;
	text-transform: capitalize;
}

.booking-form>form {
	background-color: #1e1e1e;
	padding: 40px;
	-webkit-box-shadow: 0px 5px 15px -5px rgba(0, 0, 0, 0.8);
	box-shadow: 0px 5px 15px -5px rgba(0, 0, 0, 0.8);
}

.booking-form .form-group {
	position: relative;
	margin-bottom: 30px;
}

.booking-form .form-control {
	background-color: #2d2d2d;
	height: 50px;
	padding: 0px 20px;
	border: none;
	-webkit-box-shadow: none;
	box-shadow: none;
	border-radius: 0px;
	color: #fff;
}

.booking-form .form-control::-webkit-input-placeholder {
	color: rgba(255, 255, 255, 0.3);
}

.booking-form .form-control:-ms-input-placeholder {
	color: rgba(255, 255, 255, 0.3);
}

.booking-form .form-control::placeholder {
	color: rgba(255, 255, 255, 0.3);
}

.booking-form input[type="date"].form-control:invalid {
	color: rgba(255, 255, 255, 0.3);
}

.booking-form select.form-control {
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
}

.booking-form select.form-control+.select-arrow {
	position: absolute;
	right: 6px;
	bottom: 6px;
	width: 32px;
	line-height: 32px;
	height: 32px;
	text-align: center;
	pointer-events: none;
	color: #fff;
	font-size: 14px;
}

.booking-form select.form-control+.select-arrow:after {
	content: '\279C';
	display: block;
	-webkit-transform: rotate(90deg);
	transform: rotate(90deg);
}

.booking-form .form-label {
	color: #fff;
	font-size: 14px;
	font-weight: 400;
	margin-bottom: 5px;
	display: inline-block;
	letter-spacing: 0.4px;
}

.booking-form .submit-btn {
	color: #fff;
	background-color: #6c8f18;
	font-weight: 400;
	height: 50px;
	border: none;
	width: 100%;
	display: block;
	letter-spacing: 0.4px;
}
</style>
</div>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<title>Booking</title>

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="./Booking Form HTML Template_files/bootstrap.min.css">


<meta name="robots" content="noindex, follow">
<style type="text/css" id="operaUserStyle"></style></head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Make your reservation</h1>
						</div>
						<form>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Choose service</span>
<div class= "container">
  <div class="select">
    <select>
      <option value="1">Consulatation</option>
      <option value="2">Installation</option>
      <option value="3">Other(specify)</option>
    </select>
  </div>
  <div class = "down_note">
  </div>
</div> 
										
									</div>
                  <div>
<input class="w3-input w3-padding-16 w3-border w3-text-black" type="text" placeholder="Message \ Special requirements" required name="Message">
								</div>
</div>
								<div class="col-md-6">
									<div class="form-group">
									
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<span class="form-label">Time and date</span>
                    <p><input class="w3-input w3-padding-16 w3-border w3-text-black" type="datetime-local" placeholder="Date and time" required name="date" value="2020-11-16T20:00"></p>

										
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<span class="form-label">Name</span>
                    <input class="w3-input w3-padding-16 w3-border w3-text-black" type="text" placeholder="Jill" required name="Message"
									
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<span class="form-label">Email</span>
									  <input class="w3-input w3-padding-16 w3-border w3-text-black" type="text" placeholder="JillValentine@gmail.com" required name="Message"
										<span class="select-arrow"></span>
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button class="submit-btn" onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Click!">Check availability</button>
                <!-- Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-teal w3-display-container"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      <h4>Booking</h4>
      <h5>Check your email for more information.<i class="fa fa-smile-o"></i></h5>
    </header>
    <div class="w3-container">
      <p>Sucessfully booked!</p>
      <p>Check your email for more information.</p>
    </div>
    <footer class="w3-container w3-teal">
      <p>  ...........   </p>
    </footer>
  </div>
</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script type="text/javascript" async="" src="./Booking Form HTML Template_files/analytics.js.download"></script><script async="" src="./Booking Form HTML Template_files/js"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>


</body>
<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-dark-grey">
  <div class="w3-row-padding">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p> Rolsa Technologies, for a greener future works in the cleantech industry and provides instalation of green technology services.</p>
      <p>All rights reserved.</a></p> 
    </div>
  
    <div class="w3-third">
      <h3>BLOG POSTS</h3>
      <ul class="w3-ul w3-hoverable">
        <li class="w3-padding-16">
          <img src="/w3images/workshop.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Podcacasts</span><br>
          <span>Lets talk about our environment</span>
        </li>
        <li class="w3-padding-16">
          <img src="/w3images/gondol.jpg" class="w3-left w3-margin-right" style="width:50px">
          <span class="w3-large">Posts</span><br>
          <span>Our future</span>
        </li> 
      </ul>
    </div>

    <div class="w3-third">
      <h3>POPULAR TAGS</h3>
      <p>
        <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Green Energy</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">London</span> 
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Renewable</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">DIY</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Solar panels</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Family</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Wind Turbines</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Shopping</span>
        <span class="w3-tag w3-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-grey w3-small w3-margin-bottom">Games</span>
      </p>
    </div>

  </div>
  </footer>
  
  <div class="w3-black w3-center w3-padding-24">Powered by <a href="" title="W3.CSS" target="_blank" class="w3-hover-opacity"> Reach Studios</a></div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
</x-app-layout>