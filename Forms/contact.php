<?PHP
$user = "root";
$psw = "";
$conn="mysql:host=localhost; dbname=restau;";
$db = new PDO($conn,$user,$psw);
if(isset($_POST['valider'])){
$M1= $_POST['name'];
$M2= $_POST['email'];
$M3= $_POST['subject'];
$M4= $_POST['message'];

$ajout=$db->prepare("insert into clients values('$M1','$M2','$M3','$M4') " );
$ajout->execute();
echo "<div> Message Envoyé avec Succés !</div><br>";
echo "<div> <a href='http://localhost/restoaida'>Retourner au Site!</a></div>";

}
?>
