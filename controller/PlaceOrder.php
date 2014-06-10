<?php
	require_once('../model/OrderModel.php');
	require_once('../model/OrderDetailModel.php');
	$ord = new Order();
	$ordetail = new OrderDetail();
	
	$ord->cutomer_id=1;
	$ord->payment_id=1;
	$ord->shipper_id=1;
	$ord->tax_order=20;
	$t = new DateTime();
	$ord->time_stap=$t->getTimestamp();
	$ord->transaction_status="orderd";
	$ord->payment_date=null;
	$ord->total;
	
	$ordetail->product_id=16;
	$ordetail->price=76;
	$ordetail->quantity=1;
	$ordetail->discount=10;
	$ordetail->ship_date=null;
	
	$ord->total = ($ordetail->price*$ordetail->quantity) - $ordetail->discount;
	
	$ord->addOrder();
	$ordetail->order_id = $ord->order_id;
	$ordetail->addOrderDetail();
	
?>
