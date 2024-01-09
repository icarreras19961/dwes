<?php
function showCustomer($customer){
  ?>
    <div class="bg-light m-2 p-2 rounded border" style="width: 400px;">
      <h2><?php print_r($customer['client_surname'] . ' ' . $customer['client_name']) ?></h2>
      <p><?php print_r($customer['client_DNI'] . ' ' .$customer['client_email']) ?></p>
      
      <hr>
      <h5>Customer settings</h5>

      <?php
      include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/forms/customers/mini_form_customer_update.php');
      ?>
    </div>
<?php
}