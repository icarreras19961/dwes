<?php

/**
 * =================================================================
 * La maqueta para enseñar los customers por la pantalla del cliente
 * =================================================================
 * @author Ivan <icarreras19961@iesjoanramis.org>
 * 
 * @param [array from the select of the customer table] $customer
 * @return Devuelve la informacion del array maquetada para que sea agradable a la vista
 * @version 1.0.0
//  * @deprecated none
 */
function showCustomer($customer)
{
?>
  <div class="bg-light m-2 p-2 rounded border" style="width: 400px;">
    <h2><?php echo ($customer['client_surname'] . ' ' . $customer['client_name']) ?></h2>
    <p><?php echo ($customer['client_DNI'] . ' ' . $customer['client_email']) ?></p>

    <hr>
    <h5>Customer settings</h5>

    <?php
    include($_SERVER['DOCUMENT_ROOT'] . '/student034/dwes/forms/customers/mini_form_customer_update.php');
    ?>
  </div>
<?php
}
