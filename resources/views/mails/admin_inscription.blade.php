<!DOCTYPE html>
<html>
<body>

<p>{{ $event->name }}</p>
<p>{{ $session['name'] }}</p>
<p>{{ $session['email'] }}</p>
<p>{{ $session['phone'] }}</p>
<p>{{ $session['message'] }}</p>
<p>ID de transacción:{{ $payment->id }}</p>
<p>Moto de la transacción:{{ $payment->transaction_amount }}</p>
</body>
</html>