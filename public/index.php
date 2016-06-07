<?php

    // configuration
    require("../includes/config.php");



   //TODO
  if ($_SESSION["permission"] == "admin")
  {
      $rows = CS50::query("SELECT * FROM assign_flights");

    $flights = [];
    foreach ($rows as $row)
    {




        $employees = CS50::query("SELECT first_name, last_name FROM users WHERE id = ?", $row["captain"]);
        $employees1 = CS50::query("SELECT first_name, last_name FROM users WHERE id = ?", $row["first_officer"]);
        $employees2 = CS50::query("SELECT first_name, last_name FROM users WHERE id = ?", $row["lead_fa"]);
        $employees3 = CS50::query("SELECT first_name, last_name FROM users WHERE id = ?", $row["first_junior_fa"]);
        $employees4 = CS50::query("SELECT first_name, last_name FROM users WHERE id = ?", $row["second_junior_fa"]);
        $employees5 = CS50::query("SELECT first_name, last_name FROM users WHERE id = ?", $row["third_junior_fa"]);
        $employees6 = CS50::query("SELECT first_name, last_name FROM users WHERE id = ?", $row["fourth_junior_fa"]);
        $employees7 = CS50::query("SELECT first_name, last_name FROM users WHERE id = ?", $row["fifth_junior_fa"]);

        $assignedFlights = CS50::query("SELECT * FROM flights WHERE flight_number = ? and flight_date = ?", $row["flight_id"], $row["flight_date"]);
        if (count($assignedFlights) != 0)
        {

        $flights[] = [
            "firstName" => $employees[0]["first_name"],
            "lastName" => $employees[0]["last_name"],
            "firstName1" => $employees1[0]["first_name"],
            "lastName1" => $employees1[0]["last_name"],
            "firstName2" => $employees2[0]["first_name"],
            "lastName2" => $employees2[0]["last_name"],
            "firstName3" => $employees3[0]["first_name"],
            "lastName3" => $employees3[0]["last_name"],
            "firstName4" => $employees4[0]["first_name"],
            "lastName4" => $employees4[0]["last_name"],
            "firstName5" => $employees5[0]["first_name"],
            "lastName5" => $employees5[0]["last_name"],
            "firstName6" => $employees6[0]["first_name"],
            "lastName6" => $employees6[0]["last_name"],
            "firstName7" => $employees7[0]["first_name"],
            "lastName7" => $employees7[0]["last_name"],
            "flightNumber" => $row["flight_id"],
            "startTime" => $assignedFlights[0]["flight_start"],
            "endTime" => $assignedFlights[0]["flight_end"],
            "departCode" => $assignedFlights[0]["depart_airport"],
            "arriveCode" => $assignedFlights[0]["arrive_airport"],
            "date" => $row["flight_date"]
        ];
        }

    }
       render("admin_portfolio.php", ["title"=>"Dashboard", "flights" => $flights]);
  }
  elseif($_SESSION["permission"] == "pilot")
  {
      render("pilots_portfolio.php", ["title"=>"Dashboard"]);
  }
  else
  {
      render("users_portfolio.php", ["title"=>"Dashboard"]);
  }
?>