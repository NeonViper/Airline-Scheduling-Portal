<?php

    // configuration
    require("../includes/config.php");
 if ($_SESSION["permission"]=="admin")
 {

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("add_flight_form.php", ["title" => "Add Flight"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // query database for user
        $rows = CS50::query("INSERT IGNORE INTO flights (flight_number, flight_date, flight_start, flight_end, depart_airport, arrive_airport) VALUES(?, ?, ?, ?, ?, ?)", $_POST["flight_number"], $_POST["last_name"], $_POST["flight_date"], $_POST["flight_start"], $_POST["depart_airport"], $_POST["arrive_airport"]);

        if (count($rows) == 1)
        {
            redirect("maint_flights.php");
        }
    }
 }
 else
 {
     redirect("index.php");
 }

?>