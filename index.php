<?php
// Dynamic values
$date = date("l, d F Y");
$time = date("h:i A");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to DevOps</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: linear-gradient(to right, #2c3e50, #3498db);
            color: white;
            padding-top: 60px;
        }
        h1 {
            font-size: 50px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 5px #000;
        }
        .card {
            background: rgba(255, 255, 255, 0.1);
            padding: 20px;
            border-radius: 15px;
            display: inline-block;
            box-shadow: 0 4px 10px rgba(0,0,0,0.5);
        }
        .highlight {
            color: #f1c40f;
            font-weight: bold;
        }
        .logos {
            margin-top: 30px;
        }
        .logos img {
            height: 80px;
            margin: 0 15px;
            transition: transform 0.3s;
        }
        .logos img:hover {
            transform: scale(1.2) rotate(5deg);
        }
    </style>
</head>
<body>
    <h1>🚀 Welcome to DevOps 🚀</h1>
    <div class="card">
        <p>Today is <span class="highlight"><?php echo $date; ?></span></p>
        <p>Current Server Time: <span class="highlight"><?php echo $time; ?></span></p>
        <p>Keep Automating, Keep Innovating! ⚙️</p>
    </div>

    <div class="logos">
        <!-- DevOps Logos -->
        <img src="https://www.docker.com/wp-content/uploads/2022/03/Moby-logo.png" alt="Docker">
        <img src="https://upload.wikimedia.org/wikipedia/commons/3/39/Kubernetes_logo_without_workmark.svg" alt="Kubernetes">
        <img src="https://upload.wikimedia.org/wikipedia/commons/e/e0/Git-logo.svg" alt="Git">
        <img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Jenkins_logo.svg" alt="Jenkins">
    </div>
</body>
</html>

