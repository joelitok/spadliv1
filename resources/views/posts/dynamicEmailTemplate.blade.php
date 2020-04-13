<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>

    <h3>We have new Message</h3>
    <p>Name: {{ $data['name'] }}</p>
    <p>E-mail: {{ $data['email'] }}</p>
    <p>Message: </p>
    <p>{{ $data['message'] }}.</p>

</body>
</html>
