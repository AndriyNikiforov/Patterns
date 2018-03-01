<?php

class PayPal
{
    public function __construct()
    {
    }

    public function sendPaymant($amount)
    {
        echo "Paying via paypal ".$amount;
    }
}

interface paymentAdapter
{
    public function pay($amount);
}

class PaypalAdapter implements paymentAdapter
{
    private $payPal;

    public function __construct(PayPal $payPal)
    {
        $this->payPal = $payPal;
    }

    public function pay($amount)
    {
        $this->payPal->sendPaymant($amount);
    }
}

$payPal = new PaypalAdapter(new PayPal());
$payPal->pay('300');