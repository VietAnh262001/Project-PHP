<?php
namespace App\Helper;

class CartHelper
{
	public $items = [];
	public $total_quantity = 0;
	public $total_price = 0;
	public $total_service = 0;
	public $total_cart = 0;
	public $total_room =0;


	public function __construct()
	{
		$this->items = session('cart') ? session('cart') : [];
		$this->total_price = $this->get_total_price();
		$this->total_quantity = $this->get_total_quantity();
		$this->total_service = $this->get_total_price_service();
		$this->total_cart = $this->get_total_cart();
		$this->total_room = $this->get_total_room();
	}

	public function add($room, $quantity = 1)
	{

		$item = [
			'room_id' => $room->room_id,
			'name' => $room->name,
			'price' => $room->price,
			'image' => $room->image,
			'startdate' => $room->startdate,
			'enddate' => $room->enddate,
			'services' => []
		];


		if (!isset($this->items[$room->room_id])) {
			$this->items[$room->room_id] = $item;
		}
		
		session(['cart' => $this->items]);
		
	}

	public function add_service($service,$room_id, $quantity = 1){
		// dd($this->items);
		$item  = [
			'id' => $service->id,
			'name' => $service->name,
			'price' => $service->price,
			'image' => $service->image,
			'quantity' => $quantity,
			'room_id' => $room_id
		];

		if (isset($this->items[$room_id])) {
			if (isset($this->items[$room_id]['services'][$service->id])) {
				$this->items[$room_id]['services'][$service->id]['quantity'] +=1;
			}else{
				$this->items[$room_id]['services'][$service->id] = $item;
			}
		}
		
		session(['cart' => $this->items]);
	}

	public function removecartroom($id)
	{
		if(isset($this->items[$id])){
			unset($this->items[$id]);
		}
		session(['cart' => $this->items]);
	}

	public function removecartservice($room_id,$id)
	{
		if(isset($this->items[$room_id]['services'][$id])){
			unset($this->items[$room_id]['services'][$id]);
			session(['cart' => $this->items]);
		}
		
	}

	public function updatecartservice($id,$quantity = 1,$room_id)
	{
		if (isset($this->items[$room_id]['services'][$id])) {
			$this->items[$room_id]['services'][$id]['quantity'] = $quantity;
			session(['cart' => $this->items]);
		}
			
		
	}

	public function clearcartservice()
	{
		session(['cart' => '']);
	}

	private function get_total_price(){
		$t=0;
		foreach ($this->items as $priceroom) {
			$t += $priceroom['price'];
			foreach ($priceroom['services'] as $priceservice) {
				$t += $priceservice['price'] * $priceservice['quantity'] ;
			}
		}
		return $t;

	}
	private function get_total_room(){
		$t=0;
		foreach ($this->items as $priceroom) {
			$t += $priceroom['price'];
		}
		return $t;

	}
	private function get_total_price_service(){
		$t=0;
		foreach ($this->items as $priceroom) {
			foreach ($priceroom['services'] as $priceservice) {
				$t += $priceservice['price'] *$priceservice['quantity'] ;
			}
		}
		return $t;

	}

	private function get_total_quantity(){
		$t = 0;
		foreach ($this->items as $quantityroom) {
			foreach ($quantityroom['services'] as $quantity) {
				$t += $quantity['quantity'];
			}
		}
		return $t;
	}
	private function get_total_cart(){
		$t = 0;
		foreach ($this->items as $quantityroom) {
			$t += 1;
		}
		return $t;
	}
	public function get_price_service($room_id){
		$t=0;
		if (isset($this->items[$room_id]['services'])){


			foreach ($this->items[$room_id]['services'] as $priceservice) {
				$t += $priceservice['price'] * $priceservice['quantity'] ;
			}
		}
		return $t;

	}
	public function get_price_room($room_id){
		$t=0;
		if (isset($this->items[$room_id]['items'])){
			foreach ($this->items[$room_id]['items'] as $priceroom) {
			$t += $priceroom['price'];
			}
		  
		}
		return $t;

	}
} 


 ?>