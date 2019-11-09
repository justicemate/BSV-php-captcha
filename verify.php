<?php

/**
 * @author justicemate
 * @copyright 2019
 */

    //echo"<pre>";print_r($_REQUEST);echo"</pre>";
    if($_REQUEST['moneybutton-response']=='')
    {
        echo'Invalid Captcha';
    }else{
        echo'Successfully submitted';
    }
?>