<form action="register.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="flight_number" placeholder="Flight Number" type="text" />
        </div>
        <div class="form-group">
            <input class="form-control" name="flight_date" placeholder="Flight Date" type="text" />
        </div>
        <div class="form-group">
            <input class="form-control" name="flight_start" placeholder="Flaght Start" type="text" />
        </div>
        <div class="form-group">
            <input autocomplete="off" autofocus class="flight_end" name="company_id" placeholder="Flight End" type="text" />
        </div>
        <div class="form-group">
            <input class="form-control" name="depart_airport" placeholder="Departure Airport" type="text" />
        </div>
        <div class="form-group">
            <input class="form-control" name="arrive_airport" placeholder="Arrive Airport" type="text" />
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span> Submit
            </button>
        </div>
    </fieldset>
</form>