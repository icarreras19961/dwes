<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/header.php');
?>

<div style="width: 20%; margin:auto; margin-top:50px">
    <form class="shadow bg-white rounded p-3 " action="/student034/dwes/forms/customers/form_customer_update.php" method="post">
        <label for="">User id<input type="text" name="client_id"></label>       
        <label><input class="btn btn-primary border shadow" type="submit" name="submit" value="submit"></label>

    </form>
</div>



<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/footer.php');
?>