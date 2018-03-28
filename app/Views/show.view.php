<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <h3>Ausleihen anzeigen</h3>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Nachname</th>
                    <th scope="col">Vorname</th>
                    <th scope="col">Film</th>
                    <th scope="col">Rückgabedatum</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($rentals as $rental) { ?>
                    <tr>
                    <td><?= e($rental["surname"]) ?></td>
                    <td><?= e($rental["name"]) ?></td>
                    <td><?= e($rental["title"]) ?></td>
                    <td><?= e($rental["time_return"]) ?></td>
                    <td><?= e($rental["smile"]) ?></td>
                    <td><a href="edit?id=<?= $rental["RentalID"]?>">Bearbeiten</a></td>
                    <tr/>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="col-2"></div>

    </div>
</div>