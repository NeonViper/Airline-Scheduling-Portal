<form action="add_user.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="first_name" placeholder="First Name" type="text" />
        </div>
        <div class="form-group">
            <input class="form-control" name="last_name" placeholder="Last Name" type="text" />
        </div>
        <div class="form-group">
            <input class="form-control" name="email" placeholder="Email" type="text" />
        </div>
        <div class="form-group">
            <input autocomplete="off" autofocus class="form-control" name="company_id" placeholder="Company ID" type="text" />
        </div>
        <div class="form-group">
            <input class="form-control" name="permission" placeholder="Permission" type="text" />
        </div>
        <div class="form-group">
            <input class="form-control" name="user_name" placeholder="User Name" type="text" />
        </div>
        <div class="form-group">
            <input class="form-control" name="password" placeholder="Password" type="password" />
        </div>
        <div class="form-group">
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span> Submit
            </button>
        </div>
    </fieldset>
</form>