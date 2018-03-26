<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h3>Ausleihe bearbeiten</h3>
            <form>
            <div class="row">
                <div class="col-6">
                    <label id="surnamelabel">Name</label>
                </div>
                <div class="col-6">
                    <label id="firstnamelabel">Vorname</label>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input class="mb-3" type="text" id="surname" name="surname" value="<?= "surname" ?>"></input>
                </div>
                <div class="col-6">
                    <input class="mb-3" type="text" id="firstname" name="firstname"/>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label id="emaillabel">Email</label>
                </div>
                <div class="col-6">
                    <label id="phonelabel">Telefon</label>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input class="mb-3" type="email" id="email" name="email"/>
                </div>
                <div class="col-6">
                    <input class="mb-3" type="text" id="phone" name="phone"/>
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

