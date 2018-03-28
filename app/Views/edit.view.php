<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <h3>Ausleihe bearbeiten</h3>
            <form method="POST">
            <div class="row">
                <div class="col-6">
                    <label id="surnamelabel">Nachname</label>
                </div>
                <div class="col-6">
                    <label id="firstnamelabel">Vorname</label>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input class="mb-3" type="text" id="surname" name="surname" value="<?= e($currentrental['surname']); ?>"/>
                </div>
                <div class="col-6">
                    <input class="mb-3" type="text" id="firstname" name="firstname" value="<?= e($currentrental['name']); ?>"/>
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
                    <input class="mb-3" type="email" id="email" name="email" value="<?= e($currentrental['email']); ?>"/>
                </div>
                <div class="col-6">
                    <input class="mb-3" type="text" id="phone" name="phone" value="<?= e($currentrental['phone']); ?>"/>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label id="membershipkeylabel">Zurückgebracht</label>
                </div>
                <div class="col-6">
                <label id="titlelabel">Ausgewähltes Video</label>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                <input type="checkbox" name="returned" value="1">
                </div>
                <div class="col-6">
                <select class="selectvideo mb-3" name="movieid">
                    <?php foreach ($movies as $movie) { ?>
                        <option value="<?php echo $movie["id"];?>"
                        <?php if($movie["id"] == $currentrental['fk_ID']) {
                            echo "selected"; } ?> > <?php echo e($movie["title"]); ?> </option>
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
                    <input class="mb-3" type="text" id="membershipname" disabled value="<?php echo e($currentrental['m_name']); ?>"/>
                </div>
                <div class="col-6">
                    <input class="mb-3" type="text" id="timerented" disabled value="<?= $timerented ?>"/>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label id="dayslabel">Maximale Ausleihedauer</label>
                </div>
                <div class="col-6">
                <label id="returndatelabel">Rückgabedatum</label>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input class="mb-3" type="text" id="days" disabled value="<?php echo $currentrental['days']." Tage"; ?>"/>
                </div>
                <div class="col-6">
                    <input class="mb-3" type="text" id="returndate" disabled value="<?= $timereturn ?>"/>
                </div>
            </div>
            <br>
            <input class="btn" type="submit" value="Speichern">
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>

