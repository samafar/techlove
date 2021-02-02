<?php 

/**
 * The template for displaying Konsult uppdrag page
 * 
 * Template Name: Lista
 * 
 * @package Techlove
 */

get_header();
?>

<main>
  <section class="konsult-slider">
    <h1>Konsultlista</h1>
  </section>

  <section class="konsult-list">
    <div class="konsult-firm">Firm</div>
    <div class="konsult-firm">Firm</div>
    <div class="konsult-firm">Firm</div>
    <div class="konsult-firm">Firm</div>
    <div class="konsult-firm">Firm</div>
    <div class="konsult-firm">Firm</div>
  </section>
</main>


<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Sök konsult.." title="Type in a name">

<section id="knslt">
  <div class="konsult-box">Fullstack<br>Anders</div>
  <div class="konsult-box">Fullstack<br>Johan</div>
  <div class="konsult-box">Frontend<br>Mikael</div>
  <div class="konsult-box">Fullstack<br>Robert</div>
  <div class="konsult-box">Backend<br>Karl</div>
  <div class="konsult-box">Fullstack<br>Johanna</div>
  <div class="konsult-box">Frontend<br>Linda</div>
</section>
<hr>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Visa alla</button>
  <button class="btn" onclick="filterSelection('fullstack')"> Fullstack</button>
  <button class="btn" onclick="filterSelection('frontend')"> Frontend</button>
  <button class="btn" onclick="filterSelection('backend')"> Backend</button>
  <button class="btn" onclick="filterSelection('stockholm')">
    Stockholm</button>
</div>

<div class="container">
  <div class="filterDiv fullstack">Johan<br>Fullstack</div>
  <div class="filterDiv stockholm backend">Karl<br>Backend</div>
  <div class="filterDiv fullstack">Anders<br>Fullstack</div>
  <div class="filterDiv stockholm">Elin<br>Stockholm</div>
  <div class="filterDiv fullstack frontend">Markus<br>Fullstack</div>
  <div class="filterDiv stockholm">Linda<br>Stockholm</div>
  <div class="filterDiv frontend">Patrik<br>Frontend</div>
  <div class="filterDiv frontend">Olivia<br>Frontend</div>
  <div class="filterDiv backend">Jonas<br>Backend</div>
  <div class="filterDiv backend frontend">Love<br>Backend</div>
  <div class="filterDiv backend">Nicklas<br>Backend</div>
  <div class="filterDiv backend">Lars<br>Backend</div>
  <div class="filterDiv frontend">Erik<br>Frontend</div>
</div>

<script>
// First
function myFunction() {
  var input, filter, sec, li, a, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  sec = document.getElementById("knslt");
  li = sec.getElementsByClassName("konsult-box");

  for (i = 0; i < li.length; i++) {
    a = li[i];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}

// Second
filterSelection("all")

function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

<?php get_footer(); ?>