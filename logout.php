<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            border-radius: 16px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            padding: 24px;
            max-width: 300px;
            text-align: center;
        }

        h3 {
            margin-bottom: 16px;
            font-size: 1.5rem;
            color: #333;
        }

        .btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Anda telah berhasil logout</h3>
        <a href="login.php" class="btn">Login Kembali</a>
    </div>
</body>
</html>