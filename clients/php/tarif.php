<?php
    include ('connexion.php');
    //Tarification enfonction de la zone
    $i=$_SESSION['idcl'];
    $sql="SELECT * FROM commandes WHERE idcl=$i AND etat='enAttente'";
    $req=pg_query($conn, $sql);
    $res=pg_fetch_assoc($req);

    $nd=$_SESSION['numdep'];
	$na=$_SESSION['numar'];
    $d=$_SESSION['depart'];
	$a=$_SESSION['arrivee'];
    $v=$_SESSION['vehicules'];

    $sql1="SELECT * FROM zone WHERE lieux like '%$d%'";
    $req1=pg_query($conn, $sql1);
    $r=pg_fetch_assoc($req1);
    $z=$r['idz'];

    $sql2="SELECT * FROM zone WHERE lieux like '%$a%'";
    $req2=pg_query($conn, $sql2);
    $r1=pg_fetch_assoc($req2);
    $z1=$r1['idz'];

    $tarif = 0;

    if (($z==1 and $z1==1) and $v=="moto")
    {
        $tarif=2000;
    }
    elseif(($z==1 and $z1==1) and $v=="camionette")
    {
        $tarif=12000;
    }
    elseif(($z==1 and $z1==1) and $v=="camion")
    {
        $tarif=52000;
    }
    elseif (($z==2 and $z1==2) and $v=="moto")
    {
        $tarif=2500;
    }
    elseif (($z==2 and $z1==2) and $v=="camionette")
    {
        $tarif=12500;
    }
    elseif (($z==2 and $z1==2) and $v=="camion")
    {
        $tarif=52500;
    }
    elseif (($z==3 and $z1==3) and $v=="moto")
    {
        $tarif=6000;
    }
    elseif (($z==3 and $z1==3) and $v=="camionette")
    {
        $tarif=16000;
    }
    elseif (($z==3 and $z1==3) and $v=="camion")
    {
        $tarif=56000;
    }
    elseif ((($z==1 and $z1==2) or ($z==2 and $z1==1)) and $v=="moto")
    {
        $tarif=4000;
    }
    elseif ((($z==1 and $z1==2) or ($z==2 and $z1==1)) and $v=="camionette")
    {
        $tarif=14000;
    }
    elseif ((($z==1 and $z1==2) or ($z==2 and $z1==1)) and $v=="camion")
    {
        $tarif=54000;
    }
    elseif ((($z==1 and $z1==3) or ($z==3 and $z1==1)) and $v=="moto")
    {
        $tarif=10000;
    }
    elseif ((($z==1 and $z1==3) or ($z==3 and $z1==1)) and $v=="camionette")
    {
        $tarif=20000;
    }
    elseif ((($z==1 and $z1==3) or ($z==3 and $z1==1)) and $v=="camion")
    {
        $tarif=70000;
    }
    elseif((($z==2 and $z1==3) or ($z==3 and $z1==2)) and $v=="moto")
    {
        $tarif=8000;
    }
    elseif((($z==2 and $z1==3) or ($z==3 and $z1==2)) and $v=="camionette")
    {
        $tarif=18000;
    }
    elseif((($z==2 and $z1==3) or ($z==3 and $z1==2)) and $v=="camion")
    {
        $tarif=60000;
    }


    if (isset($_POST['valider'])){
        $sql4="UPDATE commandes SET paiement='$tarif' WHERE idcl=$i AND etat='enAttente'";
        $req4=pg_query($conn, $sql4);
        if ($req4) {
            header("Location:../front/clientHome.php");
        }else{
            echo'Error';
        }
    }
?>
