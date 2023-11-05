<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>

<div class="m-4">
    <form action="/student034/dwes/db/customers/db_customer_update.php" method="post">
        <input type="hidden" name="client_id" value="<?php echo $_POST['client_id']; ?>">
    
        <p>Name</p><input type="text" name="client_name" value="<?php echo $_POST['client_name']; ?>"></input>
        <p>Surname</p><input type="text" name="client_surname" value="<?php echo $_POST['client_surname']; ?>"></input>
        <p>DNI</p><input type="text" name="client_DNI" value="<?php echo $_POST['client_DNI']; ?>"></input>
        <p>Email</p><input type="text" name="client_email" value="<?php echo $_POST['client_email']; ?>"></input>
        <p>Phone</p><input type="text" name="client_phone" value="<?php echo $_POST['client_phone']; ?>"></input>
        <p>Credit Card</p><input type="text" name="credit_card" value="<?php echo $_POST['credit_card']; ?>"></input>
        <p>Contry</p><input type="text" name="client_country" value="<?php echo $_POST['client_country']; ?>"></input>
        <p>Birth</p><input type="text" name="client_birth" value="<?php echo $_POST['client_birth']; ?>"></input>

        <input type="submit" name="submit" value="submit">

    </form>
</div>



<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>