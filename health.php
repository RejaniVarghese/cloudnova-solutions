<?php
date_default_timezone_set('Asia/Kolkata');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Application Health Check</title>
    <style>
        body{
            font-family:Arial,sans-serif;
            background:#f4f4f4;
            text-align:center;
            margin-top:80px;
        }

        .container{
            width:500px;
            margin:auto;
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow:0 0 10px rgba(0,0,0,.2);
        }

        h1{
            color:#28a745;
        }

        p{
            font-size:18px;
        }

        .status{
            color:green;
            font-weight:bold;
            font-size:22px;
        }
    </style>
</head>

<body>

<div class="container">

<h1>CloudNova Solutions</h1>

<h2>Application Health Check</h2>

<p>Status:</p>

<p class="status">✅ Healthy</p>

<p><strong>Version:</strong> 1.0</p>

<p><strong>Server Time:</strong> <?php echo date("d-m-Y H:i:s"); ?></p>

</div>

</body>
</html>
