<?php
session_start();
$user_id = $_SESSION['user_id'] ?? 0;
$user = $_SESSION['user'] ?? 'amigo';
$user_role = $_SESSION['user_role'] ?? 'anonimo';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="/student034/dwes/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Hotel management System</title>
</head>




<body>
  <header class=" p-2">
    <!-- <nav class="navbar bg-danger"> -->
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
              <div class="col-lg-3 my-3">
                <select class="form-select" name="Rooms" id="" onchange="window.location.href=this.value;">
                  <option value="">Rooms</option>
                  <option value="/student034/dwes/forms/rooms/form_rooms_select.php">Select</option>
                  <option value="/student034/dwes/forms/rooms/form_rooms_insert.php">Insert</option>
                  <option value="/student034/dwes/forms/rooms/form_rooms_update.php">Update</option>
                  <option value="/student034/dwes/forms/rooms/form_rooms_delete_call.php">Delete</option>
                </select>
              </div>
              <div class="col-lg-3 my-3">
                <select class="form-select" name="Customer" id="" onchange="window.location.href=this.value;">
                  <option value="">Customer</option>
                  <option value="/student034/dwes/forms/customers/form_customer_select.php">Select</option>
                  <option value="/student034/dwes/forms/customers/form_customer_insert.php">Insert</option>
                  <option value="/student034/dwes/forms/customers/form_customer_update_call.php">Update</option>
                  <option value="/student034/dwes/forms/customers/form_customer_delete_call.php">Delete</option>
                </select>
              </div>
              <div class="col-lg-3 my-3">
                <select class="form-select" name="Reservations" id="" onchange="window.location.href=this.value;">
                  <option value="">Reservations</option>
                  <!-- <option value="/student034/dwes/forms/reservations/form_reservation_select.php">Select</option> -->
                  <!-- <option value="/student034/dwes/forms/reservations/form_customer_insert.php">Insert</option> -->
                  <option value="/student034/dwes/forms/reservations/form_reservation_update_call.php">Update</option>
                  <option value="/student034/dwes/forms/reservations/form_reservation_delete_call.php">Delete</option>
                </select>
              </div>
            <?php
            }
            ?>

            <?php
            if ($user_id == 0) { ?>
              <div class="col-lg-12" id="wellcome">
                <div class="container">
                  <div class="row">
                    <div class="col-5" id="saludo_user">
                      <h3>Hola <?php echo htmlspecialchars($user) ?></h3>
                    </div>
                    <div class="col-3"><a class="col my-3" href="/student034/dwes/forms/customers/form_customer_login.php">
                        <button class="btn btn-warning">Sign in</button></a></div>
                    <div class="col-3"><a href="/student034/dwes/forms/customers/form_customer_insert.php"><button class="btn btn-light mx-4 border">Register</button></a></div>
                  </div>
                </div>


              </div>
            <?php
            } else { ?>
              <!-- <div class="col-lg-5"> -->
              <div class="container">
                <div class="row">
                  <div class="col-lg-4 my-3" id="saludo_user">
                    <h3> <?php echo htmlspecialchars($user) ?></h3>
                  </div>
                  <div class="col-lg-4 my-3">
                    <?php
                    include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/forms/reservations/mini_form_reservation_select.php');
                    ?></div>
                  <a class="col-lg-4 my-3" href="/student034/dwes/db/customers/db_customer_logout.php"><button class="btn btn-warning">Log out</button></a>
                </div>
              </div>
              <!-- </div> -->
            <?php
            }
            ?>

          </div>

        </div>
      </div>
    </div>

    <!-- </nav> -->

    </div>
  </header>