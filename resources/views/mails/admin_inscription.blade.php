<!DOCTYPE html>
<html>
<body>

<p>{{ $event->name }}</p>
<p>{{ session('name') }}</p>
<p>{{ session('email') }}</p>
<p>{{ session('phone') }}</p>
<p>{{ session('message') }}</p>
<p>Moto de la transacción:{{ $event->price }}</p>
</body>
</html>