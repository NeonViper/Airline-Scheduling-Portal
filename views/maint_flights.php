
<div>
    <table width=100% class="table">
        <thead>
            <tr>
                <td><b>Flight Number</b></td>
                <td><b>Flight Date</b></td>
                <td><b>Flight Start</b></td>
                <td><b>Flight End</b></td>
                <td><b>Departure Airport</b></td>
                <td><b>Arrive Airport</b></td>
                <td><b>Asigned</b></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($flights as $flight): ?>
                <tr>
                    <td>
                        <?= $flight["flight_number"] ?>
                    </td>
                    <td>
                        <?= $flight["flight_date"] ?>
                    </td>
                    <td>
                        <?= $flight["flight_start"] ?>
                    </td>
                    <td>
                        <?= $flight["flight_end"] ?>
                    </td>
                    <td>
                        <?= $flight["depart_airport"] ?>
                    </td>
                    <td>
                        <?= $flight["arrive_airport"] ?>
                    </td>
                    <td>
                        <?= $flight["assigned"] ?>
                    </td>
                </tr>

        </tbody>
        <?php endforeach ?>
    </table>
</div>