<!DOCTYPE html>
<html>

<head>
    <title>Submit Abstract</title>
</head>

<body>
    <h1>{{ $mailData['title'] }}</h1>
    <p>The User name is "{{ $mailData['data']['name'] }}" with this email-id: {{ $mailData['data']['email'] }} and
        phone number is
        "{{ $mailData['data']['phone_number'] }}" and user message is "{{ $mailData['data']['message']}}."</p>

    <p>Thank you</p>
</body>

</html>