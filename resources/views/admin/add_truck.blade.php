
<!DOCTYPE html>
<html lang="en">
  <head>
      <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px;
        }
      </style>
   @include('admin.css')
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



        <div class="container"  style="padding-top: 100px; align:center">
            @if(session()->has('message'))
            <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
                <div  class="alert alert-success" >

                    {{ session()->get('message') }}
                </div>
            </div>

            @endif
            <form action="{{ url('upload_truck') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding:15px;">
                    <label for="">Truck Name</label>
                    <input type="text" name="name" style="color: black" placeholder="Write the Truck Name" required>
                </div>

                <div style="padding:15px;">
                    <label for="">Truck Number</label>
                    <input type="text" name="trucknumber" style="color: black" placeholder="Write the Truck Number" required>
                </div>

                <div style="padding:15px;">
                    <label for="">Truck Capacity</label>
                    <input type="text" name="capacity" style="color: black" placeholder="Write Capacity of the truck" required>
                </div>

                <div style="padding:15px;">
                    <label for="">Driver's Number</label>
                    <input type="text" name="drivernumber" style="color: black" placeholder="Write the Drivers'number" required>
                </div>

                <div style="padding:15px;">
                    <label for="">Truck Image</label>
                    <input type="file" name="file" required>
                </div>

                <div style="padding:15px;">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>
        </div>

      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
   <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
