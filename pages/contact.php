<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>F4 Ferme-Accueil</title>	
	<link 
  	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
  	rel="stylesheet"  type='text/css'>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="script/script.js"></script>
	<link rel="stylesheet" type="text/css" href="../fa/css/fontawesome.css">
	<link rel="stylesheet" type="text/css" href="../fa/css/brands.css">
	<link rel="stylesheet" type="text/css" href="../fa/css/all.css">
	<link rel="stylesheet" type="text/css" href="../fa/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="../fa/css/solid.css">
	<link rel="stylesheet" type="text/css" href="../fa/css/solid.min.css">
	<link rel="stylesheet" type="text/css" href="../fa/css/regular.css">
	<link rel="stylesheet" type="text/css" href="../fa/css/regular.min.css">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link rel="stylesheet" type="text/css" href="contact.css">
	<script type="text/javascript" src="../scroll-out.js"></script>
	<script type="text/javascript" src="../script/jquery.js"></script>

</head>
<body>


<?php 
	// if(!empty($_POST['submit'])){

	// 	$nom=$_POST['name'];
	// 	$email=$_POST['email'];
	// 	$phone=$_POST['telephone'];
	// 	$message=$_POST['message'];

	// 	$toEmail='mikewek24@gmail.com';

	// 	$mailHeaders ="Nom :".$nom.
	// 	"\r\n Email :".$email.
	// 	"\r\n Numéro de téléphone :".$phone.
	// 	"\r\n Méssage :".$message;


	// 	if(mail($toEmail, $nom, $mailHeaders)){
	// 		$result="Envoyer avec succes";
	// }


	// }




 ?>




		<div class="cont">
			
					<div class="loader">
					      <div style="--i: 1"></div>
					      <div style="--i: 2"></div>
					      <div style="--i: 3"></div>
					      <div style="--i: 4"></div>
					    </div>

		</div>

	<header class="fixed-top">
		<nav class="nav1">
			<a href="#" style="color:black;text-decoration: none;" class="lead"><i class="fa fa-envelope fa-bounce text-danger"></i>weks@gmail.com</a>

<div id="google_translate_element"></div><script>
function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'fr',
    layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
  }, 'google_translate_element');
}
</script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


			<div class="d-flex justify-content-between align-items-center">

				<div  class="px-1 pt-2 number text-center lead" style="background-color:#198754">
					<p><i class="fa fa-phone"></i> <span>+237 657892345</span></p>
				</div>
			</div>
		</nav>
		<nav class="navbar navbar-expand-md">
						<div class="d-flex container">

							<div class="d-flex align-items-center">
								<a class="navbar-brand" href="index.php"><img class="img-fluid rounded-circle" src="../images/bg3.jpg"></a>
								<h5>F4 ferme SARL</h5>		
							</div>
							

							<button
								class="navbar-toggler"
								type="button"
								data-bs-toggle="collapse"
								data-bs-target="#navmenu"
							>
								<span class="navbar-toggler-icon"></span>	
							</button>


							<div class="navbar-collapse" id="navmenu">
							<ul class="navbar-nav ms-auto">
								<li class="nav-item"><a href="../index.php" class="nav-link">Accueil</a></li>

								<li class="nav-item"><a href="services.php"class="nav-link">Services</a></li>
			 
								<li class="nav-item"><a class="nav-link" href="apropos.php">A propos</a></li>

								<li class="contact-button text-light"><a href="contact.php"class="nav-link">Contacts <i class="fa fa-phone text-light"></i></a></li>
								

							</ul>



							</div>

						</div>			
		</nav>
	</header>

	<div class="c-1 pt-5 pb-5">
		<div class="pt-5"></div>
		<div class="pt-5"></div>
		<div class="pt-5"></div>
		<h3 class="display-3 text-light pt-5 mx-5 px-5" style="font-weight:700">Contact</h3>
		<p class="lead mx-5 px-5" style="font-size: 1.4em;"><span style="font-weight:700;color: #fff;">Accueil /</span> <span style="color:#e35e4c;font-weight: 700;">Contact</span></p>
	</div>

    <div class="container c-contact py-5 d-md-flex justify-content-between ">
    	<div class="mt-5 pt-5">
						<h6 class="mt-5 text-danger">NOUS SOMMES LA POUR VOUS SERVIR</h6>
 						<h1 class="display-2" style="font-weight:600;">Contactez-nous</h1>
						<p class="lead mt-5"><i class="fa fa-map m-2"></i> 6 rue Arthur Groussier
 						75010 Paris
 						</p>
						<p class="lead"><i class="fa fa-envelope m-2"></i>f4fermesarl@gmail.com</p>   		
    	</div>


    	<div class="px-3 px-lg-1 form-container"> 		
			<form method="POST" class="mt-5 pt-2" name="emailContact" action="https://formsubmit.co/mikewek24@gmail.com">
			 	<strong class="mt-5">Nom*:</strong><input type="text" name="name" required>
			 	<strong class="">Email*:</strong><input type="email" name="email" required>
			 	<strong class=" ">Numéro de Téléphone*:</strong><input type="tel" name="telephone" required>
			 	<strong class=" ">Méssage*:</strong><textarea name="message" placeholder="Enter your message here..." required></textarea>
			 	<input type="comment" name="" placeholder="commentaire">
			 	<button name="submit" class="mt-4" value="submit">Envoyer</button>

