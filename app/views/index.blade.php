<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<h1 class="titl">Products</h1>
<a href="mycart"><button>My Cart</button></a>
	<table border="1" width="600">
		<thead>
			<tr>
				<th>ID</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Quantity</th>
			</tr>
		</thead>>
	    <tbody>
	    	@foreach($allProducts as $products)
	    	    {{ Form::open (array('url' =>'addtocart','method' => 'post')) }}

	        <tr>
	        	<td>{{ $products->id }} {{ Form::hidden('product_id', $products->id) }}</td>

	            <td>{{ $products->product_name }} {{ Form::hidden('product_name', $products->product_name) }}</td>
	            <td>{{ $products->price }}  {{ Form::hidden('price', $products->price) }}</td>
	            <td>{{ Form::number('quantity','1') }}</td>
				<td>{{ Form::submit('Add TO cart') }}</td>

	        </tr>
	    @endforeach

		{{Form::close()}}
	    </tbody>
	</table>

	  @if (Session::has('message'))
         <div class="regalert">{{ Session::get('message') }}</div>
        @endif

</body>
</html>
