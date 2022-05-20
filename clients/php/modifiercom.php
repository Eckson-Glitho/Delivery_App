<?php
    include("connexion.php");

    $i=$_SESSION['idcl'];

    $sql1="SELECT * FROM commandes WHERE idcl='$i' AND etat='enAttente'";
    $req1=pg_query($conn, $sql1);
    $x=pg_fetch_assoc($req1);
    $id=$x['idcom'];
    $nde=$x['numdep'];
    $nda=$x['numar'];
    $de=$x['depart'];
    $ar=$x['arrivee'];
    $ve=$x['vehicules'];


    if (isset($_POST['modifier'])) {
        $d = $_POST['depart'];
        $a = $_POST['arrivee'];
        $nd = $_POST['numdep'];
        $na = $_POST['numar'];
        $v = $_POST['vehicules'];

        if (empty($d)) {
            $d = $de;
        }

        if (empty($a)) {
            $a = $ar;
        }

        if (empty($nd)) {
            $nd = $nde;
        }

        if (empty($na)) {
            $na = $nda;
        }

        if (empty($v)) {
            $v = $ve;
        }

        $sql="UPDATE commandes SET depart='$d', arrivee='$a', numdep='$nd', numar='$na', vehicules='$v' WHERE idcl='$i' AND etat='enAttente'";
        $req=pg_query($conn,$sql);

		$_SESSION['numdep']=$nd;
		$_SESSION['numar']=$na;
		$_SESSION['vehicules']=$v;
		$_SESSION['depart']=$d;
		$_SESSION['arrivee']=$a;
		
        header("location: ../front/clientTarif.php");

    }
?>
