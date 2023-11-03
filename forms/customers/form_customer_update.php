<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>

<div class="m-4">
    <form action="/student034/dwes/db/customers/db_customer_update.php" method="post">
        <input type="hidden" name="client_id" value="<?php echo $_POST['client_id'];?>">
        
        <select name="opcion">
            <option value="client_name">name</option>
            <option value="client_surname">surname</option>
            <option value="client_DNI">DNI</option>
            <option value="client_email">email</option>
            <option value="client_phone">phone</option>
            <option value="credit_card">card</option>
            <option value="client_country">country</option>
            <option value="client_birth">birth</option>
        </select>
        Valor nuevo
        <label><input type="text" name="valor"></label>
        <label><input type="submit" name="submit" value="submit"></label>

    </form>
</div>



<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>