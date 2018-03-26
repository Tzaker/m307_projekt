<div class="container">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <h3>Ausleihen anzeigen</h3>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Name</th>
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
                    <td><?= $rental["name"] ?></td>
                    <td><?= $rental["surname"] ?></td>
                    <td><?= $rental["title"] ?></td>
                    <td><?= $rental["time_return"] ?></td>
                    <td><a href="edit?id=<?= $rental["RentalID"]?>">Bearbeiten</a></td>
                    <td><?= $rental["smile"] ?></td>
                    <tr/>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="col-2"></div>

    </div>
</div>