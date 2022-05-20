
<?php
        include("connexion.php");
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
                $sql2="SELECT * FROM livreurs WHERE idl='$idl' ";
                $req2=pg_query($conn,$sql2);
                $f=pg_fetch_assoc($req2);
                echo"<tr>";
                $i=$d['idcl'];
                $sql1="SELECT * FROM clients WHERE idcl='$i'";
                $req1=pg_query($conn,$sql1);
                $e=pg_fetch_assoc($req1);

                echo'<tbody>';
				    echo'<tr>';
				        echo'<td>';
				            echo'<span class="custom-checkbox">';
				                echo'<input type="checkbox" id="checkbox1" name="options[]" value="1">';
				                echo'<label for="checkbox1"></label>';
				            echo'</span>';
				        echo'</td>';

                        echo"<td>".$e['nom']."</td>";
                        echo"<td>".$e['prenom']."</td>";
                        echo"<td>".$d['depart']."</td>";
                        echo"<td>".$d['arrivee']."</td>";
                        echo"<td>".$d['vehicules']."</td>";
                        echo"<td>".$f['login']."</td>";
                        echo"<td>".$d['paiement'].' Fcfa'."</td>";
                    
                
                        /*echo'<td>';
				            echo'<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>';
				        echo'</td>';*/

                    echo"</tr>";
				echo'</tbody>';

                /*echo '
            <div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method=POST>
                        <div class="modal-header">						
                            <h4 class="modal-title">Modifier un administrateur</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <div class="form-group">
                                <label>Login du livreur</label>
                                <input type="text" name="livreur" class="form-control" required>
                            </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" name="assigner" class="btn btn-info" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>';*/

                /*if(isset($_POST['assigner'])){
                    editCommande($d['idcom']);
                    break;                    
                }*/
            }
            echo"</table>";

        }

        /*function editCommande($id){

            include ('connexion.php');

            if(isset($_POST['assigner'])){
                $l=$_POST['livreur'];
                $ida=$_SESSION['ida'];
                
                $sql="SELECT * FROM livreurs WHERE login='$l'";
                $req=pg_query($conn,$sql);

                $idll=pg_fetch_assoc($req);
                $idl=$idll['idl'];
                echo $idl;

                
                                        
                $sql="UPDATE commandes SET idl ='$idl',ida='$ida',etat='enCours' WHERE idcom='$id'";
                $req=pg_query($conn, $sql);

            
                if($req){
                    $sql1="UPDATE livreurs SET disponibilite = 'FALSE' WHERE idl='$idl'";
                    $req=pg_query($conn, $sql1);
                }else{
                    echo"Erreur d'assignation!!";
                }
                
            }
        }*/
    ?>