<?php
    include ('../php/connexion.php');

    if(isset($_POST['connexion'])){
        $nu=$_POST['numero'];
        $pswd=$_POST['password'];
        
        if(empty ($nu) or empty ($pswd)){
            echo"<script> alert('veuillez remplir tout les champs') </script>";
        }else{
          //cryptage password 
          $pa = sha1($pswd);
          
          $sql="SELECT * FROM clients WHERE numero='$nu' AND password='$pa'";
          $req=pg_query($conn, $sql);
         if(pg_num_rows($req)==0){
           echo'<script> alert("Login ou mot de passe oublié") </script>';
         }else{
          //recuperation de l'id du client
          $sql="SELECT * FROM clients WHERE numero='$nu'";
          $req=pg_query($conn, $sql);
          $i=pg_fetch_assoc($req);
          
          $_SESSION['idcl']=$i['idcl'];
          header("location: ../front/clienthome.php");
         }
          }
        }
?>
