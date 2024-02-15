<?php
//Las variable de inicio de session
session_start();
$user_id = $_SESSION['user_id'] ?? 0;
$user = $_SESSION['user'] ?? 'friend';
$user_role = $_SESSION['user_role'] ?? 'anonimo';
$user_foto = $_SESSION['user_foto'] ?? 'xico.png';
?>
<!-- @author Ivan -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Enlaces a los estilos -->
  <link rel="stylesheet" href="/student034/dwes/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="shortcut icon" href="/student034/dwes/imagenes/logo/icono.png">
  <title>Reshi's Hotel</title>
</head>

<body>
  <header class=" p-2">

    <div class="container-fluid ">
      <div class="row">
        <!-- Logo mas titulo -->
        <div class="col-lg-7">
          <h1>
            <a href="/student034/dwes/index.php"><img src="/student034/dwes/imagenes/logo/logo_v4.PNG" alt="" width="200px">
              <!-- #f4ebe4 color de fondo de la imagen para el header -->
            </a>
          </h1>

        </div>

        <div class="col-lg-5">
          <div class="row">
            <?php
            if ($user_role == 'admin') {

            ?>
              <!-- Las opciones del SQL de rooms -->
              <div class="col-lg-3 my-3">
                <select class="form-select shadow" name="Rooms" id="" onchange="window.location.href=this.value;">
                  <option value="">Rooms</option>
                  <option value="/student034/dwes/forms/rooms/form_rooms_select.php">Select</option>
                  <option value="/student034/dwes/forms/rooms/form_rooms_insert.php">Insert</option>
                  <option value="/student034/dwes/forms/rooms/form_rooms_update.php">Update</option>
                  <option value="/student034/dwes/forms/rooms/form_rooms_delete_call.php">Delete</option>
                </select>
              </div>
              <!-- Las opciones del SQL de Customer -->
              <div class="col-lg-3 my-3">
                <select class="form-select shadow" name="Customer" id="" onchange="window.location.href=this.value;">
                  <option value="">Customer</option>
                  <!-- <option value="/student034/dwes/db/customers/db_customer_select.php">Select</option> -->
                  <option value="/student034/dwes/forms/customers/form_customer_select.php">Select</option>
                  <option value="/student034/dwes/forms/customers/form_customer_insert.php">Insert</option>
                  <option value="/student034/dwes/forms/customers/form_customer_update_call.php">Update</option>
                  <option value="/student034/dwes/forms/customers/form_customer_delete_call.php">Delete</option>
                </select>
              </div>
              <!-- Las opciones del SQL de Reservations -->
              <div class="col-lg-3 my-3">
                <select class="form-select shadow" name="Reservations" id="" onchange="window.location.href=this.value;">
                  <option value="">Reservations</option>
                  <option value="/student034/dwes/forms/reservations/form_review_select.php">Review Manager</option>
                  <option value="/student034/dwes/forms/reservations/form_reservation_select_all.php">Select</option>
                  <option value="/student034/dwes/forms/reservations/form_reservation_insert.php">Insert</option>
                  <option value="/student034/dwes/forms/reservations/form_reservation_update_call.php">Update</option>
                  <option value="/student034/dwes/forms/reservations/form_reservation_delete_call.php">Delete</option>
                </select>
              </div>
            <?php
            }
            ?>

            <?php
            // En caso de que el usuario sera anonimo
            if ($user_id == 0) { ?>
              <div class="col-lg-12" id="wellcome">
                <div class="container">
                  <div class="row">
                    <div class="col-5 shadow" id="saludo_user">
                      <h3>Helloo <?php echo htmlspecialchars($user) ?></h3>
                    </div>
                    <div class="col-3">
                      <button class="btn btn-warning shadow"><a class="col my-3" href="/student034/dwes/forms/customers/form_customer_login.php">Sign in</a></button>
                    </div>
                    <div class="col-3 "><button class="btn btn-light mx-4 border shadow"><a href="/student034/dwes/forms/customers/form_customer_insert.php">Register</a></button></div>
                  </div>
                </div>
              </div>
            <?php
            } else { ?>
              <!-- En caso de que si que este registrado el usuario -->
              <div class="container">
                <div class="row">
                  <div class="col-lg-4 my-3 shadow" id="saludo_user">
                    <div class="container">
                      <div class="row">
                        <img class="col-lg-6" id="avatar-img" src="/student034/dwes/imagenes/customers/avatar/<?php echo $user_foto ?>" alt="">
                        <h3 class="col-lg-6"> <?php echo htmlspecialchars($user) ?></h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 my-3">
                    <!-- Mini select de las reservas del user -->
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/forms/reservations/mini_form_reservation_select.php');
                    include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/API/AcuWeather/db/acuweather_reload.php');
                    ?>
                  </div>
                  <div class="col-lg-4 my-3">
                    <button class="btn btn-warning shadow"><a href="/student034/dwes/db/customers/db_customer_logout.php">Log out</a></button>
                  </div>
                </div>
              </div>
            <?php
            }
            ?>

          </div>
        </div>
      </div>
    </div>
    </div>
  </header>
  <main>