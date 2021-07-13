
<html>
    <title>kips</title>
    <body>
<?php
        
$NumberPlate = $_GET['NumberPlate'];
$InitialWeight =$_GET['InitialWeight'];
$FinalWeight =$_GET['FinalWeight'];    
$Product =$_GET['Product'];
$Source =$_GET['Source'];
$Destination =$_GET['Destination'];

        
        
echo "Welcome: ". $_GET['NumberPlate']. "<br />";
echo "Your InitialWeight is: ". $_GET["InitialWeight"]. "<br />";
echo "Your FinalWeight is: ". $_GET["FinalWeight"]. "<br />";
echo "Your Product. is: ". $_GET["Product"];
echo "The product is from:". $_GET["Source"];
echo "The product is to be delivered to:". $_GET["Destination"];
        

        
//connection

$connect=mysqli_connect('localhost','root','','kips');
 
        
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
 

$NumberPlate = $_GET['NumberPlate'];
$InitialWeight =$_GET['InitialWeight'];
$FinalWeight =$_GET['FinalWeight'];    
$Product =$_GET['Product'];
$Source =$_GET['Source'];
$Destination =$_GET['Destination'];
        
mysqli_query($connect,"INSERT INTO trucks (NumberPlate,InitialWeight,FinalWeight,Product,Source,Destination)
		        VALUES ('$NumberPlate','$InitialWeight','$FinalWeight','$Product','$Source','$Destination')");
if(mysqli_affected_rows($connect) > 0){
	echo "<p>Weight Captured</p>";
} else {
	echo "<p>Weight not captured</p><br />";
	echo mysqli_error ($connect);
}
   
?>
 </body>       
</html>