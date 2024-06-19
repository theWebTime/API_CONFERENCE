<!DOCTYPE html>
<html>
<head>
    <title>Payment Receipt</title>
</head>
<body>
    <h1>Payment Receipt</h1>
    <p>Thank you for your payment!</p>
    <p><strong>Transaction ID:</strong> {{ $transactionId }}</p>
    <p><strong>Amount:</strong> ${{ number_format($amount / 100, 2) }}</p>
    <p><strong>Conference:</strong> {{ $conferenceName }}</p>
    <p><strong>Plan:</strong> {{ $planName }}</p>
    <p><strong>Date:</strong> {{ $date }}</p>
</body>
</html>
