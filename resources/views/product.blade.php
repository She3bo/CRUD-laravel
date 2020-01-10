@extends("template/app")
@section('title','Add Product')
@section('content')

    <div class="row justify-content-center  pt-3">
        <div class="card text-center" style='width:50%' >
            <div class="card-header">
                <h1>Products<h1>
            </div>
            <div class="card-body">
                <form action="/product" method= "post">
                    @csrf
                    <div class="form-group">
                        <label for="productname">Product Name</label>
                        <input type="text" name="p_name" class="form-control" id="productname" required>
                    </div>
                    <div class="form-group">
                        <label for="productprice">Product Price</label>
                        <input type="text" name="p_price" class="form-control" id="productprice" required>
                    </div>
                    <div class="form-group">
                        <label for="Productdescription">Product Description</label>
                        <textarea name="p_desc"class="form-control" id="Productdescription" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection