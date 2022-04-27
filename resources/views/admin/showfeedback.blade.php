
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

      <div class="container-fluid page-body-wrapper">

        <div align="center" style="padding-top: 100px; ">
            <table>
                <tr style="background-color: black">
                    <th style="padding: 10px">Full Name</th>
                    <th style="padding: 10px">Email</th>
                    <th style="padding: 10px">Message</th>
                </tr>
                @foreach ($data as $feedback )

                @endforeach
                <tr align="center" style="background-color:black">
                    <td>{{ $feedback->name }}</td>
                    <td>{{ $feedback->email }}</td>
                    <td>{{ $feedback->message }}</td>

                </tr>
            </table>
        </div>

      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
