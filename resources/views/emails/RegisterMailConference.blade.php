<!DOCTYPE html>
<html>

<head>
    <title>Conference</title>
</head>

<body>
    <h1>{{ $mailData['title'] }}</h1>
    <p>The User name is "{{ $mailData['data']['name'] }}" with this email-id: {{ $mailData['data']['email'] }} and
        phone number is
        "{{ $mailData['data']['phone_number'] }}" and institution is "{{ $mailData['data']['institution']}}".</p>

    <p>Thank you</p>
</body>

</html>