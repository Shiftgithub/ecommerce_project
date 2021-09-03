<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .title {
            padding-top: 25px;
            font-size: 25px;
        }
    </style>
    <!-- Add Css Part-->
    @include('admin.css')
</head>

<body>
    <!-- Add Sidebar Part-->
    @include('admin.sidebar')

    <!-- Add Navbar Part-->
    @include('admin.navbar')
    <div class="container-fluid page-body-wrapper">

        <div class="container">

            <h1 class="title">Add Products</h1>
            <div class="container text-center">
                <br>
                @if(session()->has('message'))

                <div class="alert alert-success">
                   
                    <button type="button" class="close" data-dismiss="alert">X</button>
                    {{session()->get('message')}}
                </div>

                @endif
                <form action="{{('uploadproductinfo')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Product Titel</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control text-dark" name="productname" placeholder="Enter product title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Product Price</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control text-dark" name="price" placeholder="Enter product price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control text-dark" name="description" placeholder="Enter product description">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Quantity</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control text-dark" name="quantity" placeholder="Enter product quantity">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Product Image</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control" name="image" placeholder="Enter product quantity">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-success">Sign in</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>

    <!-- Script Part -->
    @include('admin.script')


</body>

</html>