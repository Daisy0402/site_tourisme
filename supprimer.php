<div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <form id="supvoyage-form" action="supprimer_voyage.php" method="post">
                            <div class= "row">
                                <h3>Supprimer un voyage</h3>
                                <br><br>
                                <?php include "flash.php"; ?>
                                <select class="form-select" name="unPays" id="unPays">
                                
                                    <option>Choisir le pays</option>
                                    <?php
                                        foreach ($conn->query('SELECT pays FROM voyage', PDO::FETCH_ASSOC) as $ligne){
                                    ?>
                                    <option value="<?=$ligne['pays']; ?>" ><?=$ligne['pays']; ?></option>
                                <?php } ?>
                                </select>
                                
                                <button type="submit" class="btn btn-primary">Supprimer</button>
                            </div>
                        </form>

                </div>