<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h3>Ausleihen anzeigen</h3>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Movie</th>
                    <th scope="col">Date to return</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($rentals as $rental) { ?>
                    <tr>
                    <th scope="row"><?= $rental["name"] ?></th>
                    <td><?= $rental["surname"] ?></td>
                    <td><?= $rental["title"] ?></td>
                    <td><?= $rental["time_return"] ?></td>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="col-3"></div>

    </div>
</div>