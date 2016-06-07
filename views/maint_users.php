
<div>
    <table width=100% class="table">
        <thead>
            <tr>
                <td><b>First Name</b></td>
                <td><b>Last Name</b></td>
                <td><b>Email</b></td>
                <td><b>Company ID</b></td>
                <td><b>Duty</b></td>
                <td><b>User Name</b></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>

                <tr>
                    <td>
                        <?= $user["first_name"] ?>
                    </td>
                    <td>
                        <?= $user["last_name"] ?>
                    </td>
                    <td>
                        <?= $user["email"] ?>
                    </td>
                    <td>
                        <?= $user["company_id"] ?>
                    </td>
                    <td>
                        <?= $user["permission"] ?>
                    </td>
                    <td>
                        <?= $user["user_name"] ?>
                    </td>
                </tr>
        </tbody>
        <?php endforeach ?>
    </table>
</div>