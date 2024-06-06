<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Plans</title>
</head>
<body>
<h1>Choose a Subscription Plan</h1>

<form action="{{ route('paypal.subscribe') }}" method="POST">
    @csrf
    <label for="plan">Select Plan:</label>
    <select name="plan[name]">
        <option value="Basic">Basic - $10</option>
        <option value="Premium">Premium - $20</option>
        <option value="Pro">Pro - $30</option>
    </select>
    <input type="hidden" name="plan[price]" value="10" id="plan-price">
    <button type="submit">Subscribe</button>
</form>

<script>
    document.querySelector('select[name="plan[name]"]').addEventListener('change', function() {
        var plan = this.value;
        var price = 10;
        if (plan === 'Premium') price = 20;
        if (plan === 'Pro') price = 30;
        document.getElementById('plan-price').value = price;
    });
</script>
</body>
</html>
