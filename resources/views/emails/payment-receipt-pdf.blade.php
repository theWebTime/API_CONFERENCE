<!DOCTYPE html>
<html>
<head>
    <title>Payment Receipt</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ccc; }
        .header { text-align: center; margin-bottom: 20px; }
        .content { margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Payment Receipt</h1>
        </div>
        <div class="content">
            <p>Thank you for your payment!</p>
            <p><strong>Transaction ID:</strong> {{ $transactionId }}</p>
            <p><strong>Amount:</strong> ${{ number_format($amount / 100, 2) }}</p>
            <p><strong>Conference:</strong> {{ $conferenceName }}</p>
            <p><strong>Plan:</strong> {{ $planName }}</p>
            <p><strong>Date:</strong> {{ $date }}</p>
        </div>
    </div>
</body>
</html>