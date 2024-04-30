<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <style>
        /* Basic CSS for layout */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }
        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        .navbar ul li {
            display: inline;
            margin-right: 20px;
        }
        .sidebar {
            background-color: #f2f2f2;
            width: 250px;
            height: 100%;
            position: fixed;
            top: 0;
            left: -250px;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar ul li {
            padding: 10px;
        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="navbar">
    <ul>
        <li><a href="validationhome.php">Home</a></li>
        <li><a href="validationview.php">View Data</a></li>
        
        <li style="float:right"><a href="validationlogin.php">Logout</a></li>
    </ul>
</div>

<div class="sidebar" id="sidebar">
    <ul>
        <li><a href="validationview.php">View Data</a></li>
        <li><a href="validationlogin.php">Logout</a></li>
    </ul>
</div>

<div class="content">
<h1>Welcome to the Home Page<h1><?php echo $_SESSION['email']; ?>

</div>

<script>
    function toggleSidebar() {
        var sidebar = document.getElementById("sidebar");
        if (sidebar.style.left === "0px") {
            sidebar.style.left = "-250px";
        } else {
            sidebar.style.left = "0px";
        }
    }
</script>

</body>
</html>
