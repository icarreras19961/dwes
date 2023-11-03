<?php
session_start();
$user_id = $_SESSION['user_id'] ?? 0;
$user = $_SESSION['user'] ?? 'amigo';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Hotel management System</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<!-- <link rel="stylesheet" type="text/css" href="./style.css"> -->

<body>
  <header class="bg-danger">
    <!-- <nav class="navbar bg-danger"> -->
    <div class="container-fluid ">
      <div class="row">
        <!-- Logo mas titulo -->
        <div class="col-lg-8">
          <a href="/student034/dwes/index.php"><img src="/student034/dwes/imagenes/logo.png" alt="" width="50px">
            <h1>Reshi's hotel</h1>
          </a>
          <h2>Hola <?php echo htmlspecialchars($user) ?></h2>
        </div>
        <div class="col-lg-4">
          <div class="row">
            <div class="col-lg-3 my-3">
              <select name="Customer" id="" onchange="window.location.href=this.value;">
                <option value="">Rooms</option>
                <option value="/student034/dwes/forms/rooms/form_rooms_select.php">Select</option>
                <option value="/student034/dwes/forms/rooms/form_rooms_insert.php">Insert</option>
                <option value="/student034/dwes/forms/rooms/form_rooms_update.php">Update</option>
                <option value="">Delete</option>
              </select>
            </div>
            <div class="col-lg-3 my-3">
              <select name="Customer" id="" onchange="window.location.href=this.value;">
                <option value="">Customer</option>
                <option value="/student034/dwes/forms/customers/form_customer_select.php">Select</option>
                <option value="/student034/dwes/forms/customers/form_customer_insert.php">Insert</option>
                <option value="/student034/dwes/forms/customers/form_customer_update_call.php">Update</option>
                <option value="/student034/dwes/forms/customers/form_customer_delete_call.php">Delete</option>
              </select>
            </div>
            <?php
            if ($user_id == 0) { ?>
              <a class="col my-3" href="/student034/dwes/forms/customers/form_customer_login.php"><button>Sign in</button></a>
            <?php
            } else {?>
              <a class="col my-3" href="/student034/dwes/db/customers/db_customer_logout.php"><button>Log out</button></a>
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