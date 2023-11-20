<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');

include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/db/customers/db_customer_select_id.php');
?>



<div style="width: 20%; margin:auto; margin-top:50px">
    <form  class="shadow bg-white rounded p-3 " action="/student034/dwes/db/customers/db_customer_update.php" method="post">
        <input type="hidden" name="client_id" value="<?php echo $_POST['client_id']; ?>">
    
        <p>Name</p><input type="text" name="client_name" value="<?php echo $client_info[0]['client_name']; ?>"></input>
        <p>Surname</p><input type="text" name="client_surname" value="<?php echo $client_info[0]['client_surname']; ?>"></input>
        <p>DNI</p><input type="file" name="client_DNI" value="<?php echo $client_info[0]['client_DNI']; ?>" accept="image/png, image/jpg"></input>
        <p>PICTURE DNI</p><input type="file" name="client_PICTURE_DNI" value="<?php echo $client_info[0]['client_DNI']; ?>" accept="image/png, image/jpg"></input>
        <p>Email</p><input type="text" name="client_email" value="<?php echo $client_info[0]['client_email']; ?>"></input>
        <p>Phone</p><input type="text" name="client_phone" value="<?php echo $client_info[0]['client_phone']; ?>"></input>
        <p>Credit Card</p><input type="text" name="credit_card" value="<?php echo $client_info[0]['credit_card']; ?>"></input>
        <p>Contry</p><input type="text" name="client_country" value="<?php echo $client_info[0]['client_country']; ?>"></input>
        <p>Birth</p><input type="text" name="client_birth" value="<?php echo $client_info[0]['client_birth']; ?>"></input>

        <input class="btn btn-primary border shadow" type="submit" name="submit" value="submit">

    </form>
</div>



<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>