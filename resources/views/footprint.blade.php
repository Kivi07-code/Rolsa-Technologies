<x-app-layout>
  <html>
  <html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Carbon Footprint Calculator</title>
  
  <style>
    .container {
      max-width: 800px;
      background: white;
      padding: 30px;
      border-radius: 8px;
      margin: auto;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    h2 {
      text-align: center;
      color: #2E8B57;
    }
    label {
      margin-top: 15px;
      display: block;
    }
    input[type="number"],
    input[type="text"] {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
    }
    .section {
      margin-bottom: 30px;
    }
    .checkbox-group {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }
    .checkbox-group label {
      display: flex;
      align-items: center;
      gap: 5px;
    }
    button {
      padding: 10px 20px;
      background-color: #2E8B57;
      color: white;
      border: none;
      cursor: pointer;
      font-size: 16px;
      margin-top: 20px;
    }
    #result {
      margin-top: 20px;
      font-size: 18px;
      color: #333;
      text-align: center;
    }
  </style>
</head>
<body>
    

<div class="container">
  <h2>🌍 Carbon Footprint Calculator</h2>
  <div class="nav-buttons">
    <button onclick="document.getElementById('household').scrollIntoView()">🏠 Household</button>
    <button onclick="document.getElementById('lifestyle').scrollIntoView()">🌿 Lifestyle</button>
    <button onclick="document.getElementById('transport').scrollIntoView()">🚗 Transport</button>
  </div>
  <style>
    .nav-buttons{
        text-align:center;
    }
    </style>

  <form id="carbonForm">

    <div class="section">
      <h3>🏠 Household</h3>
      <label>Number of people in your household:</label>
      <input type="number" id="household" required>

      <label>Electricity used per month (kWh):</label>
      <input type="number" id="electricity" required>

      <label>Gas used per month (therms):</label>
      <input type="number" id="gas" required>
    </div>

    <div class="section">
      <h3>🌿 Lifestyle</h3>
      <label>Kilometers driven per week:</label>
      <input type="number" id="driving" required>

      <label>Flights taken per year:</label>
      <input type="number" id="flights" required>

      <label>Meat meals per week:</label>
      <input type="number" id="meat" required>
    </div>

    <div class="section">
      <h3>♻️ Recycling Habits</h3>
      <div class="checkbox-group">
        <label><input type="checkbox" id="recyclePaper"> Paper</label>
        <label><input type="checkbox" id="recyclePlastic"> Plastic</label>
        <label><input type="checkbox" id="recycleGlass"> Glass</label>
        <label><input type="checkbox" id="recycleCans"> Tin Cans</label>
      </div>
    </div>

    <!-- Transport Section -->
    <div class="section" id="transport">
      <h3>🚗 Public & Alternative Transport</h3>

      <label>Kilometers on public transport per week (bus/train):</label>
      <input type="number" id="publicTransport" value="0">

      <label>Kilometers by motorcycle per week:</label>
      <input type="number" id="motorcycle" value="0">

      <label>Kilometers by taxi/ride-share per week:</label>
      <input type="number" id="taxi" value="0">
    </div>

    <button type="submit">Calculate My Carbon Footprint</button>
    <div id="result"></div>

  </form>
</div>

<script>
document.getElementById("carbonForm").addEventListener("submit", function(e) {
  e.preventDefault();

  // Gather inputs
  const people = parseFloat(document.getElementById("household").value);
  const electricity = parseFloat(document.getElementById("electricity").value);
  const gas = parseFloat(document.getElementById("gas").value);
  const driving = parseFloat(document.getElementById("driving").value);
  const flights = parseFloat(document.getElementById("flights").value);
  const meat = parseFloat(document.getElementById("meat").value);

  const recPaper = document.getElementById("recyclePaper").checked;
  const recPlastic = document.getElementById("recyclePlastic").checked;
  const recGlass = document.getElementById("recycleGlass").checked;
  const recCans = document.getElementById("recycleCans").checked;

  // --- Estimate Emissions (simple multipliers) ---
  let footprint = 0;

  // Household
  footprint += (electricity * 0.475) * 12;
  footprint += (gas * 5.3) * 12;

  // Lifestyle
  footprint += driving * 52 * 0.21;
  footprint += flights * 250;
  footprint += meat * 52 * 2.5;

  // Recycling offsets (subtract emissions if recycling is done)
  if (recPaper) footprint -= 184;
  if (recPlastic) footprint -= 25;
  if (recGlass) footprint -= 46;
  if (recCans) footprint -= 165;

  // Adjust per person in household
  const perPerson = (footprint / people).toFixed(2);
  const tonsCO2 = (footprint / 1000).toFixed(2);

  // Display Result
  document.getElementById("result").innerText = `Your estimated annual carbon footprint is ${tonsCO2} tons of CO₂ total (${perPerson} kg per person).`;
});
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