<!DOCTYPE html>
<html>
<body>

<p>Hola {{ session('name') }}</p>
<p>Tu inscripción al evento {{ $event->name }} esta siendo procesada (pago pendiente)</p>
<p>Los siguientes datos podrán ser pedidos para verificar la inscripción:</p>
<p>{{ session('name') }}</p>
<p>{{ session('email') }}</p>
<p>Monto de la transacción:{{ $event->price }}</p>
<p>ID de la transacción:{{ $id }}</p>
</body>
</html>