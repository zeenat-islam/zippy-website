<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
    <h2>New Inquiry Received</h2>
<p><strong>Name:</strong> {{ $contact->name }}</p>
<p><strong>Email:</strong> {{ $contact->email }}</p>
<p><strong>Phone:</strong> {{ $contact->phone }}</p>
<p><strong>Service:</strong> {{ $contact->service }}</p>
<p><strong>Message:</strong> {{ $contact->message }}</p>
</body>
</html>