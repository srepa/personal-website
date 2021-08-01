<!DOCTYPE html>
<html>
  <head>
    <title>PHP Store</title>
  </head>
  <body>
    <?php
$amount=800;
$taxRate=0.0825;
$addedTax= $amount*$taxRate;  //amount = 800, tax = .0825
echo $addedTax;
	  
    ?>
  </body>
</html>