<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 20px; }
        .container { background: white; padding: 30px; border-radius: 8px; max-width: 600px; margin: auto; }
        .header { background: #06254E; color: white; padding: 20px; border-radius: 8px 8px 0 0; text-align: center; }
        .field { margin-bottom: 15px; border-bottom: 1px solid #eee; padding-bottom: 10px; }
        .label { font-weight: bold; color: #555; font-size: 13px; }
        .value { color: #111; font-size: 15px; margin-top: 4px; }
        .footer { text-align: center; color: #999; font-size: 12px; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>New Contact Form Submission</h2>
            <p>Zippy Solutions</p>
        </div>

        <div style="padding: 20px 0;">
            <div class="field">
                <div class="label">Name</div>
                <div class="value">{{ $contact->name }}</div>
            </div>
            <div class="field">
                <div class="label">Email</div>
                <div class="value">{{ $contact->email }}</div>
            </div>
            <div class="field">
                <div class="label">Phone</div>
                <div class="value">{{ $contact->phone }}</div>
            </div>
            @if($contact->service)
            <div class="field">
                <div class="label">Service</div>
                <div class="value">{{ $contact->service }}</div>
            </div>
            @endif
            @if($contact->job_inquiry)
            <div class="field">
                <div class="label">Job Inquiry</div>
                <div class="value">{{ $contact->job_inquiry }}</div>
            </div>
            @endif
            <div class="field">
                <div class="label">Message</div>
                <div class="value">{{ $contact->message }}</div>
            </div>
        </div>

        <div class="footer">
            © 2026 Zippy Solutions — Admin Notification
        </div>
    </div>
</body>
</html>