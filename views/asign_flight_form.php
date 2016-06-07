<form action="add_user.php" method="post">
    <?php foreach ($flights as $flight): ?>
    <fieldset>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="flight_id" placeholder=<?=$flight["flight_number"]?> type="text" />
        </div>
        <div class="form-group">
            <input class="form-control" name="cap_user_id" placeholder="Captain" type="text" />
        </div>
        <div class="form-group">
            <input class="form-control" name="f_officer_user_id" placeholder="First Officer" type="text" />
        </div>
        <div class="form-group">
            <input autocomplete="off" autofocus class="fal_user_id" name="FA Leader" placeholder="Company ID" type="text" />
        </div>
        <div class="form-group">
            <input class="form-control" name="fa1_user_id" placeholder="FA First Junior" type="text" />
        </div>
        <div class="form-group">
            <input class="form-control" name="fa2_user_id" placeholder="FA Second Junior" type="text" />
        </div>
        <div class="form-group">
            <input class="form-control" name="fa3_user_id" placeholder="FA Third Junior" type="password" />
        </div>
        <div class="form-group">
            <input class="form-control" name="fa4_user_id" placeholder="FA Fourth Junior" type="password" />
        </div>
        <div class="form-group">
            <input class="form-control" name="fa5_user_id" placeholder="FA Fifth Junior" type="password" />
        </div>
        <div class="form-group">
            <input class="form-control" name="flight_date" placeholder=<?=$flight["flight_date"]?> type="password" />
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span> Asign
            </button>
        </div>
    </fieldset>
    <?php endforeach ?>
</form>