<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Waste Management System</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

 @include('layouts.header')
    <div align="center" style="padding: 70px;">
        <table>

            <tr style="background-color: black;">
                <th style="padding: 10px; font-size:20px; color:white;">Name</th>
                <th style="padding: 10px; font-size:20px; color:white;">Pickup Date</th>
                <th style="padding: 10px; font-size:20px; color:white;">Street Address</th>
                <th style="padding: 10px; font-size:20px; color:white;">Truck</th>
                <th style="padding: 10px; font-size:20px; color:white;">Message</th>
                <th style="padding: 10px; font-size:20px; color:white;">Status</th>
                <th style="padding: 10px; font-size:20px; color:white;">Cancel Appointment</th>

            </tr>
            @foreach ($appoint as $appoints )

            <tr style="background-color: black;" align="center">
                <td style="padding: 10px;  color:white;">{{ $appoints->fname }}</td>
                <td style="padding: 10px;  color:white;">{{ $appoints->pickup_date }}</td>
                <td style="padding: 10px;  color:white;">{{ $appoints->street_address }}</td>
                <td style="padding: 10px;  color:white;">{{ $appoints->truck }}</td>
                <td style="padding: 10px;  color:white;">{{ $appoints->message }}</td>
                <td style="padding: 10px;  color:white;">{{ $appoints->status }}</td>
                <td><a  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')" href="{{ url('cancel_appoint',$appoints->id) }}">Cancel</a></td>

            </tr>
            @endforeach

        </table>
    </div>



  <script src="../assets/js/jquery-3.5.1.min.js"></script>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

  <script src="../assets/vendor/wow/wow.min.js"></script>

  <script src="../assets/js/theme.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>


</body>
</html>
