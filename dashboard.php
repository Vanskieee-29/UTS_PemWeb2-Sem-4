<?php
// (optional nanti bisa pakai session)
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', sans-serif;
}

body {
    display: flex;
    height: 100vh;
    background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
    color: white;
}

/* SIDEBAR */
.sidebar {
    width: 220px;
    background: rgba(255,255,255,0.05);
    backdrop-filter: blur(15px);
    padding: 20px;
    border-right: 1px solid rgba(255,255,255,0.1);
}

.sidebar h2 {
    margin-bottom: 30px;
    text-align: center;
}

.sidebar a {
    display: block;
    padding: 12px;
    margin: 10px 0;
    color: #ccc;
    text-decoration: none;
    border-radius: 8px;
    transition: 0.3s;
}

.sidebar a:hover {
    background: linear-gradient(135deg, #7f00ff, #e100ff);
    color: white;
}

/* MAIN */
.main {
    flex: 1;
    padding: 30px;
}

/* HEADER */
.header {
    margin-bottom: 30px;
}

.header h1 {
    font-size: 24px;
}

/* CARDS */
.cards {
    display: flex;
    gap: 20px;
}

.card {
    flex: 1;
    background: rgba(255,255,255,0.05);
    backdrop-filter: blur(15px);
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 8px 32px rgba(0,0,0,0.5);
    border: 1px solid rgba(255,255,255,0.1);
}

.card h3 {
    margin-bottom: 10px;
}

.card p {
    color: #ccc;
}

/* LOGOUT BUTTON */
.logout {
    margin-top: 20px;
    display: inline-block;
    padding: 10px 15px;
    background: linear-gradient(135deg, #ff416c, #ff4b2b);
    border-radius: 8px;
    text-decoration: none;
    color: white;
    transition: 0.3s;
}

.logout:hover {
    transform: scale(1.05);
}
</style>
</head>

<body>

<div class="sidebar">
    <h2>MyApp</h2>
    <a href="#">Dashboard</a>
    <a href="#">Profile</a>
    <a href="#">Settings</a>
</div>

<div class="main">
    <div class="header">
        <h1>Welcome 👋</h1>
        <p>Selamat datang di dashboard</p>
    </div>

    <div class="cards">
        <div class="card">
            <h3>Users</h3>
            <p>120 Active Users</p>
        </div>

        <div class="card">
            <h3>Activity</h3>
            <p>45 New Logs</p>
        </div>

        <div class="card">
            <h3>Status</h3>
            <p>System Running Smoothly</p>
        </div>
    </div>

    <a href="index.php" class="logout">Logout</a>
</div>

</body>
</html>