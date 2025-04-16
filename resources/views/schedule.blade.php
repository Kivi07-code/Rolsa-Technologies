<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }
    .container {
      max-width: 600px;
      margin: 50px auto;
      padding: 30px;
      background-color: white;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    h2 {
      text-align: center;
      color: #333;
    }
    label {
      display: block;
      margin-top: 15px;
    }
    input[type="text"], input[type="email"], input[type="date"], input[type="time"], select, textarea {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }
    textarea {
      height: 120px;
      resize: vertical;
    }
    button {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      margin-top: 20px;
    }
    button:hover {
      background-color: #45a049;
    }
    #popup {
      display: none;
      position: fixed;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 9999;
    }
    .popup-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
    .popup-content button {
      background-color: #4CAF50;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Consultation/Installation Booking</h2>
  <form id="bookingForm">
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Your Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="date">Preferred Date:</label>
    <input type="date" id="date" name="date" required>

    <label for="time">Preferred Time:</label>
    <input type="time" id="time" name="time" required>

    <label for="serviceType">Type of Service:</label>
    <select id="serviceType" name="serviceType" required>
      <option value="consultation">Consultation</option>
      <option value="installation">Installation</option>
    </select>

    <label for="message">Additional Message:</label>
    <textarea id="message" name="message" placeholder="Enter any additional details or questions"></textarea>

    <button type="submit">Book Now</button>
  </form>
</div>

<!-- Popup -->
<div id="popup">
  <div class="popup-content">
    <h3>Booking Successful!</h3>
    <p>Your consultation/installation has been booked successfully.</p>
    <button onclick="closePopup()">Close</button>
  </div>
</div>

<script>
  // Function to handle the form submission
  document.getElementById("bookingForm").addEventListener("submit", function(e) {
    e.preventDefault(); // Prevent form from refreshing the page

    // Get form input values
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const date = document.getElementById("date").value;
    const time = document.getElementById("time").value;
    const serviceType = document.getElementById("serviceType").value;
    const message = document.getElementById("message").value;

    // Validate if all fields are filled
    if (name && email && date && time && serviceType) {
      // Show success popup
      document.getElementById("popup").style.display = "block";
    }
  });

  // Function to close the popup
  function closePopup() {
    document.getElementById("popup").style.display = "none";
  }
</script>
<script src="//code.tidio.co/rh1jksohu0qmjoltu6ewmpzka8pm1moy.js" async></script>
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
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>

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
</html>

</x-app-layout>