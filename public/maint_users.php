
<?php
 require("../includes/config.php");
 if ($_SESSION["permission"]=="admin")
 {
 $rows = CS50::query("select * from users");
 render("maint_users.php", ["title"=>"Users's Maintenance", "users"=>$rows]);
 }
 else
 {
     redirect("index.php");
 }

?>