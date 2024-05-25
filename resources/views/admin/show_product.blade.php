<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css');
    <style type="text/css">
    	.center{
    		margin: auto;
    		width: 50%;
    		border: 2px solid white;
    		text-align: center;
    		margin-top: 40px;
    	}
    	.size{
    		text-align: center;
    		font-size: 40px;
    		padding-top: 20px;
    	}
    	.img_size{
    		width: 100px;
    		height: 100px;
    	}
    	.th_color{
    		background-color: blue;
    	}
    	.th_design{
    		padding: 30px;
    	}
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar');
      <!-- partial -->
      @include('admin.header');
        <!-- partial -->
      <div class="main-panel">
      	<div class="content-wrapper">
           @if(session()->has('message'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
               {{session()->get('message')}}
            </div>
            @endif
      		<h2 class="size">List of products</h2>
      		<table class="center">
      			<tr class="th_color">
      				<th class="th_design">Product Title</th>
      				<th class="th_design">Description</th>
      				<th class="th_design">Quantity</th>
      				<th class="th_design">Category</th>
      				<th class="th_design">Price</th>
      				<th class="th_design">Discount Price</th>
      				<th class="th_design">Product Image</th>
      				<th class="th_design">Action</th>
      				<th class="th_design">Action</th>
      				
      			</tr>
      			@foreach($product as $product);
      			<tr>
      				<td>{{$product->title}}</td>
      				<td>{{$product->description}}</td>
      				<td>{{$product->quantity}}</td>
      				<td>{{$product->category}}</td>
      				<td>{{$product->price}}</td>
      				<td>{{$product->discount_price}}</td>
      				<td>
      					<img class="imag_size" src="/product/{{$product->image}}">
      				</td>
      				<td><a class="btn btn-danger" onclick="return confirm('Are you sure to Delete this')" href="{{url('delete_product',$product->id)}}">Delete</td>
      				<td><a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</td>
      			</tr>
      			@endforeach
      		</table>
      	</div>
      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script');
  </body>
</html>