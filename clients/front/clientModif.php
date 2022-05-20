<?php
	session_start();
	include('../php/modifiercom.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<style>
		.form-box{
			margin: 25%;
			margin-top: 10%;
			margin-bottom: 10%;
			border-radius: 20px!important;
			background-color: #ecf0f3;
			box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff
		}

		.form-content{
			margin: 10% 20% 20% 20%;
		}

		.logo {
			width: 80px;
			margin: auto;
			padding-top: 50px;
		}

		.logo img {
			width: 100%;
			height: 80px;
			object-fit: cover;
			border-radius: 50%;
			box-shadow: 0px 0px 3px #5f5f5f, 0px 0px 0px 5px #ecf0f3, 8px 8px 15px #a7aaa7, -8px -8px 15px #fff
		}

		.form-field input {
			width: 100%;
			display: block;
			border: none;
			outline: none;
			background: none;
			font-size: 1.2rem;
			color: #666;
			padding: 10px 15px 10px 10px
		}

		.form-field {
			padding-left: 10px;
			margin-bottom: 20px;
			border-radius: 20px;
			box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff
		}

		.form-field .fas {
			color: #555
		}

		a{
			text-decoration: none;
		}
	</style>
</head>
<body>
	<div class="form-box">
		<div class="logo"> <img src="icon.png" alt=""> </div>
		<form class="form-content" method="POST">
			<div class="mb-3">
				<div class="form-field d-flex align-items-center"> 
					<span class="far fa-user"></span> 
					<input type="tel" name="numdep" id="numdep" placeholder="Contact à la réception: <?php echo $nde ?>"> 
				</div>
			</div>

			<div class="mb-3">
				<div class="form-field d-flex align-items-center"> 
					<span class="far fa-user"></span> 
					<input type="tel" name="numar" id="numar" placeholder="Contact à la livraison: <?php echo $nda ?>"> 
				</div>
			</div>

			<select name="depart" class="form-select form-field" aria-label="Default select example" style="margin-bottom: 20px;">
				<option value="<?php $de ?>" selected> <?php echo $de ?> </option>
				<option value="AIBD"> AIBD </option>
				<option value="Almadies"> Almadies </option>
				<option value="Camberene"> Cambérene </option>
				<option value="Colobane"> Colobane </option>
				<option value="Plateau"> Dakar Plateau </option>
				<option value="Diamniadio"> Diamniadio </option>
				<option value="Grand yoff"> Grand yoff </option>
				<option value="Guediawaye"> Guédiawaye </option>
				<option value="Keur Massar"> Keur Massar </option>
				<option value="Lac Rose"> Lac Rose </option>
				<option value="Mariste"> Mariste </option>
				<option value="Malika"> Malika </option>
				<option value="Mbour"> Mbour </option>
				<option value="Medina"> Médina </option>
				<option value="Ndangane"> Ndangane </option>
				<option value="Pikine"> Pikine </option>
				<option value="Point E"> Point E </option>
				<option value="Rufisque"> Rufisque </option>
				<option value="Sali"> Sali </option>
				<option value="Sandiara"> Sandiara </option>
				<option value="Somone"> Somone </option>
				<option value="Thiaroye"> Thiaroye </option>
				<option value="Thies"> Thiès </option>
				<option value="Yarakh"> Yarakh </option>
				<option value="Yoff"> Yoff </option>
			</select>

			<select name="arrivee" class="form-select form-field" aria-label="Default select example">
				<option value="<?php $ar ?>" selected> <?php echo $ar ?> </option>
				<option value="AIBD"> AIBD </option>
				<option value="Almadies"> Almadies </option>
				<option value="Camberene"> Cambérene </option>
				<option value="Colobane"> Colobane </option>
				<option value="Plateau"> Dakar Plateau </option>
				<option value="Diamniadio"> Diamniadio </option>
				<option value="Grand yoff"> Grand yoff </option>
				<option value="Guediawaye"> Guédiawaye </option>
				<option value="Keur Massar"> Keur Massar </option>
				<option value="Lac Rose"> Lac Rose </option>
				<option value="Mariste"> Mariste </option>
				<option value="Malika"> Malika </option>
				<option value="Mbour"> Mbour </option>
				<option value="Medina"> Médina </option>
				<option value="Ndangane"> Ndangane </option>
				<option value="Pikine"> Pikine </option>
				<option value="Point E"> Point E </option>
				<option value="Rufisque"> Rufisque </option>
				<option value="Sali"> Sali </option>
				<option value="Sandiara"> Sandiara </option>
				<option value="Somone"> Somone </option>
				<option value="Thiaroye"> Thiaroye </option>
				<option value="Thies"> Thiès </option>
				<option value="Yarakh"> Yarakh </option>
				<option value="Yoff"> Yoff </option>
			</select>

			<select name="vehicules" class="form-select form-field" aria-label="Default select example">
			<option value="<?php $ve ?>" selected> <?php echo $ve ?> </option>
				<option value="moto"> Moto </option>
				<option value="camionette"> Camionnette </option>
				<option value="camion"> Camion </option>
			</select>

			<div style="margin-top: 30px; padding-bottom: 30px;">
				<button type="submit" class="btn btn-danger" style="margin-left: 57px">
					<a href="clientHome.php" style="color: white;">Annuler</a>
				</button>
				<button type="submit" class="btn btn-primary" name="modifier" style="margin-left: 70px">Modifier</button>
			</div>
		</form>
	</div>

</body>
</html>