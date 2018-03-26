<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h3>Ausleihen anzeigen</h3>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Movie</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($rentals as $rental) { ?>
                    <tr>
                    <th scope="row"><?= $rental["RentalID"] ?></th>
                    <td><?= $rental["name"] ?></td>
                    <td><?= $rental["title"] ?></td>
                    <td><?= $rental["days"] ?></td>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="col-3"></div>

    </div>
</div>