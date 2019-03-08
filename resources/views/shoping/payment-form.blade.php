@extends('layouts.site')

@section('content')


  <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix bg-white position-relative" id="home" style="margin-bottom: 30px;">
        <div class="container h-100 mt-8">
            <div class="row h-100">
                <div class="col-12 col-md">
                                            
                    <form action"{{ route('events.payments.set') }}" method="post" id="pay" name="pay" >
                    	@csrf
					   	
					   	<div class="form-row">
					   		
					   		<div class="col-md-6 form-group">
						   		<label for="email">Email</label>
						        <input class="form-control" id="email" name="email" value="ejemplo@ejemplo.com" type="email" placeholder="your email"/>
						   	</div>

						   	<div class="col-md-6 form-group">
						   		<label for="cardNumber">Número de tarjeta:</label>
						        <input class="form-control" type="text" id="cardNumber" data-checkout="cardNumber" placeholder="4509 9535 6623 3704" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
						   	</div>


					   	</div>

					   	<div class="form-row">
					   		
					   		<div class="col-md-3 form-group">
						   		
						   		<label for="securityCode">Código de seguridad:</label>
						        <input class="form-control" type="text" id="securityCode" data-checkout="securityCode" placeholder="123" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />

						   	</div>

						   	<div class="col-md-3 form-group">
						   		<label for="cardExpirationMonth">Més de vencimiento:</label>
						        <input class="form-control" type="text" id="cardExpirationMonth" data-checkout="cardExpirationMonth" placeholder="12" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
						   	</div>

							<div class="col-md-3 form-group">
									<label for="cardExpirationYear">Año de vencimiento:</label>
								<input class="form-control" type="text" id="cardExpirationYear" data-checkout="cardExpirationYear" placeholder="2015" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
							</div>

					   	</div>
					   	
						<div class="form-row">
							
						   	<div class="col-md-12 form-group">
						   		<label for="cardholderName">Nombre y Apellido:</label>
						        <input class="form-control" type="text" id="cardholderName" data-checkout="cardholderName" placeholder="Según se muestra en la tarjeta" />
						   	</div>

						</div>

					   	<div class="form-row">
					   		
							<div class="col-md-6 form-group">
						   		<label for="docType">Tipo de documentación:</label>
						        <select class="form-control" id="docType" data-checkout="docType"></select>
						   	</div>
						   	<div class="col-md-6 form-group">
						   		<label for="docNumber">Número:</label>
						        <input class="form-control" type="text" id="docNumber" data-checkout="docNumber" placeholder="12345678" />
						   	</div>
					

					   	</div>
					            
	
					        <input id="paymentMethodId" type="hidden" name="paymentMethodId" />
					        <input class="btn btn-success" type="submit" value="Pagar" />
					
					</form>
                </div>
                <div class="col-12 col-md-2"></div>
                <div class="col-12 col-md-5 wow fadeInDown" data-wow-delay="1s" style="z-index:1000;">
                    <div class="precio">
                        <h3 class="">Costo</h3>
                        <h1 class="mb-4">${{$event->price}}</h1>
                        
                        
                        <ul class="info-evento mt-5 wow fadeInLeft" data-wow-delay=".8s">
                            <li>
                                <img src="{{ asset('img/core-img/calendar.svg') }}" alt="" class="float-left mr-4 icono-evento">
                                <h5>{{ date('d',strtotime($event->date_start)) }} de {{ date('M',strtotime($event->date_start)) }}</h5>
                            </li>
                            <li>
                                <img src="{{ asset('img/core-img/timer.svg') }}" alt="" class="float-left mr-4 icono-evento">
                                <h5>{{$event->hour}}</h5>
                            </li>
                            <li>
                                <img src="{{ asset('img/core-img/location-point.svg') }}" alt="" class="float-left mr-4 icono-evento">
                                <h5>{{$event->address}}</h5>
                            </li>
                        </ul>
                    </div>
                </div>

             
            </div>
		</div>
		<div class="welcome-thumb2 wow fadeInDown" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInDown;">
            <img src="{{ asset('img/bg-img/evento-bg.svg') }}" alt="">
        </div>
       
    </section>
  


@endsection
@section('section-scripts')

<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>

<script type="text/javascript">
	
	Mercadopago.setPublishableKey("{{ env("MERCADOPAGOPULIC") }}");

	Mercadopago.getIdentificationTypes();

	var paymentMethod = document.getElementById('paymentMethodId'); 
	var form = document.querySelector('#pay');

	function setPaymentMethodInfo(status, response) {
    if (status == 200) {
        paymentMethod.setAttribute('name', "paymentMethodId");
        paymentMethod.setAttribute('type', "hidden");
        paymentMethod.setAttribute('value', response[0].id);

        form.appendChild(paymentMethod);
        
        } 
        else 
        {
            document.querySelector("input[name=paymentMethodId]").value = response[0].id;
        }
    };

	function guessingPaymentMethod(event) {
	    var bin = document.getElementById('cardNumber').value;

	    if (event.type == "keyup") {
	        if (bin.length >= 6) {
	            Mercadopago.getPaymentMethod({
	                "bin": bin
	            }, setPaymentMethodInfo);
	        }
	    } else {
	        setTimeout(function() {
	            if (bin.length >= 6) {
	                Mercadopago.getPaymentMethod({
	                    "bin": bin
	                }, setPaymentMethodInfo);
	            }
	        }, 100);
	    }
	};

	



	doSubmit = false;
	
	
	function doPay(event){
	    event.preventDefault();
	    if(!doSubmit){
	        var $form = document.querySelector('#pay');

	        Mercadopago.createToken($form, sdkResponseHandler); // The function "sdkResponseHandler" is defined below

	        return false;
	    }
	};

	document.querySelector('#pay').addEventListener('keyup', guessingPaymentMethod);

	document.querySelector('#pay').addEventListener('submit', doPay);


	function sdkResponseHandler(status, response) {
	    if (status != 200 && status != 201) {
	        alert("verify filled data");
	        alert(status);
	    }else{
	        
	        var card = document.createElement('input');
	        card.setAttribute('name', 'token');
	        card.setAttribute('type', 'hidden');
	        card.setAttribute('value', response.id);
	        form.appendChild(card);
	        doSubmit=true;
        	form.submit();
	    }
	};
</script>

@endsection