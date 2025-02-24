<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Products</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        table { width: 60%; margin: 20px auto; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid black; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2>Anime-Themed Products</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Price (PHP)</th>
            <th>Category</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product['name'] }}</td>
                <td>{{ number_format($product['price'], 2) }}</td>
                <td>{{ $product['category'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
