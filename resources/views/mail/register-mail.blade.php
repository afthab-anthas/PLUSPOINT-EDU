<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful With Plus Point</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f6f6f6;
        }

        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #009cfd;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }

        .content {
            padding: 20px;
        }

        .footer {
            background-color: #f1f1f1;
            color: #333333;
            padding: 10px;
            text-align: center;
            font-size: 12px;
            border-radius: 0 0 10px 10px;
        }

        .button {
            background-color: #009cfd;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>New Account Created</h1>
        </div>
        <div class="content">
            <p>{{ $mailmessage }}</p>
            <p>
                You've successfully created an account on the Plus Point Education Portal as a {{ $mailrole }}!
                Congratulations, you're now one step closer to pursuing your dream education. We hope you're as excited
                as we are!
            </p>
            <a href="https://pluspoint.uk/" class="button">Get Started</a>
            <p>Best regards,<br>Plus Point Education<br>306, AI Shali Building Next to Mamzar Center<br>Dubai, United
                Arab Emirates<br>(+971) 5262 07777<br>info@pluspoint.uk</p>
        </div>
        <div class="footer">
            <p>&copy;2024 by Plus Point Education.</p>
        </div>
    </div>
</body>

</html>
