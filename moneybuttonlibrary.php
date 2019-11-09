<?php
/**
 * @author justicemate
 * @copyright 2019
 */

 function moneybutton_get_html($account,$amount,$currency)
 {
   ?>
   <script src="https://www.moneybutton.com/moneybutton.js"></script>
   <script>
      function displayHiddenContent (payment) 
      {
        document.getElementById("moneybutton-response").value = payment["userId"];
      }
   </script>
   <div class="money-button" data-to="<?php echo $account;?>" data-amount="<?php echo $amount;?>" data-currency="<?php echo $currency;?>" data-on-payment="displayHiddenContent"></div>
   <div id="my-hidden-content"><input type="hidden" name="moneybutton-response" id="moneybutton-response" class="moneybutton-response" ></div>
   <?php 
 }
 ?>