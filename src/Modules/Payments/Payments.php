<?php

namespace Engmoreeh\Ch2BackendStor\Modules\Payments;

interface PaymentInterface
{
    public function processPayment(): string;
}

class Payments implements PaymentInterface
{
    private $amount;
    private $paymentMethod;

    public function __construct($amount, $paymentMethod)
    {
        $this->amount = $amount;
        $this->paymentMethod = $paymentMethod;
    }

    public function processPayment(): string
    {
        return "Processing payment of $" . $this->amount . " using " . $this->paymentMethod;
    }
}
