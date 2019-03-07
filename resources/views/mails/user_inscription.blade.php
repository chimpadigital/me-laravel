<!DOCTYPE html>
<html>
<body>

<p>Hola {{ $session['name'] }}</p>
<p>Tu inscripción al evento {{ $event->name }} fué existosa</p>
<p>Los siguientes datos podrán ser pedidos para verificar la inscripción:</p>
<p>{{ $session['name'] }}</p>
<p>{{ $session['email'] }}</p>
<p>ID de transacción:{{ $payment->id }}</p>
<p>Moto de la transacción:{{ $payment->transaction_amount }}</p>
</body>
</html>