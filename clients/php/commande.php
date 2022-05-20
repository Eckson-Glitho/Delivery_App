<?php
    include ('connexion.php');

    $i=$_SESSION['idcl'];

    if (isset($_POST['payer'])) {
        $d = $_POST['depart'];
        $a = $_POST['arrivee'];
        $nd = $_POST['numdep'];
        $na = $_POST['numar'];
        $v = $_POST['vehicules'];

        if(empty($d) or empty($a)  or empty ($nd) or empty ($na) or empty($v)){
            echo"veuillez remplir tout les champs";
        }else{
            $sql="INSERT INTO commandes (etat,depart,arrivee,numdep,numar,vehicules,idcl)
            values ('enAttente', '$d', '$a', '$nd', '$na', '$v', '$i')";
            $req=pg_query($conn, $sql);
			echo'inséré';

            header("location: ../front/clientTarif.php");
			$_SESSION['numdep']=$nd;
			$_SESSION['numar']=$na;
			$_SESSION['vehicules']=$v;
			$_SESSION['depart']=$d;
			$_SESSION['arrivee']=$a;
        }
    }
?>
