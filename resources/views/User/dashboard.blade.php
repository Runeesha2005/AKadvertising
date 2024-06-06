<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>
<body>
<h1>Welcome, {{ $user->name }}</h1>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

@if($subscription)
    <h2>Your Subscription</h2>
    <p>Plan: {{ $subscription->plan_name }}</p>
    <p>Price: ${{ $subscription->price }}</p>
    <p>Expires at: {{ $subscription->expires_at }}</p>
@else
    <p>You do not have an active subscription.</p>
@endif
</body>
</html>
