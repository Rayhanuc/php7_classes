<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<xmp>
		interface PaymentGeteway{
	function sendPayment($payment);
}

class PaymentProcessor{
	private $gateway;
	function __construct(PaymentGeteway $pg){
		$this->gateway = $pg;
	}

	function purchaseProduct($amount) {
		$this->gateway->sendPayment($amount);
	}
}


class PayPal implements PaymentGeteway{
	function sendPayment($payment){
		echo "{$payment} processed by paypal";
	}
}



class Stripe{
	function makePayment($amount, $currency=null){
		echo "{$amount} processed by stripe";
	}
}

class StripeAdapter implements PaymentGeteway{
	private $stripe;
	function __construct(Stripe $stripe){
		$this->stripe = $stripe;
	}


	function sendPayment($payment){
		$this->stripe->makePayment($payment);
	}
}

$paypal = new Paypal();
$stripe = new Stripe();
$sa = new StripeAdapter($stripe);
$pp = new PaymentProcessor($sa);
// $pp = new PaymentProcessor($paypal);
$pp->purchaseProduct(45);
	</xmp>

	<h3>Result: </h3>

	<?php 

/*interface PaymentGeteway{
	function sendPayment($payment);
}

class PaymentProcessor{
	private $gateway;
	function __construct(PaymentGeteway $pg){
		$this->gateway = $pg;
	}

	function purchaseProduct($amount){
		$this->gateway->sendPayment($amount);
	}
}

class PayPal implements PaymentGeteway{
	function sendPayment($payment){
		echo "{$payment} processed";
	}
}


class Stripe{
	function makePayment($amount, $currency){
		echo "{$amount} processed";
	}
}

class StripeAdapter implements PaymentGeteway{
	private $stripe;
	function __construct(Stripe $stripe){
		$this->stirpe = $stripe;
	}

	function sendPayment($payment){
		$this->stripe->makePayment($payment);
	}
}

$paypal = new Paypal();
$stripe = new Stripe();
$sa = new StripeAdapter($stripe);
$pp = new PaymentProcessor($sa);
$pp->purchaseProduct(45);
*/

// writing code
interface PaymentGeteway{
	function sendPayment($payment);
}

class PaymentProcessor{
	private $gateway;
	function __construct(PaymentGeteway $pg){
		$this->gateway = $pg;
	}

	function purchaseProduct($amount) {
		$this->gateway->sendPayment($amount);
	}
}


class PayPal implements PaymentGeteway{
	function sendPayment($payment){
		echo "{$payment} processed by paypal";
	}
}



class Stripe{
	function makePayment($amount, $currency=null){
		echo "{$amount} processed by stripe";
	}
}

class StripeAdapter implements PaymentGeteway{
	private $stripe;
	function __construct(Stripe $stripe){
		$this->stripe = $stripe;
	}


	function sendPayment($payment){
		$this->stripe->makePayment($payment);
	}
}

$paypal = new Paypal();
$stripe = new Stripe();
$sa = new StripeAdapter($stripe);
$pp = new PaymentProcessor($sa);
// $pp = new PaymentProcessor($paypal);
$pp->purchaseProduct(45);
?>


</body>
</html>






