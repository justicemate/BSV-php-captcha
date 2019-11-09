<?php
/**
 * @author @justicemate
 * @copyright 2019
 */
?>
<html>
    <title>MoneyButton PHP API</title>
    <body>
        <div style="margin:50px">
            <form method="post" action="verify.php"> <!-- verify.php is the page where your form submit function is written or you want your users will see after payment. --!>
                <?php
                  $account='455';//your moneybutton account id where you want to get paid put only the number without @ sign
                  $amount='0.01'; //The amount you want to be get paid
                  $currency='USD';//The currency in which you want to be get paid  
                  require_once('moneybuttonlibrary.php'); //The Moneybutton Library File
                  echo moneybutton_get_html($account,$amount,$currency);//The Money button library function call which will show the swipe button for pay
                ?>
                <br />
                <!-- you can put any form element or content as you wish --!>
                <input type="submit" />
            </form>
        </div>
    </body>
</html>