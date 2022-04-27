<link rel="stylesheet" href="../assets/css/maicons.css">

<link rel="stylesheet" href="../assets/css/bootstrap.css">

<link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

<link rel="stylesheet" href="../assets/vendor/animate/animate.css">

<link rel="stylesheet" href="../assets/css/theme.css">
<div class="page-section">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make an Pickup</h1>

        <form class="main-form" action="{{ url('pickup') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mt-5 ">
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" name="firstName" class="form-control" placeholder="First Name">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <input type="text" name="lastName" class="form-control" placeholder="Last Name">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" name="email" class="form-control" placeholder="Email address..">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                    <input type="text" name="address" class="form-control" placeholder="Street Address">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                    <input type="date" name="pickupDate" class="form-control" placeholder="Pick a date to pickup the garbage">
                </div>
                <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                    <select name="truck" id="truck" class="custom-select">
                        <option >Select a Truck</option>
                        @foreach ($truck as $trucks)
                            <option value="{{ $trucks->name }}">{{ $trucks->name }} -- {{ $trucks->number }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <input type="text" name="phone" class="form-control" placeholder="Phone Number..">
                </div>
                <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                    <textarea name="message" id="message" class="form-control" rows="6" placeholder="Brief description of waste to be removed"></textarea>
                </div>
                <div style="padding:15px;">
                    <label for="">Upload a picture of the waste</label>
                    <input type="file" name="file" required>
                </div>
            </div>
            <div class="col-12 text-center mt-4 " >
                <button type="submit"  class="btn btn-primary ">Submit </button>

            </div>
        </form>
    </div>
</div> <!-- .page-section -->
