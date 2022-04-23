
<!DOCTYPE html>
<html lang="en">
  <head>
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
            <div align="center" style="padding-top:100px; ">
                <table>
                    <tr style="background-color: black">
                        <th style="padding: 10px">Name</th>
                        <th style="padding: 10px">Number</th>
                        <th style="padding: 10px">Capacity</th>
                        <th style="padding: 10px">Driver Number</th>
                        <th style="padding: 10px">Truck Image</th>
                        <th style="padding: 10px">Delete</th>
                        <th style="padding: 10px">Update</th>

                    </tr>
                    @foreach ($data as $truck )

                    <tr align="center" style="background-color:skyblue">
                        <td>{{ $truck->name }}</td>
                        <td>{{ $truck->number }}</td>
                        <td>{{ $truck->capacity }}</td>
                        <td>{{ $truck->dnumber }}</td>
                        <td><img height="100" width="100" src="truckimage/{{ $truck->image}}" alt=""></td >
                        <td> <a onclick="return confirm('are you sure you want to delete this')" class="btn btn-danger" href="{{ url('deletetruck',$truck->id) }}">Delete</a></td>
                        <td> <a class="btn btn-primary" href="{{ url('updatetruck') }}">Update</a></td>

                    </tr>
                    @endforeach

                </table>
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
