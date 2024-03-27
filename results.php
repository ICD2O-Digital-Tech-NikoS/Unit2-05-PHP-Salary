<?php
  // get the wage and hous from the textfields
  $hours = $_POST['hours'];
  $wage = $_POST['wage'];

  // calculate pay 
  $pay = $hours * $wage;

  $taxes = $pay * 0.2005;
?>
<h3>Results:</h3>
Your pay is $<?php echo "$pay" ?>.
Your pay after taxes is $<?php echo $taxes ?>.

