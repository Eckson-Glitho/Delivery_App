<?php
$i=$_SESSION['idl'];

$sql="SELECT * FROM commandes WHERE idl='$i' AND etat='enCours'";
$req=pg_query($conn,$sql);

if(pg_num_rows($req)==0){
    echo"0 résultat";
}else{
    while($d=pg_fetch_assoc($req)){
        //echo"<td>".$d['idl']."</td>";
        echo"<td>".$d['idcom']."</td>";
        echo"<td>".$d['depart']."</td>";
        echo"<td>".$d['arrivee']."</td>";
        echo"<td>".$d['numdep']."</td>";
        echo"<td>".$d['numar']."</td>";
        echo"<td>".$d['vehicules']."</td>";
        echo"<td>".$d['paiement']."</td>";
        echo"<td>".$d['etat']."</td>";
        echo"<td><div style='margin-top: 30px; padding-bottom: 30px;'>";
        echo"<button name='livrer' type='submit' class='btn btn-success' style='margin-left: 57px'>
        Valider
        </button>";

        if (isset($_POST['livrer'])) {
            $idc=$d['idcom'];
            $sql1="UPDATE commandes SET etat='livree' WHERE idcom='$idc'";
            $req1=pg_query($conn, $sql1);
            $sql2="UPDATE livreurs SET disponibilite='true'";
            $req2=pg_query($conn, $sql2);
        }



        echo'</tr>';
        echo'</tbody>';
    }
}
?>
