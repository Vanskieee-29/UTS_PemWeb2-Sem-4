<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>

<!-- CSS INTERNAL -->
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', sans-serif;
    }

    body {
        height: 100vh;
        background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login-card {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(15px);
        padding: 40px;
        border-radius: 16px;
        width: 320px;
        box-shadow: 0 8px 32px rgba(0,0,0,0.5);
        border: 1px solid rgba(255,255,255,0.1);
    }

    .login-card h2 {
        color: white;
        text-align: center;
        margin-bottom: 20px;
    }

    .input-group {
        margin-bottom: 20px;
    }

    .input-group input {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 8px;
        outline: none;
        background: rgba(255,255,255,0.1);
        color: white;
    }

    .input-group input::placeholder {
        color: #ccc;
    }

    .btn {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 8px;
        background: linear-gradient(135deg, #7f00ff, #e100ff);
        color: white;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn:hover {
        transform: scale(1.05);
        box-shadow: 0 0 15px rgba(225, 0, 255, 0.6);
    }

    .error {
        background: rgba(255, 0, 0, 0.2);
        color: #ff6b6b;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 8px;
        text-align: center;
        border: 1px solid rgba(255, 0, 0, 0.3);
    }
</style>
</head>

<body>

<div class="login-card">
    <h2>Login</h2>

    <!-- ERROR MESSAGE -->
    <?php if(isset($_GET['error'])): ?>
        <div class="error">Username atau Password salah!</div>
    <?php endif; ?>

    <form method="post" action="login.php">
        <div class="input-group">
            <input type="text" name="username" placeholder="Username" required>
        </div>

        <div class="input-group">
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <button class="btn" type="submit">Login</button>
    </form>
</div>

</body>
</html>