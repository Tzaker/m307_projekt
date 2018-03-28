<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h3>Ausleihe bearbeiten</h3>
            <form method="POST">
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
                    <input class="mb-3" type="text" id="surname" name="surname" value="<?= $currentrental['surname']; ?>"/>
                </div>
                <div class="col-6">
                    <input class="mb-3" type="text" id="firstname" name="firstname" value="<?= $currentrental['name']; ?>"/>
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
                    <input class="mb-3" type="email" id="email" name="email" value="<?= $currentrental['email']; ?>"/>
                </div>
                <div class="col-6">
                    <input class="mb-3" type="text" id="phone" name="phone" value="<?= $currentrental['phone']; ?>"/>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label id="membershipkeylabel">Zurückgebracht</label>
                </div>
                <div class="col-6">
                <label id="titlelabel">Auswewähltes Video</label>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                <input type="checkbox" value="<?= $currentrental['status']; ?>">
                </div>
                <div class="col-6">
                <select class="mb-3">
                    <?php foreach ($movies as $movie) { ?>
                        <option value="<?php echo $movie["id"];?>"
                        <?php if($movie["id"] == $currentrental['fk_ID']) {
                            echo "selected"; } ?> > <?php echo $movie["title"]; ?> </option>
                     <?php   
                    } ?>
                </select>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label id="membershipnamelabel">Mitgliedschaft</label>
                </div>
                <div class="col-6">
                <label id="daterentedlabel">Ausleihdatum</label>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input class="mb-3" type="text" id="membershipname" name="membershipname" disabled value="<?= $currentrental['m_name']; ?>"/>
                </div>
                <div class="col-6">
                    <input class="mb-3" type="text" id="phone" name="phone" disabled value="<?= $currentrental['time_rented']; ?>"/>
                </div>
            </div>
            <br>
            <input class="btn" type="submit" value="Speichern">
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>

