<?PHP
$user = "root";
$psw = "";
$conn="mysql:host=localhost:443; dbname=restau;";
$db = new PDO($conn,$user,$psw);
if(isset($_POST['valider'])){
$M1= $_POST['name'];
$M2= $_POST['email'];
$M3= $_POST['phone'];
$M4= $_POST['date'];
$M5= $_POST['time'];
$M6= $_POST['people']; 
$M7= $_POST['message'];

$ajout=$db->prepare("insert into Reservation values('$M1','$M2','$M3','$M4','$M5',$M6,'$M7') " );
$ajout->execute();
echo "<div> Réservation éfféctuée !</div><br>";
echo "<div> <a href='http://localhost/restoaida'>Retourner au Site!</a></div>";

}
?>
