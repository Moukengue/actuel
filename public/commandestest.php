<h1>Commande</h1>
        <div class="col-12">
                <label for="artist">Artist</label>
                <select class="form-select" aria-label="artist" name="artist" id="artist">
                    <option value="" disabled selected>Veuillez sélectionner l'artiste</option>
                    <?php foreach ($artists as $artist) : ?>
                        <option value="<?= $artist->artist_id ?>"><?= $artist->artist_name ?></option>
                        <?php endforeach; ?>
                </select>
            </div>
        <form class="row g-3" action="public/commande_script.php" method="post" enctype="multipart/form-data">
        <div class="col-12">
                <label for="libelle">Libelle</label>
                <input type="text" class="form-control" id="libelle" placeholder="Enter libelle" name="libelle">
            </div>
            <div class="col-12">
                <label for="libelle">Libelle</label>
                <input type="text" class="form-control" id="libelle" placeholder="Enter libelle" name="libelle">
            </div>
            

            <div class="col-12">
                <label for="year">Year</label>
                <input type="text" class="form-control" placeholder="Enter year" name="year" id="year">
            </div>
            <div class="col-12">
                <label for="genre">Genre </label>
                <input type="text" class="form-control" placeholder="Enter genre" name="genre" id="genre">
            </div>
            <div class="col-12">
                <label for="label">Label </label>
                <input type="text" class="form-control" placeholder="Enter genre" name="label" id="label">
            </div>
            <div class="col-12">
                <label for="price">Price</label>
                <input type="text" class="form-control" placeholder="Enter price" name="price" id="price">
            </div>
            <div>
                <label for="picture">Picture</label>
                <input type="file" class="form-control" placeholder="Aucun fichier choisi" name="picture" id="picture">
            </div>
           
        </form>

    </div>