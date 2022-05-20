
<?php
        include("connexion.php");

        $sql="SELECT * FROM admin ORDERBY where type='admin'";

        $req=pg_query($conn,$sql);

        if(pg_num_rows($req)==0){
            echo"0 résultat";
        }else{
            while($d=pg_fetch_assoc($req)){

                echo'<tbody>';
				echo'<tr>';
				echo'<td>';
				echo'<span class="custom-checkbox">';
				echo'<input type="checkbox" id="checkbox1" name="options[]" value="1">';
				echo'<label for="checkbox1"></label>';
				echo'</span>';
				echo'</td>';

                //echo"<td>".$d['idl']."</td>";
                echo"<td>".$d['ida']."</td>";
                echo"<td>".$d['nom']."</td>";
                echo"<td>".$d['prenom']."</td>";
                echo"<td>".$d['login']."</td>";

                echo'<td>';
				echo'<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>';
				echo'<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>';

                echo '
                <div id="deleteEmployeeModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form method="POST">
                            <div class="modal-header">
                                <h4 class="modal-title">Supprimer un administrateur</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p>Êtes-vous sûr de vouloir supprimer cet administrateur ?</p>
                                <p class="text-warning"><small>Cette action est irréversible.</small></p>
                            </div>
                            <div class="modal-footer">
                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                <input type="submit" class="btn btn-danger" name="delete" value="Delete">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                ';

            echo '
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
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" name="modifier" class="btn btn-info" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
            ';

                if(isset($_POST['delete'])){
                    deleteUser($d['ida']);
                    break;
                }

                if(isset($_POST['modifier'])){
                    editUser($d['ida']);
                    break;
                }

				echo'</td>';

                echo'</tr>';
				echo'</tbody>';
            }
        }

        function deleteUser($id) {
            include("connexion.php");
            $sql="DELETE FROM admin WHERE ida=$id";
            $req=pg_query($conn, $sql);


        }

        function editUser($id){
            include("connexion.php");
            $p=$_POST['password'];
                    if(empty ($p)){
                        echo"veuillez remplir tout les champs";
                    }else{

                            //cryptage password
                            $pa = sha1($p);

                            $sql="UPDATE admin SET pswd = '$pa' WHERE ida = $id";
                            $req=pg_query($conn, $sql);
                    }


        }

    ?>
