<!DOCTYPE html>
<html>
<body>

<p>{{ $session['name'] }}</p>
<p>Para finalizar tu inscripción deberás realiza tu depósito bancario aquí </p>
<p>Los siguientes datos podrán ser pedidos para verificar la inscripción:</p>
@if(app('config')->get('app.country') == 'ar')

<p>Titular ME Motivador de Experiencias SAS</p>
<p>CUIT 30-71579237-7 </p>
<p>Moneda $ </p>
<p>Banco ICBC</p>
<p>Nueva Córdoba - Suc 887</p>
<p>Nro de Cta Cte 887/02001366/78 </p>
<p>CBU 0150887902000001366785 </p>

@endif

@if(app('config')->get('app.country') == 'cr')
<p>
<p>Banco: BAC San José</p>
<p>Cuenta en Dólares:DÓLARES USD</p>
<p>Cuenta 912078136</p>
<p>Cuenta Cliente 10200009120781361</p>
<p>A nombre: Alejandra Rodríguez González</p>
<p>Cédula 2-0570-0660</p>
</p>
@endif
</body>
</html>