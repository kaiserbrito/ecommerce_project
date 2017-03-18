Stripe.setPublishableKey('pk_test_2kDjyWFFzwdoa5oPTmbcFRCB');

var $form = $('#checkout-form');

$form.submit(function(event)) {
	$('#charge-error').addClass('hidden');
	$form.find('button').prop('disabled', true);
	Stripe.card.createToken({
	  name: $('#card-name').val(),
	  number: $('#card-number').val(),
	  exp_month: $('#card-expiry-month').val(),
	  exp_year: $('#card-expiry-year').val(),
	  cvc: $('#card-cvc').val()
	}, stripeResponseHandler);
	return false;
}

function stripeResponseHandler(status, response) {
	if (reponse.error) {
		$('#charge-error').removeClass('hidden');
		$('#charge-error').find('error').text(reponse.error.message);
		$form.find('button').prop('disabled', false);

	} else {
		//Get the Token
		var token = reponse.id;

		//Insert the token into the form
		$form.append($('<input type="hidden" name="stripeToken" />').val(token));
		
		//submit the form
		$form.get(0).submit();
	}
}

