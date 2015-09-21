<!DOCTYPE html>
  <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Grupo Territorial</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/jquery.bxslider.css">
    </head>
    <body class="mail">
    	<!--header-->
		<header class="sTop">
			<section class="inner cf">
				<a href="index.php" class="logo"><img src="img/gt-logo.png" alt="Grupo Territorial"></a>
			</section>
		</header>
		<!--header-->
		


<?php 
	if(isset($_POST['submit'])){
	    $to = "info@grupoterritorial.mx"; // this is your Email address
	    $from = $_POST['email']; // this is the sender's Email address
	    $first_name = $_POST['nombre'];
	    $last_name = $_POST['apellido'];
	    $telefono = $_POST['telefono'];
	    $ciudad = $_POST['ciudad'];
	    $estado = $_POST['estado'];
	    $datos =  $telefono . "\n\n" . $ciudad . "\n\n" . $estado;
	    $subject = "Contacto de Pagina";
	    $message = $first_name . " " . $last_name . "\n\n" . $datos . "\n\n" . $_POST['message'];
	    
	    $headers = "From:" . $from;
	    mail($to,$subject,$message,$headers);
	  
	    echo "<div class='inner'><h1>Gracias su correo ha sido enviado " . $first_name . ", estaremos en contacto con usted.</h1></div>";
	    // You can also use header('Location: thank_you.php'); to redirect to another page.
	    }
?>				
		<!--main content-->
		<footer>
			<section class="inner center">
				<img src="img/footer-logo.png" alt="footer">
				<p>T. (33) 2001 0965 / <a href="http://www.grupoterritorial.mx">www.grupoterritorial.mx</a></p>
				<img src="img/footer-icon.png" alt="footer icon">
			</section>
		</footer>

</html>