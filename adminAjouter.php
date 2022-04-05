<div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <form id="voyage-form" action="ajout_voyage.php" method="post">
                        <div class= "row">
                                <h3>Ajouter un pays</h3>
                                <br> <br>
                                <?php include "flash.php"; ?>
                                <label for="inputPays" class="form-label">Pays</label>
                                <input type="text" id="inputPays" class="form-control" name="pays" >
                                
                                

                                <label for="inputPrix" class="form-label">Prix</label>
                                <input type="text" id="inputPays" class="form-control" name="prix">
                                

                                <label for="description" class="form-label">Description</label>
                                <textarea id="description" class="form-control"  rows="4" name="description"></textarea><br>
                                
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </form>
                </div>