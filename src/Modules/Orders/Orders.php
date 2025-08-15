<?php
namespace Engmoreeh\Ch2BackendStor\Modules\Orders;

class Orders {
    private $orderId;
    private $products;

    public function __construct($orderId) {
        $this->orderId = $orderId;
        $this->products = [];
    }

    public function addProduct($product) {
        $this->products[] = $product;
    }

    public function getOrderId() {
        return $this->orderId;
    }

    public function getProducts() {
        return $this->products;
    }

    
}

