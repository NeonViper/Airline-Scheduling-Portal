<?php

    // configuration
    require("../includes/config.php");
 if ($_SESSION["permission"]=="admin")
 {
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("add_user_form.php", ["title" => "Add User"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // query database for user
        $rows = CS50::query("INSERT IGNORE INTO users (first_name, last_name, email, company_id, permission, user_name, password) VALUES(?, ?, ?, ?, ?, ?, ?)", $_POST["first_name"], $_POST["last_name"], $_POST["email"], $_POST["company_id"], $_POST["permission"], $_POST["user_name"], password_hash($_POST["password"], PASSWORD_DEFAULT));

        if (count($rows) == 1)
        {
            redirect("maint_users.php");
        }
    }
 }
 else
 {
     redirect("index.php");
 }

?>