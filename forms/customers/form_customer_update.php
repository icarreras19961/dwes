<?php
include('C:/xampp/htdocs/student034/dwes/header.php');
?>

<div class="m-4">
    <form action="" method="post">
        <label for="">ID del usuario<input type="text"></label>
        Que campo quieres cambiar?
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
        <label for=""><input type="text"></label>
        <label><input type="submit" value="submit"></label>

    </form>
</div>



<?php
include('C:/xampp/htdocs/student034/dwes/footer.php');
?>