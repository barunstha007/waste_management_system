
<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
   <base href="/public">
    <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
        <!-- partial:partials/_navbar.html -->
       @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            @if(session()->has('message'))
            <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
                <div  class="alert alert-success" >

                    {{ session()->get('message') }}
                </div>
            </div>

            @endif

         <div class="container " align="center" style="padding: 100px">
            <form action="{{ url('edittruck',$data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding:15px">
                    <label for="">Truck Name   </label>
                    <input style="color:black;"  type="text" name="name" value="{{ $data->name }}">
                </div>
                <div style="padding:15px">
                    <label for="">Truck Number   </label>
                    <input style="color:black;" type="text" name="number" value="{{ $data->number }}">
                </div>
                <div style="padding:15px">
                    <label for="">Truck Capacity  </label>
                    <input style="color:black;" type="text" name="capacity" value="{{ $data->capacity }}">
                </div>
                <div style="padding:15px">
                    <label for="">Driver Number  </label>
                    <input style="color:black;" type="text" name="dnumber" value="{{ $data->dnumber }}">
                </div>
                <div style="padding:15px">
                    <label for="">Old Truck Image   </label>
                    <img height="150" width="150" src="truckimage/{{ $data->image }}" alt="">
                </div>
                <div style="padding: 15px;">
                    <label for="">Change Image</label>
                    <input type="file" name="file">
                </div>
                <div style="padding: 15px;">
                    <input type="submit" class="btn btn-primary">
                </div>
            </form>
         </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
