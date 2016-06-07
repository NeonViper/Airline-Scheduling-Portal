<!DOCTYPE html>

<html>

<head>

    <!-- http://getbootstrap.com/ -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" />

    <link href="/css/styles.css" rel="stylesheet" />

    <?php if (isset($title)): ?>
        <title>Crew Scheduling:
            <?= htmlspecialchars($title) ?>
        </title>
        <?php else: ?>
            <title>Crew Scheduling</title>
            <?php endif ?>

                <!-- https://jquery.com/ -->
                <script src="/js/jquery-1.11.3.min.js"></script>

                <!-- http://getbootstrap.com/ -->
                <script src="/js/bootstrap.min.js"></script>

                <script src="/js/scripts.js"></script>

</head>

<body>

    <div class="container">

        <div id="top">
            <h1>Crew Scheduling</h1>
            <?php if (!empty($_SESSION["id"]) && $_SESSION["permission"] == "admin"): ?>
                <ul class="nav nav-pills">
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href="maint_flights.php">Maintenance Flights</a></li>
                    <li><a href="maint_users.php">Maintenance Users</a></li>
                    <li><a href="change_pass.php">Change Password</a></li>
                    <li><a href="logout.php"><strong>Log Out</strong></a></li>
                </ul>
                <?php elseif(!empty($_SESSION["id"])):?>
                    <ul class="nav nav-pills">
                        <li><a href="index.php">Dashboard</a></li>
                        <li><a href="logout.php"><strong>Log Out</strong></a></li>
                    </ul>
                    <?php endif ?>
        </div>

        <div id="middle">