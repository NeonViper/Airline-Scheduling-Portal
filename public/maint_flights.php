
<?php
 require("../includes/config.php");
 if ($_SESSION["permission"]=="admin")
 {
 $rows = CS50::query("select * from flights order by flight_date desc");
 render("maint_flights.php", ["title"=>"Flights's Maintenance", "flights"=>$rows]);
 }
 else
 {
     redirect("index.php");
 }

?>