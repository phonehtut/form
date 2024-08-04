<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meeting Form Submitted</title>
    <style>
        body {
            background-color: #f4f4f9;
            padding: 24px;
            font-family: Arial, sans-serif;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 24px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .logo {
            text-align: center;
            margin-bottom: 24px;
        }
        h1 {
            font-size: 24px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 16px;
            text-align: center;
        }
        .text-teal {
            color: #319795;
            margin-bottom: 16px;
            text-align: center;
            font-size: 18px;
        }
        p {
            margin-bottom: 12px;
            font-size: 16px;
        }
        strong {
            font-weight: bold;
        }
        .meeting-details {
            background-color: #f7fafc;
            padding: 16px;
            border-radius: 8px;
            margin-top: 24px;
        }
        .meeting-details h2 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 16px;
            color: #2c3e50;
        }
        .meeting-details p {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="http://127.0.0.1:8000/images/logo.jpg" alt="Logo" width="150">
        </div>
        <h1>Meeting Form Submission</h1>
        <p>Dear <strong>{{ $formData['name'] }} ({{ $formData['role'] }})</strong>,</p>
        <p>Thank you for submitting your meeting form. We have successfully received your details and are looking forward to our meeting. Here is a summary of your information and the meeting details:</p>
        <div class="meeting-details">
            <h2>Meeting Details</h2>
            <p><strong>Location:</strong> St.John City Mall</p>
            <p><strong>Date:</strong> August 11 ရက်နေ့</p>
            <p><strong>Day:</strong> Sunday</p>
            <p><strong>Time:</strong> မနက် ၁၀ နာရီ</p>
        </div>
        <p>If you have any questions or need further information, please do not hesitate to contact us.</p>
        <p>Best regards,</p>
        <p><strong>The Team</strong></p>
    </div>
</body>
</html>
