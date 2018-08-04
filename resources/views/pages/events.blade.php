@include ('layouts.header')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <center>
                <h1 class="text-primary"><b>TRAINING SCHEDULES</b></h1>
                <h5 class="text-primary">We provide a wide range of Management Service Specialization for your company.</h5>
            </center>
        </div>

        @foreach($schedules as $schedule)
        <div class=" col-md-6 slides">
            <div class="img" style="float:left;">
                <img src="images/images.jpg" alt="Paris" width="50%" height="150px" style="float:left">
                <div style="float:left; padding:2%; width:40%; height:100%">
                    <h5 class="text-primary"><b>{{ $schedule->title }}</b></h5>
                        <h6>Date: {{ $schedule->time }}</h6>
                        <h6>Venue: {{ $schedule->venue }}</h6>
                        <h6>Speaker: {{ $schedule->speaker }}</</h6>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@include ('layouts.footer')