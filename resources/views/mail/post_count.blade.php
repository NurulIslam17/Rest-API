<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Notification</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }

        .notification {
            background-color: #ffffff;
            border: 1px solid #cccccc;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            text-align: center;
        }

        .notification h1 {
            margin: 0 0 15px;
            font-size: 22px;
            color: #333333;
        }

        .notification p {
            margin: 0;
            font-size: 16px;
            color: #666666;
        }
    </style>
</head>

<body>
    <div class="notification">
        <h1>System Notification</h1>
        <p>Dear Admin,</p>
        <p>We are pleased to inform you that {{ $postCount }} new posts have been successfully added to the database.</p>
    </div>
</body>

</html>
