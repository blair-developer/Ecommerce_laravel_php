<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css');
    <style type="text/css">
    	.div_center{
    		text-align: center;
    	}
    	.font{
    		font-size: 40px;
    		padding-bottom: 40px;
    	}
    	.text_color{
    		color: black;
    		padding-bottom: 20px;
    	}
    	label{
    		display: inline-block;
    		width: 200px;
    	}
    	.design{
    		padding-bottom: 15px;

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
      	 	<div class="div_center">
      	 		<h1 class="font">Add product</h1>
      	 <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
      	 	@csrf
      	 	<div class="design">
      	 		<label>Product Title</label>
      	 		<input class="text_color" type="text" name="title" placeholder="Write a title" required>
      	 	</div>
      	 	<div class="design">
      	 		<label>Product Description</label>
      	 		<input class="text_color" type="text" name="description" placeholder="Write a description" required>
      	 	</div>
      	 	<div class="design">
      	 		<label>Product Price</label>
      	 		<input class="text_color" type="number" name="price" placeholder="Write a price" required>
      	 	</div>
      	 	<div class="design">
      	 		<label>Discount Price</label>
      	 		<input class="text_color" type="number" name="dis_price" placeholder="Write a discount" required>
      	 	</div>
      	 	<div class="design">
      	 		<label>Product Quantity</label>
      	 		<input class="text_color" type="number" min="0" name="quantity" placeholder="Write Quantity" required>
      	 	</div>
      	 	
      	 	<div class="design">
      	 		<label>Product Category</label>
      	 		<select class="text_color" name="category" required>
      	 			<option value="" selected="">Add a category here</option>
      	 			@foreach($category as $category)
      	 			<option>{{$category->category_name}}</option>
      	 			@endforeach

      	 		</select>
      	 	</div>
      	 	<div class="design">
      	 		<label>Product Image</label>
      	 		<input type="file" name="image" required>
      	 	</div>
      	 	<div class="design">
      	 		<input type="submit" value="Add Product" name="submit" class="btn btn-primary" required>
      	 	</div>
      	 	</form>
      	 	</div>
      	 </div>
      </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script');
  </body>
</html>