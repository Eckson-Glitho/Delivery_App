<?php
	session_start();
	include('../php/tarif.php');
			$nd=$_SESSION['numdep'];
			$na=$_SESSION['numar'];
			$v=$_SESSION['vehicules'];
			$d=$_SESSION['depart'];
			$a=$_SESSION['arrivee'];
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
		<form method="POST" class="form-content">
			<div class="mb-3">
				<div class="form-field d-flex align-items-center">
					<span class="far fa-user"></span>
					<input type="tel" placeholder="<?php echo'Contact à la réception: '. $nd;?>" disabled>
				</div>
			</div>

			<div class="mb-3">
				<div class="form-field d-flex align-items-center">
					<span class="far fa-user"></span>
					<input type="tel" placeholder="<?php echo'Contact à livraison: '. $na;?>" disabled>
				</div>
			</div>

			<div class="mb-3">
				<div class="form-field d-flex align-items-center">
					<span class="far fa-user"></span>
					<input type="tel" placeholder="<?php echo'Lieu de réception: '. $d;?>" disabled>
				</div>
			</div>

			<div class="mb-3">
				<div class="form-field d-flex align-items-center">
					<span class="far fa-user"></span>
					<input type="tel" placeholder="<?php echo'Lieu de livraison: '. $a;?>" disabled>
				</div>
			</div>

			<div class="mb-3">
				<div class="form-field d-flex align-items-center">
					<span class="far fa-user"></span>
					<input type="tel" placeholder="<?php echo'Vehicule de livraison: '. $v;?>" disabled>
				</div>
			</div>

			<div class="mb-3">
				<div class="form-field d-flex align-items-center">
					<span class="far fa-user"></span>
					<input type="tel" placeholder="<?php echo'Frais de livraison: '. $tarif. ' FCFA';?>" disabled>
				</div>
			</div>

			<div style="margin-top: 30px; padding-bottom: 30px;">

				<input type="submit" name='valider' class="btn btn-primary" style="margin-left: 180px" value="Valider">
			</div>
		</form>
	</div>
</body>
</html>
