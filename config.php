<?php
require('stripe-php-master/init.php');

$publishableKey="pk_test_51Jg9gxSIKP5CGjui5vgdZDG8goKeYtJIhAGqub2iO2BffdDyWAmAEoNPk6eyhNmgjZX0q79Fw0dw8UO2TCXI1iqk008FDvg8mE";

$secretKey="sk_test_51Jg9gxSIKP5CGjuiy5klCjFG0ssZyPBY7cpd5uTsBvAHBoYVbuMHEvRpaAAupN104KevXpoxVTFjAPBRM08xUd2L00K4cuOmzW";

\Stripe\Stripe::setApiKey($secretKey);
?>