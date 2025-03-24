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

	<!-- Google font -->
	<link href="./Booking Form HTML Template_files/css" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="./Booking Form HTML Template_files/bootstrap.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="./Booking Form HTML Template_files/style.css">

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
								<button class="submit-btn">Check availability</button>
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
</html>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
  <p>Powered by <a href="p" title="" target="_blank" class="w3-hover-text-green">Reach Studios</a></p>
</footer>

</html>
</html>
</x-app-layout>