<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User Enquiry Recieved</title>
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
            <h1>New User Enquiry Recieved</h1>
        </div>
        <div class="content">
            <p>Hello Admin</p>
            <p>
                A new user has sent an enquiry.<br> Please verify and revert!
            </p>
            <p>User Name: {{ $mailData['name']}}</p>
            <p>Email: {{ $mailData['email']}}</p>
            <p>Mobile: {{ $mailData['mobile']}}</p>
            <p>Query: {{ $mailData['message']}}</p>
            <br>
            <a href="mailto:{{ $mailData['email'] }}?subject=Re:%20Your%20Enquiry%20to%20Plus%20Point%20Education&body=Dear%20{{ urlencode($mailData['name']) }},%0D%0A%0D%0AThank%20you%20for%20your%20enquiry.%20We%20have%20received%20your%20message%20and%20will%20get%20back%20to%20you%20shortly.%0D%0A%0D%0A---%0D%0A%0D%0AYour%20Query:%0D%0A{{ urlencode($mailData['message']) }}%0D%0A%0D%0A%0D%0ABest%20regards,%0D%0APlus%20Point%20Education%0D%0A306,%20AI%20Shali%20Building%20Next%20to%20Mamzar%20Center%0D%0ADubai,%20United%20Arab%20Emirates%0D%0A(+971)%205262%2007777%0D%0Ainfo@pluspoint.uk" class="button">Reply</a>
            <p>Best regards,<br>Plus Point Education<br>306, AI Shali Building Next to Mamzar Center<br>Dubai, United
                Arab Emirates<br>(+971) 5262 07777<br>info@pluspoint.uk</p>
        </div>
        <div class="footer">
            <p>&copy;2024 by Plus Point Education.</p>
        </div>
    </div>
</body>

</html>
