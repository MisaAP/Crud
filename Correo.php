<?php
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$haeder = "from:noreply@example.com"."\r\n";
$header.="Reply-to: noreply@example.com"."\r\n";
$header.="X-mailer: PHP/".phpversion();
$RS=@mail($email,$name,$password,$haeder);
if($RS){
echo"<h4>Correo enviado</h4>";
}else{
    echo"<h4>algo salio mal</h4>";
}
?>