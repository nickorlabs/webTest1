<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <h2>Contact Form Submission</h2>
<div class="text-center">
    <p><strong>Name:</strong> {{$email['name']}}</p>
    <p><strong>Email:</strong> {{ $email['email'] }}</p>
    <p><strong>Phone Number:</strong> {{ $email['phone'] }}</p>
    <p><strong>Company:</strong> {{ $email['company'] }}</p>
    <p><strong>Message:</strong> {{ $email['message'] }}</p>
</div>


</body>
</html>

