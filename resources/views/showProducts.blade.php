@extends("template/app")
@section('title','Products')
@section('content')
    
    <div class="row justify-content-center pt-3 ">
        <div class="card text-center" style='width:70%'>
        <div class="card-header">
            <h1>All products</h1>
        </div>
        @if(session()->has('success'))
            <div class="alert alert-success">
            {{session()->get('success')}}
            </div>
        @endif
        <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Price</th>
                <th scope="col">Product Description</th>
                <th scope="col">Control</th>
                <th><a href="/product"><i class="fas fa-plus"></i></a></th>
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
                <td><a href="/delete?id={{$product->id}}"><i class="fas fa-trash-alt mr-2"></i></a>
                    <a href="/edit?id={{$product->id}}"><i class="fas fa-edit"></i></a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
    </div>
    </div>
</div>
</div>
@endsection