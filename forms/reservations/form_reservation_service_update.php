<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php')
?>
<form action="" method="post">
  <div>
    <label for="">
      SPA
    </label>
    <input id="spa" type="checkbox">
    <input type="date">
  </div>
  <div>
    <label for="">
      GYM
    </label>
    <input id="gym" type="checkbox">
    <input type="date">
  </div>
  <div>
    <label for="">
      Hourse expedition
    </label>
    <input id="hourse" type="checkbox">
    <input type="date">
  </div>
  <div>
    <label for="">
      Diving
    </label>
    <input id="diving" type="checkbox">
    <input type="date">
  </div>
  <div>
    <label for="">
      Restaurant
    </label>
    <input id="restaurant" type="checkbox">
    <input type="date">
  </div>
  <div>
    <p>total import <span id="importe">0</span>€</p>
    <input type="submit">
  </div>
</form>
<script>
  //Para calcular el total que le va a sumar los extras
  let sumaTotal = 0;
  let importe = document.getElementById("importe")
  let spa = document.getElementById("spa");
  spa.addEventListener('click', (e) => {
    if (e.target.checked == true) {
      sumaTotal = sumaTotal + 25;
    } else {
      sumaTotal = sumaTotal - 25;
    }
    console.log(sumaTotal);
    importe.innerText = sumaTotal;
  });
  let gym = document.getElementById("gym");
  gym.addEventListener("click", (e) => {
    if (e.target.checked == true) {
      sumaTotal = sumaTotal + 10;
    } else {
      sumaTotal = sumaTotal - 10;
    }
    console.log(sumaTotal);
    importe.innerText = sumaTotal;

  });
  let hourse = document.getElementById("hourse");
  hourse.addEventListener("click", (e) => {
    if (e.target.checked == true) {
      sumaTotal = sumaTotal + 50;
    } else {
      sumaTotal = sumaTotal - 50;
    }
    console.log(sumaTotal);
    importe.innerText = sumaTotal;

  });
  let diving = document.getElementById("diving")
  diving.addEventListener("click", (e) => {
    if (e.target.checked == true) {
      sumaTotal = sumaTotal + 45;
    } else {
      sumaTotal = sumaTotal - 45;
    }
    console.log(sumaTotal);
    importe.innerText = sumaTotal;

  })
  let restaurant = document.getElementById("restaurant");
  restaurant.addEventListener("click", (e) => {
    if (e.target.checked == true) {
      sumaTotal = sumaTotal + 12;
    } else {
      sumaTotal = sumaTotal - 12;
    }
    console.log(sumaTotal);
    importe.innerText = sumaTotal;
  })
</script>