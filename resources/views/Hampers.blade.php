<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Hampers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Buy a basket full of our goods sold all in our shop!") }}
                </div>
            </div>
        </div>
    </div>
    <style>


<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey w3-content" style="max-width:1600px">





  <!-- Header -->
  <header id="Hampers">
    <a href="#"><img src="/w3https://i.etsystatic.com/19119334/r/il/e77e87/4255511270/il_fullxfull.4255511270_79nd.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1 color="white"><b>Hampers</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">Filter:</span> 
      <button class="w3-button w3-black">ALL</button>
      <button class="w3-button w3-white"><i class="fa fa-diamond w3-margin-right"></i>coffee</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>Tea</button>
      <button class="w3-button w3-white w3-hide-small"><i class="fa fa-map-pin w3-margin-right"></i>Snacks</button>
    </div>
    </div>
  </header>
  
  <!-- First Photo Grid-->
   
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="https://i.etsystatic.com/19119334/r/il/e77e87/4255511270/il_fullxfull.4255511270_79nd.jpg" alt="Hamper" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Coffee Hamper</b></p>
        <p>a basket with only coffee related products</p>
        <p><bold>£12.50</bold></p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="https://i.etsystatic.com/19119334/r/il/e77e87/4255511270/il_fullxfull.4255511270_79nd.jpg" alt="Hamper" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Tea Hamper</b></p>
        <p>a basket full of tea based snacks and materials</p>
        <p><bold>£11.50</bold></p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="https://i.etsystatic.com/19119334/r/il/e77e87/4255511270/il_fullxfull.4255511270_79nd.jpg" alt="Hamper" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Custom Hamper</b></p>
        <p>a basket full of items of your choice</p>
        <p><bold>£14.70</bold></p>
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="https://i.etsystatic.com/19119334/r/il/e77e87/4255511270/il_fullxfull.4255511270_79nd.jpg" alt="Hamper" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Liqour hamper</b></p>
        <p>Basket with alcohol and other snacks</p>
        <p><bold>£18.90</bold></p>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="https://i.etsystatic.com/19119334/r/il/e77e87/4255511270/il_fullxfull.4255511270_79nd.jpg" alt="Hamper" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Family Hamper</b></p>
        <p>Basket designed to share with the family</p>
        <p><bold>£15.10</bold></p>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="https://i.etsystatic.com/19119334/r/il/e77e87/4255511270/il_fullxfull.4255511270_79nd.jpg" alt="Hamper" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Singles Hamper</b></p>
        <p>a basket with snacks for one person</p>
        <p><bold>£11.80</bold></p>
      </div>
    </div>
  </div>

  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
      <a href="#" class="w3-bar-item w3-black w3-button">1</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
      <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
    </div>
  </div>


</body>




</style>

    <title w3-color-white>Drinks Menu</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
<style>
body, html {height: 100%}
body,h1,h2,h3,h4,h5,h6 {font-family: "Amatic SC", sans-serif}
.menu {display: none}
.bgimg {
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url("");
  min-height: 90%;
}
</style>

    <!-- Footer -->
<footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
  <p>Powered by <a  title="Mantis Solutions" target="_blank" class="w3-hover-text-green">Mantis Solutions</a></p>
</footer>

</x-app-layout>