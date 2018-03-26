<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h3>Ausleihe bearbeiten</h3>
            <form>
            <div class="row">
                <div class="col-6">
                    <p>Name</p>
                </div>
                <div class="col-6">
                    <p>Vorname</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input class="mb-3" type="text" id="name" name="name" value="<?= "name" ?>"></input>
                </div>
                <div class="col-6">
                    <input class="mb-3" type="text" id="vorname" name="vorname"/>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>Email</p>
                </div>
                <div class="col-6">
                    <p>Telefon</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input class="mb-3" type="email" id="email" name="email"/>
                </div>
                <div class="col-6">
                    <input class="mb-3" type="text" id="telefon" name="telefon"/>
                </div>
            </div>
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