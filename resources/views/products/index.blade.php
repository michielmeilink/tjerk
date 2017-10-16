
<h1>Overzicht</h1>

@foreach ($products as $product)
  <h2>Product</h2>
<li>{{ $product->name }}</li>
<li>{{ $product->price }}</li>
<li>{{ $product->description }}</li>
<li>{{ $product->status }}</li>
  @endforeach
