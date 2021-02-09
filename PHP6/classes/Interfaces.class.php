<?php

class Interfaces{

}

class Paypal{
    public function payNow(){}
}

class Visa{
    public function payNow(){}
}

class Cash{
    public function payNow(){}
}

class BuyProduct{
    public function pay($paymentType){

    }
}

//type decalration object
$paymentType = new Cash();
$buyProduct = new BuyProduct();
$buyProduct->pay($paymentType);