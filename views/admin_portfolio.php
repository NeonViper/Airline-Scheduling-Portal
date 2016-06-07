<div>
    <table width=100% class="table">
        <thead>
            <tr>
                <td><b>Flight Number</b></td>
                <td><b>Crew</b></td>
                <td><b>Date</b></td>
                <td><b>Depart</b></td>
                <td><b>Start Time</b></td>
                <td><b>Arrive</b></td>
                <td><b>End Time</b></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($flights as $flight): ?>

                <tr>
                    <td>
                        <?= $flight["flightNumber"] ?>
                    </td>
                    <td width="30%" style="font-size:9px">
                        <table>
                            <tr>
                                Cpt:
                                <?= $flight["lastName"] ?>,
                                    <?= $flight["firstName"] ?> | FO:
                                        <?= $flight["lastName1"] ?>,
                                            <?= $flight["firstName1"] ?> | FAL:
                                                <?= $flight["lastName2"] ?>,
                                                    <?= $flight["firstName2"] ?> | FA1:
                                                        <?= $flight["lastName3"] ?>,
                                                            <?= $flight["firstName3"] ?>
                            </tr>
                            <tr>
                                FA2:
                                <?= $flight["lastName4"] ?>,
                                    <?= $flight["firstName4"] ?> | FA3:
                                        <?= $flight["lastName5"] ?>,
                                            <?= $flight["firstName5"] ?> | FA4:
                                                <?= $flight["lastName6"] ?>,
                                                    <?= $flight["firstName6"] ?> | FA5:
                                                        <?= $flight["lastName7"] ?>,
                                                            <?= $flight["firstName7"] ?>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <?= $flight["date"] ?>
                    </td>
                    <td>
                        <?= $flight["departCode"] ?>
                    </td>
                    <td>
                        <?= $flight["startTime"] ?>
                    </td>
                    <td>
                        <?= $flight["arriveCode"] ?>
                    </td>
                    <td>
                        <?= $flight["endTime"] ?>
                    </td>
                </tr>
        </tbody>
        <?php endforeach ?>
    </table>
</div>