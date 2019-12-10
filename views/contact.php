<?php 
$bdd = new PDO('mysql:host=localhost;dbname=fullstack-demo', 'root', 'root', 
array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
?>


<?php require 'header.php'; ?>


<div class="container" style="padding-top: 100px; padding-bottom: 50px">

  <h1 class="text-center">Fullstack - Demo : Contact</h1>

  <h2 class="text-center">Envoyer vos messages.</h2>
  <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer et elementum ligula. Aliquam vestibulum imperdiet odio, vitae suscipit arcu aliquet sit amet. Ut orci libero, viverra vitae metus vel, faucibus maximus sapien. Fusce massa orci, varius id tristique sit amet, consectetur ac magna. Quisque at ullamcorper tortor, ut bibendum lacus. Aliquam interdum, eros quis finibus sollicitudin, ante tortor iaculis ante, rhoncus lacinia urna leo non nisl. Aenean dapibus auctor quam, a auctor arcu luctus sed.</p>

  <div class="row">
  	<div class="col-6 offset-md-3">
  		<form method="POST" action="">
			<label for="name_contact">Nom :</label>
		  	<input type="text" placeholder="Votre nom" name="name_contact" class="form-control mb-4">

			<label for="mail_contact">Mail :</label>
		  	<input type="text" placeholder="Votre mail" name="mail_contact" class="form-control mb-4">

			<label for="objet">Objet :</label>
		  	<input type="text" placeholder="Objet du message" name="objet" class="form-control mb-4">

			<label for="message">Message :</label>
		  	<textarea placeholder="Votre message..." name="message" rows="3" class="form-control mb-4"></textarea>

		    <button class="btn btn-info btn-block" type="submit">Envoyer</button>
  		</form>
    </div>
  </div>

</div>


<?php require 'footer.php'; ?>
