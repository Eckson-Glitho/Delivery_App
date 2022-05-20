<?php include("connexion.php");
        $ida=$_SESSION['ida'];
        $sql="SELECT * FROM admin WHERE ida=$ida";
        $req=pg_query($conn,$sql);
        $res=pg_fetch_assoc($req);
        $type=$res['type'];

        if($type=='superadmin'){
            $sql="SELECT * FROM commandes WHERE etat='livree'";
            $req=pg_query($conn,$sql);
        }else{
            $sql="SELECT * FROM commandes WHERE ida='$ida' AND etat='livree'";

            $req=pg_query($conn,$sql);}
        
        
        if(pg_num_rows($req)==0){
            echo"AUCUNE COMMANDE DISPONIBLE";
        }else{
            $chiffre=0;
            while($d=pg_fetch_assoc($req)){
                $idl=$d['idl'];
                $paiement=$d['paiement'];
                $chiffre=$chiffre+$paiement;
            }
        }
?>