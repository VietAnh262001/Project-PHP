<h2>{{$name}}</h2>
<p>
	<h3>Bạn đã đặt hàng thành công </h3>
</p>
<h4>Thông tin đơn hàng của bạn</h4>
<h4>Mã đơn hàng : {{$booking}}</h4>
<h4>Ngày đặt hàng : {{$date}}</h4>
<h4>Chi tiết đơn hàng</h4>

                    <table border="1" cellpadding="10" cellspacing="0" width="500">
                        <thead>
                            <tr>
                                <th>Rooms</th>
                                <th>Price</th>
                                <th>Start time</th>
                                <th>End time</th>
                                <th>Service</th>
                                <th>Total</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $cart_room)
                            <tr>
                            	<td>{{$cart_room['name']}}</td>
                                <td>
                                    {{'$'.' '. number_format($cart_room['price'])}}
                                </td>
                                

                            <td>{{$cart_room['startdate']}}</td>
                            <td>{{$cart_room['enddate']}}</td>
                                <td class="shoping_cart_total">
                                    {{'$'.' '. number_format($cart->get_price_service($cart_room['room_id'])).'.00'}}
                                </td>
                                <td class="shoping_cart_total">
                                    <?php 
                                        $total = number_format($cart_room['price']) + number_format($cart->get_price_service($cart_room['room_id']));
                                        echo '$'.' '. number_format($total).'.00'
                                        ?>
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
