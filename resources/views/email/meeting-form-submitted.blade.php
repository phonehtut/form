<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meeting Form Submitted</title>
</head>
<body>
    <h1>Meeting Form Submission</h1>
    <p><strong>Name:</strong> {{ $formData['name'] }}</p>
    <p><strong>Email:</strong> {{ $formData['email'] }}</p>
    <p><strong>Phone:</strong> {{ $formData['phone'] }}</p>
    <p><strong>Telegram:</strong> {{ $formData['telegram'] }}</p>
    <p><strong>Role:</strong> {{ $formData['role'] }}</p>
</body>
</html>
