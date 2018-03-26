<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h3>Ausleihe bearbeiten</h3>
            <form>
            <?php include 'app/Views/form.view.php'; ?>
            <div class="row">
                <div class="col-6">
                    <p>Zurückgebracht</p>
                </div>
                <div class="col-6">
                    <p>Ausgewähltes Video</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                <input type="checkbox">
                </div>
                <div class="col-6">
                <select>
                    <option>Auswählen...</option>
                    <?php foreach ($movies as $movie) { ?>
                    <option value="<?= $movie["id"] ?>"><?= $movie["title"] ?></option>
                    <?php } ?>
                </select>
                </div>
            </div>
            <br>
            <input class="btn" type="submit" value="Speichern">
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>