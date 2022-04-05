<div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                        <form id="modifiervoyage-form" action="modifier_voyage.php" method="post">
                            <div class= "row">
                                <h3>Modifier un voyage</h3>
                                <br><br>
                                <?php include "flash.php";?>
                                <select class="form-select" name="lePays" id="lePays">
                                
                                    <option>Choisir le pays</option>
                                    <?php
                                        foreach ($conn->query('SELECT pays FROM voyage', PDO::FETCH_ASSOC) as $ligne){
                                    ?>
                                    <option value="<?=$ligne['pays']; ?>" ><?=$ligne['pays']; ?></option>
                                <?php } ?>
                                </select>

                                <label for="inputPrix" class="form-label">Prix</label>
                                <input type="text" id="inputPays" class="form-control" name="prix">
                                

                                <label for="description" class="form-label">Description</label>
                                <textarea id="description" class="form-control"  rows="4" name="description"></textarea><br>
                                

                                
                                <button type="submit" class="btn btn-primary">Modifer</button>
                            </div>
                        </form>

                </div>