
<?php
 require("../includes/config.php");
 if ($_SESSION["permission"]=="admin")
 {
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        $flight_number = $_GET["flight_id"];
        $flight_date = $_GET["flight_date"];
        $row = CS50::query("select from flights where flight_number = ? and flight_date = ?", $flight_number, $flight_date);
        render("asign_flight_form.php", ["title" => "Assign Flight", "flight" => "row"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // query database for user
         $rows = CS50::query("INSERT IGNORE INTO assign_flights (flight_id, captain, first_officer, lead_fa, first_junior_fa, second_junior_fa, third_junior_fa, fourth_junior_fa, fifth_junior_fa, flight_date) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", $_POST["flight_id"], $_POST["cap_user_id"], $_POST["f_officer_user_id"], $_POST["fal_user_id"], $_POST["fa1_user_id"], $_POST["fa2_user_id"], $_POST["fa3_user_id"], $_POST["fa4_user_id"], $_POST["fa5_user_id"], $_POST["flight_date"]);
         $update = CS50::query("UPDATE flights SET assigned = ? where flight_number = ? and flight_date = ?", 1, $_POST["flight_id"], $_POST["flight_date"]);
         redirect("maint_flights.php");
    }
 }
 else
 {
     redirect("index.php");
 }

?>