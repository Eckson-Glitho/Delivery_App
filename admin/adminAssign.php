<?php
	session_start();
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
			margin: 20%;
		}

		.logo {
			width: 80px;
			margin: auto;
			padding-top: 50px;
            padding-bottom: 50px;
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

        .table-box{
            padding-left: 50px;
            padding-right: 50px;
        }

        .btn {
			box-shadow: none;
			width: 100%;
			height: 40px;
			background-color: #040c86;
			color: #fff;
			border-radius: 25px;
			box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
			letter-spacing: 1.3px;
            margin-bottom: 20px;
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
	</style>
</head>
<body>
	<div class="form-box">
		<div class="logo"> <img src="icon.png" alt=""> </div>
		<div class="table-box">
            <table class="table">
                <thead>
                    <tr style="background-color: #040c86; color: white;">
                        <!-- Haut -->
                        <th scope="col">D??part</th>
                        <th scope="col">Arriv??e</th>
                        <th scope="col">Client</th>
                        <th scope="col">Num??ro</th>
                        <th scope="col">Id Livreur</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <!-- Ligne 1 -->
                        <td>Plateau</td>
                        <td>Pikine</td>
                        <td>Habib Ndiaye</td>
                        <td>771234567</td>
                        <td>
                            <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="text" name="userName" id="userName" placeholder="########"> </div>
                        </td>
                        <td><button type="submit" class="btn btn-primary" onclick="alert('Vous venez d assigner cette commande ?? XYZ.')">Assigner</button></td>
                    </tr>

                    <tr>
                        <!-- Ligne 2 -->
                        <td>Maristes</td>
                        <td>Saly</td>
                        <td>Khady Diop</td>
                        <td>769876543</td>
                        <td>
                            <div class="form-field d-flex align-items-center"> <span class="far fa-user"></span> <input type="text" name="userName" id="userName" placeholder="########"> </div>
                        </td>
                        <td><button type="submit" class="btn btn-primary" onclick="alert('Vous venez d assigner cette commande ?? XYZ.')">Assigner</button></td>
                    </tr>
                </tbody>
            </table>
            <button class="btn mt-3"><a href="adminHome.html" style="color: white;">Retour</a></button>
        </div>
	</div>
	

</body>
</html>