<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>

<div class="m-4">
    <form action="/student034/dwes/forms/customers/form_customer_update.php" method="post">
        <label for="">ID del usuario<input type="text" name="client_id"></label>       
        <label><input type="submit" value="submit"></label>

    </form>
</div>



<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>