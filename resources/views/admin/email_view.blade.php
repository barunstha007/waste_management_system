<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    <style type="text/css">
        label {
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



            <div class="container" style="padding-top: 100px; align:center">
                @if (session()->has('message'))
                    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show">
                        <div class="alert alert-success">

                            {{ session()->get('message') }}
                        </div>
                    </div>
                @endif
                <form action="{{ url('sendemail', $data->id) }}" method="POST">
                    @csrf
                    <div style="padding:15px;">
                        <label for="">Greeting</label>
                        <input type="text" name="greeting" style="color: black" required>
                    </div>

                    <div style="padding:15px;">
                        <label for="">Body</label>
                        <input type="text" name="trucknumber" style="color: black" required>
                    </div>


                    <div style="padding:15px;">
                        <label for="">Action Text</label>
                        <input type="text" name="actiontext" style="color: black" required>
                    </div>

                    <div style="padding:15px;">
                        <label for="">Action Url</label>
                        <input type="text" name="actionurl" style="color: black" required>
                    </div>

                    <div style="padding:15px;">
                        <label for="">End Part</label>
                        <input type="text" name="endpart" style="color: black" required>
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
