<!DOCTYPE html>
<html>
<body>

<p>{{ $event->name }}</p>
<p>{{ session('name') }}</p>
<p>{{ session('email') }}</p>
<p>{{ session('phone') }}</p>
<p>{{ session('message') }}</p>
<p>Monto de la transacción:{{ $event->price }}</p>
<p>ID de la transacción:{{ $id }}</p>
</body>
</html>