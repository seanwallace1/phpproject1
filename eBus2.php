<?php
session_start() ;
$fullNameValue = "";
$totalValue2 = "";
/*
 * Session Created for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;

/**
 * Allocate the mobile number session variable to a text box
 */
 
?>

<!DOCTYPE html>
<html>
    <head>
       <title>Payment Details</title>
    </head>
	<body>
	    <div class="form">
		    <form name="Details" method="post" action="eBus3.php">
			    <center>
				    <table cellspacing="10">
					    <tr>
					        <td><b></b></td>
						    <td><b>Enter in your details below</b></td>
					    </tr>
					    <tr>
					        <td>Name</td>
						    <td><input type="text" id="txtName" name="txtName" value="" /></td>
					    </tr>
					    <tr>
					        <td>Phone Number</td>
						    <td><input type="text" id="txtNum" name="txtNum" value="" /></td>
					    </tr>
					
					    <tr>
					        <td>Password</td>
                                                <td><input type="password" id="myInput" value="" required=""/><br>
                                                    
                                                    
                                                        
                                            </tr>
					    <tr>
						
						    <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue ;?>"/></td>
					    </tr>
                                            <script>
                                                function myfunction() {
                                                    var x = document.getElementById("myInput");
                                                    if (x.type === "password"){
                                                        x.type = "text";
                                                    } else {
                                                        x.type = "password";
                                                    }
                                                }
                                                </script>
                                             
					    
                                            
				    </table>
		        </center>
			
	    <center>
		
		    
			    <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Proceed with purchase"/>
	    </center
	    </div>
	    </form>
    </body>
</html>
		    