<!-- 			 	<div class="success text-center my-4 py-2">
				 	<strong class="decision"></strong>
			 	</div> -->

    		</form>
    	</div>
    </div>



    <div class="sixth-div">
    	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.9019842307976!2d11.5371764!3d3.8312032999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bc583ca1007db%3A0x1c92765c3054d67a!2sEkie%20Entr%C3%A9e%20amadou!5e0!3m2!1sfr!2scm!4v1697972456054!5m2!1sfr!2scm" width="100%" height="500" style="border:0; opacity: .5;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div style="background-color: #198754;" class="container-fluid pb-3">
    	
	    <div class="row seventh-div px-2 pt-5 pt-md-5 container m-auto">
	    	<div class="col-md-4 col-lg-4 col1 ">
	    		<img class="img-fluid rounded-circle" src="../images/bg3.jpg" style="height:90px">
	    		<p class="text-light mt-3">F4 Ferme S.A.R.L. est une entreprise spécialisée dans l'élevage du porc et sa transformation. Nous nous engageons à fournir des produits de haute qualité, respectueux des normes sanitaires et du bien-être animal.</p>

	    		<div style="width:90%;height: 1px; background-color: #fff;" class="mb-2"></div>

	    		<a href="#"><i class="fa-brands fa-facebook mx-4 mt-4"></i></a>
	    		<a href="#"><i class="fa-brands fa-instagram mt-4"></i></a>
	    	</div>

	    	<div class="col-md-4 col-lg-4  lead text-light">
	    		<h3 class="text-light mt-5 mb-3">Navigation</h3>
	    		<ul style="list-style: none;">
	    			<li><i class="mx-2 fa fa-chevron-right text-danger"></i>Accueil</li>
	    			<li><i class="mx-2 fa fa-chevron-right text-danger"></i>Services</li>
	    			<li><i class="mx-2 fa fa-chevron-right text-danger"></i>A propos</li>
	    			<li><i class="mx-2 fa fa-chevron-right text-danger"></i>Contact</li>
	    		</ul>
	    	</div>

	    	<div class="col-md-4 col-lg-4  lead text-light col3">
	    		<h3 class="text-light mt-5 mb-3">Information de contact</h3>
	    		<ul style="list-style: none;">
	    			<li><i class="fa fa-phone mx-4 mt-4"></i>+237 654188943</li>
	    			<li><i class="fa fa-envelope mx-4 mt-4"></i>F4ferme@gmail.com</li>
	    			<li><i class="fa fa-clock mx-4 mt-4"></i>8h:00-21h00</li>
	    		</ul>
	    	</div>



	    </div>
    </div>

 	<div class="bg-light">
	    	<p class="lead text-center mt-3">&copy; Copyrights <span style="color:#eb614f">F4 ferme SARL</span> 2023, siteweb créé par Djindjeu Wekak Michel P.</p>
 	</div>   

		<script type="text/javascript">
			$(window).on('load',function(){
				$(".cont").fadeOut(1000);
				$(".content").fadeIn(1000);
			})
		</script> 	


	
	<script type="text/javascript" src="../script/jquery.js"></script>
	<script type="text/javascript" src="../scroll-out.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../script/script.js"></script>

</body> 
</html>