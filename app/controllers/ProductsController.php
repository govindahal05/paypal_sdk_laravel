
<?php
// use Product;
// use Cart;
use Illuminate\Http\Request;

class ProductsController extends BaseController
{

    // public function __construct(Product $product) {
    //     $this->product = $product;
    // }
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function showProducts()
    {
        $products = Product::all();
        // dd($products);

        return View::make('index')->with("allProducts", $products);

    }

    public function addToCart()
    {
        /* $data = Input::get('quantity');
        dd($data);*/
        $product_id = \Input::get('product_id');
        $product_name = \Input::get('product_name');
        $quantity = \Input::get('quantity');
        $price = \Input::get('price');

        $total = $quantity * $price;
        // dd($total);
        Cart::create([
            'userid' => '2',
            'productid' => $product_id,
            'price' => $price,
            'quantity' => $quantity,
            'total' => $total,
            'status' => 'Unpaid',

        ]);

        Session::flash('message', "Product Added to Cart");
        return Redirect::back();

    }

    public function myCart()
    {

        $carts = Cart::all();
        // dd($products);
        // dd($carts);
        return View::make('cart')->with("allCarts", $carts);
    }
}

?>