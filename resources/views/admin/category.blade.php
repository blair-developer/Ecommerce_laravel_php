<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css');
    <style type="text/css">
      .div_center{
        text-align: center;
        padding-top: 40px;
      }
      .h2_grid{
        font-size: 40px;
        padding-top: 40px;
      }
      .input_color{
        color: black;
      }
      .center{
        margin: auto;
        width: 50%;
        text-align: center;
        margin-top: 30px;
        border: 3px solid white;
      }
      .header{
        color: forestgreen;
        border: 3px solid white;
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
               <h2 class="h2_grid">add category</h2>
               <form action="{{url('/add_category')}}" method="post">
                @csrf
                  <input class="input_color" type="text" name="category" placeholder="Write_category">
                  <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
               </form>
             </div>
             <table class="center">
               <tr>
                 <td class="header">Category Name</td>
                 <td class="header">Action</td>
               </tr>
               @foreach($data as $data)
               <tr>
                 <td>{{$data->category_name}}</td>
                 <td>
                   <a onclick="return confirm('Are you sure to delete this')" class="btn btn-danger" href="{{url('delete_category',$data->id)}}">Delete</a>
                 </td>
                 <td></td>
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