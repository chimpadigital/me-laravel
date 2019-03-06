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
						        <input class="form-control" id="email" name="email" value="test_user_19653727@testuser.com" type="email" placeholder="your email"/>
						   	</div>

						   	<div class="col-md-6 form-group">
						   		<label for="cardNumber">Credit card number:</label>
						        <input class="form-control" type="text" id="cardNumber" data-checkout="cardNumber" placeholder="4509 9535 6623 3704" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
						   	</div>


					   	</div>

					   	<div class="form-row">
					   		
					   		<div class="col-md-6 form-group">
						   		
						   		<label for="securityCode">Security code:</label>
						        <input class="form-control" type="text" id="securityCode" data-checkout="securityCode" placeholder="123" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />

						   	</div>

						   	<div class="col-md-6 form-group">
						   		<label for="cardExpirationMonth">Expiration month:</label>
						        <input class="form-control" type="text" id="cardExpirationMonth" data-checkout="cardExpirationMonth" placeholder="12" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
						   	</div>


					   	</div>
					   	
						<div class="form-row">
							
							<div class="col-md-6 form-group">
						   		<label for="cardExpirationYear">Expiration year:</label>
						        <input class="form-control" type="text" id="cardExpirationYear" data-checkout="cardExpirationYear" placeholder="2015" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete=off />
						   	</div>
						   	<div class="col-md-6 form-group">
						   		<label for="cardholderName">Card holder name:</label>
						        <input class="form-control" type="text" id="cardholderName" data-checkout="cardholderName" placeholder="APRO" />
						   	</div>

						</div>

					   	<div class="form-row">
					   		
							<div class="col-md-6 form-group">
						   		<label for="docType">Document type:</label>
						        <select class="form-control" id="docType" data-checkout="docType"></select>
						   	</div>
						   	<div class="col-md-6 form-group">
						   		<label for="docNumber">Document number:</label>
						        <input class="form-control" type="text" id="docNumber" data-checkout="docNumber" placeholder="12345678" />
						   	</div>
					

					   	</div>
					            
	
					        <input type="hidden" name="paymentMethodId" />
					        <input class="btn btn-success" type="submit" value="Pay!" />
					
					</form>
                </div>

             
            </div>
        </div>
       
    </section>
  


@endsection
@section('section-scripts')

<script src="https://secure.mlstatic.com/sdk/javascript/v1/mercadopago.js"></script>

<script type="text/javascript">
	
	Mercadopago.setPublishableKey("TEST-f0b45ff8-1142-4d48-8659-46ee6907b982");

	Mercadopago.getIdentificationTypes();


	function guessingPaymentMethod(event) {
	    var bin = getBin();

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



	doSubmit = false;
	
	
	function doPay(event){
	    event.preventDefault();
	    if(!doSubmit){
	        var $form = document.querySelector('#pay');

	        Mercadopago.createToken($form, sdkResponseHandler); // The function "sdkResponseHandler" is defined below

	        return false;
	    }
	};

	document.querySelector('#pay').addEventListener('submit', doPay);


	function sdkResponseHandler(status, response) {
	    if (status != 200 && status != 201) {
	        alert("verify filled data");
	        alert(status);
	    }else{
	        var form = document.querySelector('#pay');
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