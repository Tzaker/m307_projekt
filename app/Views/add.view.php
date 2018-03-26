<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h3>Ausleihe erfassen</h3>
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
                    <input class="mb-3" type="text" id="add-name" name="name"/>
                </div>
                <div class="col-6">
                    <input class="mb-3" type="text" id="add-vorname" name="vorname"/>
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
                    <input class="mb-3" type="email" id="add-email" name="email"/>
                </div>
                <div class="col-6">
                    <input class="mb-3" type="text" id="add-telefon" name="telefon"/>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p>Mitgliedschaftsstatus</p>
                </div>
                <div class="col-6">
                    <p>Ausgewähltes Video</p>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                <select>
                    <option>Auswählen...</option>
                    <?php showMembershipStatus(); ?>
                </select>
                </div>
                <div class="col-6">
                <select>
                    <option>Auswählen...</option>
                    <?php showMovieList(); ?>
                </select>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
<?php

