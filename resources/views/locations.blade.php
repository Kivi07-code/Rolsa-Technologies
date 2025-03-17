<x-app-layout>
  <head><bold>Select Your nearest branch here</bold></head>
<div class= "container">
  <div class="select">
    <select>
      <option value="1">Leeds</option>
      <option value="2">Kneseborough Castle</option>
      <option value="3">Herrogate</option>
    </select>
  </div>
  <div class = "down_note">
  <p>Coffee, at the City hall <a href="" target="_blank">here!</a></p>
  </div>
</div> 
<style>
:root {
  --background-gradient: linear-gradient(178deg, #ffff33 10%, #3333ff);
  --gray: #34495e;
  --darkgray: #2c3e50;
}

select {
  /* Reset Select */
  appearance: none;
  outline: 10px red;
  border: 0;
  box-shadow: none;
  /* Personalize */
  flex: 1;
  padding: 0 1em;
  color: #fff;
  background-color: var(--darkgray);
  background-image: none;
  cursor: pointer;
}
/* Remove IE arrow */
select::-ms-expand {
  display: none;
}
/* Custom Select wrapper */
.select {
  position: relative;
  display: flex;
  width: 20em;
  height: 3em;
  border-radius: .25em;
  overflow: hidden;
}
/* Arrow */
.select::after {
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  padding: 1em;
  background-color: #34495e;
  transition: .25s all ease;
  pointer-events: none;
}
/* Transition */
.select:hover::after {
  color: #f39c12;
}

/* Other styles*/
body {
  color: #fff;
  background: var(--background-gradient);
}


/* 가운데정렬 - position,transform*/
.container {
  position : absolute;
  top: 50%;
  left : 50%;
  transform :
  translate(-50%,-50%); 
}

/* 가운데정렬 - flexbox*/
/* 근데 이건 1행 정렬이된다. */
/* .container {
  display: flex;
  justify-content: center;
  align-items: absolute;
} */

.down_note {
    display: flex;
    justify-content: center;

}
 </style>
</x-app-layout>