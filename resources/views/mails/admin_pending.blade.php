<!DOCTYPE html>
<html>
<body>

<p>{{ $event->name }}</p>
<p>{{ session('name') }}</p>
<p>{{ session('email') }}</p>
<p>{{ session('phone') }}</p>
<p>{{ session('message') }}</p>
<p>Monto de la transacción:@if(app('config')->get('app.country')=='ar')$ @endif {{ $event->price }} @if(app('config')->get('app.country')=='cr') USD @endif</p>
<p>ID de la transacción:{{ $id }}</p>
<p>Estado de la transacción:PAGO PENDIENTE</p>
</body>
</html>