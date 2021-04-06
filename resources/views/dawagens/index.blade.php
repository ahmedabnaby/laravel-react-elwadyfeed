<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ELWady-Feed</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container mt-2">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ELWady-Feed Products</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('dawagens.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>S.No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td><img src="{{ Storage::url($product->image) }}" height="75" width="75" alt="" /></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>
                <form action="{{ route('dawagens.destroy',$product->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('dawagens.edit',$product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
</body>
</html>