<h1>Product list</h1>
<table>
<thead>

<tr>
<th>Name</th>
<th>Description</th>
<th>Price</th>
</tr>
</thead>
<tbody>
@foreach($products as $product)
<tr>
<td>{{$product->name}}</td>
<td>{{$product->descriptionn}}</td>
<td>{{$product->price}}</td>
</tr>
@endforeach
</tbody>

<a href="products/create">Create</a>


</table>