<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Products</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="    https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center pt-3 text-center">
            <table class="table" style='width:50%'>
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Product Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $x=1 ?>
                    @foreach($products as $product)
                    <tr>
                    <th scope="row"><?=$x++?></th>
                    <td>{{$product->productName}}</td>
                    <td>{{$product->productPrice}}</td>
                    <td>{{$product->productDescription}}</td>
                    <td><a href="/product"><i class="fas fa-plus"></i></a></td>
                    <td><a href="/delete?id={{$product->id}}"><i class="fas fa-trash-alt"></i></a></td>
                    <td><a href="/edit?id={{$product->id}}"><i class="fas fa-edit"></i></a></td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            <!-- <div class="card text-center" style='width:50%'>
                <div class="card-header">
                    <h1>All Products</h1>
                </div>
                <div class="card body">
                    <ul class="list-group">
                        @foreach($products as $product)
                        <li class="list-group-item text-muted">
                              {{$product->productName}}
                        </li>
                        <li class="list-group-item text-muted">
                              {{$product->productPrice}}
                        </li>
                        <li class="list-group-item text-muted">
                              {{$product->productDescription}}
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div> -->
        </div>
    </div>
</body>
</html>