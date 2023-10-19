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
          <a href="/student034/dwes/index.php"><img src="imagenes/logo.png" alt="" width="50px">
            <h1>Reshi's hotel</h1>
          </a>
        </div>
        <div class="col-lg-4">
          <div class="row justify-content-end align-item-center">

            <ul class="col">Rooms
              <a href="/student034/dwes/forms/rooms/form_rooms_select.php">
                <li>Select</li>
              </a>
              <a href="/student034/dwes/forms/rooms/form_rooms_insert.php">
                <li>Insert</li>
              </a>
              <a href="/student034/dwes/forms/rooms/form_rooms_update.php">
                <li>Update</li>
              </a>

              <li>Delete</li>
            </ul>

            <ul class="col">Customer
              <a href="/student034/dwes/forms/customers/form_customer_select.php">
                <li>Select</li>
              </a>
              <a href="/student034/dwes/forms/customers/form_customer_insert.php">
                <li>Insert</li>
              </a>
              <a href="/student034/dwes/forms/customers/form_customer_update_call.php">
                <li>Update</li>
              </a>
              <a href="/student034/dwes/forms/customers/form_customer_delete_call.php">
                <li>Delete</li>
              </a>
            </ul>
            <button class="col">Sign in</button>
          </div>

        </div>
      </div>
    </div>

    <!-- </nav> -->

    </div>
  </header>