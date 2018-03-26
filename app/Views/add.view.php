<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h3>Ausleihe erfassen</h3>
            <form id="add-form" method="POST">
            <div class="row">
                <div class="col-6">
                    <label id="namelabel">Name</label>
                </div>
                <div class="col-6">
                    <label id="vornamelabel">Vorname</label>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input class="mb-3" type="text" id="name" name="name"/>
                </div>
                <div class="col-6">
                    <input class="mb-3" type="text" id="vorname" name="vorname"/>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                <label id="emaillabel">Email</label>
                </div>
                <div class="col-6">
                <label id="telefonlabel">Telefon</label>
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
                <label id="membershiplabel">Mitgliedschaft</label>
                </div>
                <div class="col-6">
                    <label id="titlelabel">Ausgewähltes Video</label>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                <select name="membership">
                    <option>Auswählen...</option>
                    <?php foreach ($memberships as $membership) { ?>
                    <option id="membership" value="<?= $membership["MembershipID"] ?>"><?= $membership["m_name"] ?></option>
                    <?php } ?>
                </select>
                </div>
                <div class="col-6">
                <select name="title">
                    <option>Auswählen...</option>
                    <?php foreach ($movies as $movie) { ?>
                    <option id="title"  value="<?= $movie["id"] ?>"><?= $movie["title"] ?></option>
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
