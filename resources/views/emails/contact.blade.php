<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <h1>New Contact Form Submission</h1>
    <p><strong>Name:</strong> {{ $formData['name'] }}</p>
    <p><strong>Email:</strong> {{ $formData['email'] }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $formData['message'] }}</p>
</body>
</html>
