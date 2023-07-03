<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .product-image {
            max-width: 100px;
        }
    </style>
</head>
<body>
    <div>
        {{-- <h1>Products {{ $showText }}</h1> --}}
        <h1>Products</h1>

      

        <!-- Display the products -->
        <table>
            <tr>
                <th>Title</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Discount</th>
                <th>Image</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->title }}</td>
                    <td>${{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->discount }}</td>
                    <td><img src="{{ $product->image }}" alt="{{ $product->title }}" class="product-image"></td>
                </tr>
            @endforeach
        </table>

        <!-- Pagination links -->
        {{-- {{ $products->links('vendor.pagination.tailwind',['showText' => $showText]) }} --}}
        {{ $products->links() }}
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Add your JavaScript scripts or CDN links here -->
</body>
</html>
