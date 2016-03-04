<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<h1 class="titl">My Cart</h1>
	<table border="1" width="600">
		<thead>
			<tr>
				<td>Product Id</td>
				<td>Price</td>
				<td>Quantity</td>
				<td>Total</td>
				<td>Status</td>
			</tr>
		</thead>
	    <tbody>
	     @foreach($allCarts as $carts)
	     <tr>
		{{ Form::open (array('url' =>'pay')) }}

	         {{ Form::hidden('id', $carts->id) }}

	        	<td>{{ $carts->productid }} {{ Form::hidden('product_id', $carts->productid) }}</td>

	            <td>{{ $carts->price }} {{ Form::hidden('price', $carts->price) }}</td>
	            <td>{{ $carts->quantity }}  {{ Form::hidden('quantity', $carts->quantity) }}</td>

	            <td>{{ $carts->total }}  {{ Form::hidden('total', $carts->total) }}</td>
	            <td>{{ $carts->status }}  {{ Form::hidden('status', $carts->status) }}</td>


				<td>{{ Form::submit('CheckOut') }}</td>

	        </tr>
		{{Form::close()}}
	    @endforeach
	    	<tr>

	    	</tr>
	    </tbody>

	</table>



</body>
</html>
