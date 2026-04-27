<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial, sans-serif; background:#f4f4f4; margin:0; padding:0; }
        .container { max-width:600px; margin:30px auto; background:white; border-radius:12px; overflow:hidden; }
        .header { background:#003BA4; padding:30px; text-align:center; }
        .header h1 { color:white; margin:0; font-size:24px; }
        .body { padding:30px; color:#333; }
        .body h2 { color:#003BA4; }
        .details { background:#F8F8F8; border-radius:8px; padding:20px; margin:20px 0; }
        .details p { margin:8px 0; font-size:14px; }
        .details strong { color:#003BA4; }
        .footer { background:#003BA4; padding:20px; text-align:center; color:white; font-size:12px; }
        .btn { display:inline-block; background:#00C6FF; color:white; padding:12px 24px; border-radius:8px; text-decoration:none; margin-top:16px; font-weight:bold; }
    </style>
</head>
<body>
    <div class="container">

        <div class="header">
            <h1>Zippy Solutions</h1>
        </div>

        <div class="body">
            <h2>Thank you, {{ $contact->name }}!</h2>
            <p>We have received your message and will get back to you within <strong>24 hours</strong>.</p>

            <div class="details">
                <p><strong>Name:</strong> {{ $contact->name }}</p>
                <p><strong>Email:</strong> {{ $contact->email }}</p>
                <p><strong>Phone:</strong> {{ $contact->phone }}</p>
                @if($contact->service)
                <p><strong>Service:</strong> {{ $contact->service }}</p>
                @endif
                <p><strong>Message:</strong> {{ $contact->message }}</p>
            </div>

            <p>Our team will review your inquiry and contact you shortly.</p>
            <a href="{{ url('/') }}" class="btn">Visit Our Website</a>
        </div>

        <div class="footer">
            <p>© {{ date('Y') }} Zippy Solutions. All Rights Reserved.</p>
            <p>DHA-II, Islamabad, Near Giga Mall</p>
        </div>

    </div>
</body>
</html>
