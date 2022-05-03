<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab2 task1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <h1>Product</h1>

    <form action="/Products" id="allProsuctfilter" method="GET">
        <div class="form-control">
            <label class="form__label">FILTER:</label>
            <select name="price" selected={{$request->price}}>
                <option value="">----</option>
                <option value="desc">up</option>
                <option value="asc">down</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mb-2">Apply filter</button>
    </form>

    <div>
        @if (count($products) === 0)
        <div style="font-style:italic;">
            There are no products satisfying the specified parameters!
        </div>
        @else
        <table>
            <tr><th>id</th><th>Name</th><th>Desc</th><th>Is blocked</th><th>quanity</th><th>Price</th><th>Registration date</th></tr>          
            @foreach ($products as $product)
                <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->is_blocked}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->created_at}}</td>
                </tr>
            @endforeach
        </table>
        {{$products->links()}}
        @endif
     </div>
</body>

</html>
