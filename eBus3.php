<!DOCTYPE html>
<html>
    <head>
        <title> Receipt</title>
    </head>

    <body>
        <Center>
<!-- //Starting the session to get the session variable from the last page-->
<?php

session_start();
$totalValue2 = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
$PhoneNumber = $_POST{'txtNum'};
echo "<br></br>";
echo " User Name : ".$fullNameValue.".";
echo "<br></br>";
echo " The payment needed is ".$totalValue2.".";
echo "<br></br>";
echo " Phone number is" .$PhoneNumber.".";
?>
        </center>
    </body>
</html>

