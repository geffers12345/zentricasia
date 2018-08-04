@include ('layouts.header')
<div class="container">
    <h1 class="text-left title3"><b>OUR MEMORIES</b></h1>
    <h5 class="text-left title3">Treasures from the events and trainings.</h5>
    <br>
    <div class="row">
        @foreach($galleries as $gal)
        <div class="col-md-3 slidesanim">
            <div class="polaroid">
                <img src="images/{{ $gal->imagePath }}" height="200px" alt="Norway" style="width:100%">
                <div class="container-padding">
                    <p class="text-center">{{ $gal->title }}</p>
                </div>
            </div>
        </div>
            @endforeach
    </div>
</div>
@include ('layouts.footer')