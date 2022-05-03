<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab2 task2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <h1>Product</h1>
    <div>
    @if ($products->is_blocked != 1)
    <div style="font-style:italic;">
        404
    </div>
    @else
        <div>
            <table>
            <tr><th>id</th><th>Name</th><th>Is blocked</th><th>Code</th><th>description</th><th>Price</th><th>quantity</th><th>Registration date</th></tr>
                    <tr>
                    <td>{{$products->id}}</td>
                    <td>{{$products->name}}</td>
                    <td>{{$products->is_blocked}}</td>
                    <td>{{$products->code}}</td>
                    <td>{{$products->description}}</td>
                    <td>{{$products->price}}</td>
                    <td>{{$products->quantity}}</td>
                    <td>{{$products->created_at}}</td>
                    </tr>
            </table>     
        </div>
        <div>
            @if (count($products->addresses) === 0)
            <div style="font-style:italic;">
                This products has no addresses!
            </div>
            @else
            <h2> Type</h2>
            <table>
                <tr><th>id</th><th>Name</th><th>Intercome code</th><th>Categories id</th><th>Added at</th></tr>          
                @foreach ($products->addresses as $address)
                    <tr>
                    <td>{{$address->id}}</td>
                    <td>{{$address->name}}</td>
                    <td>{{$address->intercom_code}}</td>
                    <td>{{$address->product_id}}</td>
                    <td>{{$address->created_at}}</td>
                    </tr>
                @endforeach
            </table>
            @endif
        </div>
    @endif
    </div>
</body>

</html>
