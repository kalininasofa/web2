<?php

session_start();
session_destroy();
setcookie('name_value', '', 100000);
setcookie('phone_value', '', 100000);
setcookie('email_value', '', 100000);
setcookie('year_value', '', 100000);
setcookie('gender_value', '', 100000);
setcookie('languages_value', '', 100000);
setcookie('biography_value', '', 100000);
setcookie('checkboxContract_value', '', 100000);
setcookie('PHPSESSID', '', 100000);
header('Location: ./');
exit();