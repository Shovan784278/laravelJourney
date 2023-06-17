<!-- products.blade.php -->

@extends('Layout.app')

@section('content')
<body>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card">
           <div class="card-body">
              <h1 class="text-center">Products</h1>
              <div class="table-responsive">
                 <table class="table table-striped table-bordered custom-table">
                    <thead class="thead-light">
                       <tr>
                          <th>Title</th>
                          <th>Price</th>
                          <th>Stock</th>
                          <th>Discount</th>
                          <th>Image</th>
                       </tr>
                    </thead>
                    <tbody>
                       @foreach ($products as $product)
                       <tr>
                          <td>{{ $product->title }}</td>
                          <td>{{ $product->price }}</td>
                          <td>{{ $product->stock }}</td>
                          <td>{{ $product->discount }}</td>
                          <td>{{ $product->image }}</td>
                       </tr>
                       @endforeach
                    </tbody>
                 </table>
              </div>
           </div>
        </div>
     </div>
    
</body>

@endsection
