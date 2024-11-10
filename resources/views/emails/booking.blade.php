<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Booking Confirmation</h1>

    <p>Dear {{ $booking->name }},</p>

    <p>Thank you for booking with us. Your booking details are as follows:</p>

    <ul>
        <li><strong>Room:</strong> {{ $booking->room->name }}</li>
        <li><strong>Arrival Date:</strong> {{ $booking->arrival }}</li>
        <li><strong>Departure Date:</strong> {{ $booking->departure }}</li>
        <li><strong>Email:</strong> {{ $booking->email }}</li>
        <li><strong>Phone:</strong> {{ $booking->phone }}</li>
        <li><strong>City:</strong> {{ $booking->city }}</li>
    </ul>

    <p>If you have any questions, feel free to contact us.</p>

    <p>
        Best regards,
        <br>
        {{ getSettings()->app_name }}
    </p>
</body>
</html>
