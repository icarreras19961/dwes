  <form action="/student034/dwes/forms/customers/form_customer_update.php" method="post" >
    <input type="text" name="client_id" value="<?php echo $customer['client_id'] ?>" readonly hidden>
    <input type="text" name="client_name" value="<?php echo $customer['client_name'] ?>" readonly hidden>
    <input type="text" name="client_surname" value="<?php echo $customer['client_surname'] ?>" readonly hidden>
    <input type="text" name="client_DNI" value="<?php echo $customer['client_DNI'] ?>" readonly hidden>
    <input type="text" name="client_email" value="<?php echo $customer['client_email'] ?>" readonly hidden>
    <input type="text" name="client_phone" value="<?php echo $customer['client_phone'] ?>" readonly hidden>
    <input type="text" name="credit_card" value="<?php echo $customer['credit_card'] ?>" readonly hidden>
    <input type="text" name="client_country" value="<?php echo $customer['client_country'] ?>" readonly hidden>
    <input type="text" name="client_birth" value="<?php echo $customer['client_birth'] ?>" readonly hidden>

    <label><input type="submit" name="update" value="update" ></label>
  </form>