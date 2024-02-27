<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php')
?>
<div style="width: 30%; margin:auto; margin-top:50px">
  <form class="shadow bg-white rounded" action="" method="post">
    <h4 class="m-2" style="text-align: center;">
      Try the services you want
    </h4>
    <hr>
    <div class="m-2">
      <label>
        SPA
      </label>
      <input id="spa" type="checkbox">
      <p>
        <input id="spa_date" type="date" style="display: none;">
      </p>

    </div>
    <div class="m-2">
      <label>
        GYM
      </label>
      <input id="gym" type="checkbox">
      <p>
        <input id="gym_date" type="date" style="display: none;">
      </p>
    </div>
    <div class="m-2">
      <label>
        Hourse expedition
      </label>
      <input id="hourse" type="checkbox">
      <p>
        <input id="hourse_date" type="date" style="display: none;">

      </p>
    </div>
    <div class="m-2">
      <label>
        Diving
      </label>
      <input id="diving" type="checkbox">
      <p>
        <input id="diving_date" type="date" style="display: none;">
      </p>
    </div>
    <div class="m-2">
      <label>
        Restaurant
      </label>
      <input id="restaurant" type="checkbox">
      <p>
        <input id="restaurant_date" type="date" style="display: none;">
      </p>
    </div>
    <div class="form-group" style="text-align: center;">
      <p>total import <span id="importe">0</span>€</p>
      <hr>
      <input class="btn btn-primary" type="submit">
    </div>
  </form>
</div>
<script>
  //Para calcular el total que le va a sumar los extras
  let sumaTotal = 0;
  let importe = document.getElementById("importe");
  let spaArray = [];
  let gymArray = [];
  let heArray = [];
  let diveArray = [];
  let restaurantArray = [];


  // El extra del spa esta acabado solo queda clonar esto en los demas users
  let spa = document.getElementById("spa");
  let spa_date = document.getElementById("spa_date");
  let spaJson;
  let spaJsonPiece;
  spa.addEventListener('click', (e) => {
    if (e.target.checked == true) {
      spa_date.style.display = "block";
      sumaTotal = sumaTotal + 25;
      spa_date.addEventListener("change", (e) => {
        spaJsonPiece = {
          "Date Time": spa_date.value,
          "Initial Price": 25
        };
        spaJson = {
          "Spa": [spaJsonPiece]
        };
        console.log(spaJson);
      })

    } else {
      spaJson = {
        "Spa": null
      }
      sumaTotal = sumaTotal - 25;
      spa_date.style.display = "none";
      console.log(spaJson);
    }
    console.log(sumaTotal);
    importe.innerText = sumaTotal;
  });

  let gym = document.getElementById("gym");
  let gym_date = document.getElementById("gym_date");
  let gymJson;
  let gymJsonPiece;
  gym.addEventListener("click", (e) => {
    if (e.target.checked == true) {
      gym_date.style.display = "block";
      sumaTotal = sumaTotal + 25;
      gym_date.addEventListener("change", (e) => {
        gymJsonPiece = {
          "Date Time": gym_date.value,
          "Initial Price": 10
        };
        gymJson = {
          "Gym": [gymJsonPiece]
        };
        console.log(gymJson);
      });
    } else {
      sumaTotal = sumaTotal - 10;
      gym_date.style.display = "none";
      gymJson = {
        "Gym": null
      }
    }
    console.log(sumaTotal);
    importe.innerText = sumaTotal;
  });

  let hourse = document.getElementById("hourse");
  let hourse_date = document.getElementById("hourse_date");
  let hourseJsonPiece;
  let hourseJson;
  hourse.addEventListener("click", (e) => {
    if (e.target.checked == true) {
      sumaTotal = sumaTotal + 50;
      hourse_date.style.display = "block";
      hourse_date.addEventListener("change", (e) => {
        hourseJsonPiece = {
          "Date Time": hourse_date.value,
          "Initial Price": 50
        };
        hourseJson = {
          "Horse_expedition": [hourseJsonPiece]
        };
        console.log(hourseJson);
      });
    } else {
      sumaTotal = sumaTotal - 50;
      hourse_date.style.display = "none";
      hourseJson = {
        "Horse_expedition": null
      }
    }
    console.log(sumaTotal);
    importe.innerText = sumaTotal;
  });

  let diving = document.getElementById("diving");
  let diving_date = document.getElementById("diving_date");
  let divJsonPiece;
  let divJson;
  diving.addEventListener("click", (e) => {
    if (e.target.checked == true) {
      sumaTotal = sumaTotal + 45;
      diving_date.style.display = "block";
      diving_date.addEventListener("change", (e) => {
        divJsonPiece = {
          "Date Time": diving_date.value,
          "Initial Price": 50
        };
        divJson = {
          "Diving": [divJsonPiece]
        };
        console.log(hourseJson);
      });
    } else {
      sumaTotal = sumaTotal - 45;
      diving_date.style.display = "none";
      divJson = {
          "Diving": null
        };
    }
    console.log(sumaTotal);
    importe.innerText = sumaTotal;
  });
  let restaurant = document.getElementById("restaurant");
  let restaurant_date = document.getElementById("restaurant_date");

  restaurant.addEventListener("click", (e) => {
    if (e.target.checked == true) {
      sumaTotal = sumaTotal + 12;
      restaurant_date.style.display = "block";
    } else {
      sumaTotal = sumaTotal - 12;
      restaurant_date.style.display = "none";
    }
    console.log(sumaTotal);
    importe.innerText = sumaTotal;
  });
  importe.innerHTML = sumaTotal;
  // TODO Acabar los extras
  // En js creare un json que se guardara como extras y php lo leera para hacer el insert (siempre que no haya una manera de enviar los datos de manera mas facil claro)
</script>