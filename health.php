<?php
date_default_timezone_set('Asia/Kolkata');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloudNova Solutions - Health Check</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 550px;
            margin: 60px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.15);
            text-align: center;
        }

        h1 {
            color: #0077cc;
            margin-bottom: 10px;
        }

        h2 {
            color: #444;
            margin-bottom: 30px;
        }

        .status {
            font-size: 24px;
            font-weight: bold;
            color: #28a745;
            margin: 20px 0;
        }

        .info {
            text-align: left;
            margin-top: 30px;
            font-size: 18px;
            line-height: 1.8;
        }

        .info strong {
            display: inline-block;
            width: 160px;
        }

        footer {
            margin-top: 30px;
            color: #777;
            font-size: 14px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>☁️ CloudNova Solutions</h1>

    <h2>Application Health Check</h2>

    <div class="status">
        ✅ Application Healthy
    </div>

    <div class="info">

        <p><strong>Application:</strong> CloudNova Solutions</p>

        <p><strong>Status:</strong> Healthy</p>

        <p><strong>Version:</strong> 1.0.0</p>

        <p><strong>Environment:</strong> Production</p>

        <p><strong>Server Time:</strong> <?php echo date("d-m-Y H:i:s"); ?></p>

    </div>

    <footer>
        Powered by PHP, Docker, Jenkins & AWS EC2
    </footer>

</div>

</body>

</html>
