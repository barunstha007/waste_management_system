
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
                    <th style="padding: 10px">First Name</th>
                    <th style="padding: 10px">Last Name</th>
                    <th style="padding: 10px">Email</th>
                    <th style="padding: 10px">Phone</th>
                    <th style="padding: 10px">Street Address</th>
                    <th style="padding: 10px">Message</th>
                    <th style="padding: 10px">Truck</th>
                    <th style="padding: 10px">Pickup Date</th>
                    <th style="padding: 10px">Status</th>
                    <th style="padding: 10px">Approve</th>
                    <th style="padding: 10px">Cancle</th>
                    <th style="padding: 10px">Send Mail</th>


                </tr>
                @foreach ($data as $appoint )

                @endforeach
                <tr align="center" style="background-color:skyblue">
                    <td>{{ $appoint->fname }}</td>
                    <td>{{ $appoint->lname }}</td>
                    <td>{{ $appoint->email }}</td>
                    <td>{{ $appoint->phone }}</td>
                    <td>{{ $appoint->street_address }}</td>
                    <td>{{ $appoint->message }}</td>
                    <td>{{ $appoint->truck }}</td>
                    <td>{{ $appoint->pickup_date }}</td>
                    <td>{{ $appoint->status }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ url('approved',$appoint->id) }}">Approved</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{ url('cancled',$appoint->id) }}">Cancled</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ url('emailview',$appoint->id) }}">Send Mail</a>
                    </td>
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
