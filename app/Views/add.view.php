<script>var memberships = <?php echo json_encode($memberships) ?>;</script>
<script src="public/js/requestMemberships.js"></script>
<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <h3>Ausleihe erfassen</h3>
            <form id="add-form" method="POST">
            <span class="error-msg">
            <?php
                if (isset($errors)) {
                    foreach ($errors as $error) {
                        echo $error?><br/><?php
                    }
                }
            ?>
            </span>
            <div class="row">
                <div class="col-6">
                    <label id="surnamelabel">Nachname*</label>
                </div>
                <div class="col-6">
                    <label id="firstnamelabel">Vorname*</label>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input class="mb-3" type="text" id="surname" name="surname" value="<?= @$surname ?>"/>
                </div>
                <div class="col-6">
                    <input class="mb-3" type="text" id="firstname" name="firstname" value="<?= @$firstname ?>"/>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label id="emaillabel">Email*</label>
                </div>
                <div class="col-6">
                    <label id="phonelabel">Telefon</label>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input class="mb-3" type="email" id="email" name="email" value="<?= @$email ?>"/>
                </div>
                <div class="col-6">
                    <input class="mb-3" type="text" id="phone" name="phone" value="<?= @$phone ?>"/>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                <label id="membershiplabel">Mitgliedschaft*</label>
                </div>
                <div class="col-6">
                    <label id="titlelabel">Ausgewähltes Video*</label>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                <select class="selectmembership" name="membershipkey">
                    <?php foreach ($memberships as $membership) { ?>
                    <option id="membershipkey" value="<?= $membership["MembershipID"] ?>"><?= $membership["m_name"] ?></option>
                    <?php } ?>
                </select>
                </div>
                <div class="col-6">
                <select class="selectvideo mb-3" name="movieid">
                    <?php foreach ($movies as $movie) { ?>
                    <option id="movieid" value="<?= $movie["id"] ?>"><?= $movie["title"] ?></option>
                    <?php } ?>
                </select>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label id="dayslabel">Maximale Ausleihedauer</label>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input type="text" id="returndate" disabled />
                </div>
            </div>
            <br>
            <p>* obligatorisch</p>
            <br>
            <input type="hidden" value="add" name="savetype"/>
            <input class="btn-dark" type="submit" value="Speichern">
            </form>
        </div>
        <div class="col-2"></div>

    </div>
</div>
