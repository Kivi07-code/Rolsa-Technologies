<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Order') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Look through our menu") }}
                </div>
            </div>
        </div>
    </div>
    <html>
<head>
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
</head>
<body>
  

<!-- Menu Container -->

  <div class="w3-content">
  
    <h1 class="w3-center w3-jumbo" style="margin-bottom:64px">THE MENU</h1>
    <div class="w3-row w3-center w3-border w3-border-dark-grey">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pizza');" id="myLink">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Coffee</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pasta');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Tea and Boba</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Starter');">
        <div class="w3-col s4 tablink w3-padding-large w3-hover-red">Soft drinks</div>
      </a>
    </div>

    <div id="Pizza" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Americano</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$2.50</span></h1>
      <p class="w3-text-grey">Freshley brewed black esspresso with hot water</p>
      <hr>
   
      <h1><b>Cappucchino</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$5.50</span></h1>
      <p class="w3-text-grey">An esspresso made with steamed milk and a cream crown on top</p>
      <hr>
      
      <h1><b>Latte</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$3.00</span></h1>
      <p class="w3-text-grey">typical layered coffee and oat milk</p>
      <hr>

      <h1><b>Esspresso</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$2.50</span></h1>
      <p class="w3-text-grey">Just a casual black coffee steam with coffee beans</p>
      <hr>

      <h1><b>Flat white</b> <span class="w3-tag w3-red w3-round">Hot!</span><span class="w3-right w3-tag w3-dark-grey w3-round">$2.90</span></h1>
      <p class="w3-text-grey">Similar to a latte but with a lrager milk to coffee proportion</p>
      <hr>

      <h1><b>Cafe au lait</b> <span class="w3-tag w3-grey w3-round">New</span><span class="w3-right w3-tag w3-dark-grey w3-round">$3.50</span></h1>
      <p class="w3-text-grey">A strong dip pf coffee with fired milk</p>
    </div>

    <div id="Pasta" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Green tea</b> <span class="w3-tag w3-grey w3-round">Popular</span> <span class="w3-right w3-tag w3-dark-grey w3-round">$2.10</span></h1>
      <p class="w3-text-grey">just a green tea bag and hot water</p>
      <hr>
   
      <h1><b>Matcha Boba</b> <span class="w3-right w3-tag w3-dark-grey w3-round">4.90</span></h1>
      <p class="w3-text-grey">Matcha cup with tapioca pearls</p>
      <hr>
      
      <h1><b>Taro Boba</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$5.00</span></h1>
      <p class="w3-text-grey">Taro fruit flavoured drink with taro balls</p>
      <hr>

      <h1><b>Oolong Tea</b> <span class="w3-right w3-tag w3-dark-grey w3-round">4.50</span></h1>
      <p class="w3-text-grey">Fresh oolong roasted tea, goes well with pearls</p>
    </div>


    <div id="Starter" class="w3-container menu w3-padding-32 w3-white">
      <h1><b>Todays drink</b> <span class="w3-tag w3-grey w3-round">Seasonal</span><span class="w3-right w3-tag w3-dark-grey w3-round">$5.50</span></h1>
      <p class="w3-text-grey">Ask the waiter</p>
      <hr>
   
      <h1><b>Coca Cola</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$2.50</span></h1>
      <p class="w3-text-grey">classic coke, available in zero sugar</p>
      <hr>
      
      <h1><b>Fanta</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$2.50</span></h1>
      <p class="w3-text-grey">Orange european Fanta available in berry flavour also</p>
      <hr>
      
      <h1><b>Sprite</b> <span class="w3-right w3-tag w3-dark-grey w3-round">$10.50</span></h1>
      <p class="w3-text-grey">Bubbly water</p>
    </div><br>

  </div>
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-48 w3-xxlarge">
  <p>Powered by <a href="" title="W3.CSS" target="_blank" class="w3-hover-text-green">Mantis Solutions</a></p>
</footer>

<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-red";
}
document.getElementById("myLink").click();
</script>

</body>
</html>
</x-app-layout>