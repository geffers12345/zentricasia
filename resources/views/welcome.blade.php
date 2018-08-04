@include('layouts.header')
@if (session('alert'))
    <div id="snackbar">
        {{ session('alert') }}
    </div>
@endif
<div class="container-fluid row-bg">
    <div class="container">
        <div class="row slides1">
            <div class="col-sm-4">
                <div class="media">
                    <div class="media-body">
                        <p class="media-desc slides">
                            <span class="glyphicon glyphicon-home btn-lg"></span>
                            <b>Challenge for Professional Advancement.</b>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="media">
                    <div class="media-body">
                        <p class="media-desc slides">
                            <span class="glyphicon glyphicon-pencil btn-lg"></span>
                            <b>Recruit the best in the Field.</b>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="media">
                    <div class="media-body">
                        <p class="media-desc slides">
                            <span class="glyphicon glyphicon-camera btn-lg"></span>
                            <b>Remarkable corporate Events.</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h1 class="title"><strong>Zentric Power Asia</strong></h1>
            <h6 class="under_title">Who are they?</h6>
            <br>
            <p class="title-desc">Zentric Power Asia Consultancy Corp.
                was organized by a group of professionals who greatly
                believe in the value of shaping individuals for professional
                growth and development, efficiency improvements at workplace.
                Zentric Power Asia Consultancy Corp. envisions itself to be
                the preferred management consultancy that bring solutions to
                the ever-changing needs of your organizations and enable to help
                adapt to latest trend in the corporate world. We provide the most
                appropriate, solution-centered, and enjoyable learning moments for every
                valued partner. We bring individual to be a highly skilled individual
                they can be in their respective fields.
            </p>

        </div>
    </div>
</div>
<br><br>
<div class="container text-center slidesanim">
    <div class="col-md-4 ">
        <img src="images/chinkeetan-new.jpg" class="img-circle circle" alt="Cinque Terre" width="225" height="200"><br><br>
        <div class="panel panel-zentric ">
            <div class="panel-heading"><b>O U R  &nbsp;C O M P A N Y</b></div>
            <div class="panel-body text-left">
                We offer innovative strategies and solutions to
                achieve your company's objectives. Our management
                consulting team takes the time to understand your
                organization and strategy to develop long-term,
                collaborative relationships that help you address
                your complex business issues.
                <br><br>
                {{--<div class="text-right">--}}
                    {{--<button class="learn_more">LEARN MORE</button>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <img src="images/careers.png" class="img-circle circle" alt="Cinque Terre" width="225" height="200"><br><br>
        <div class="panel panel-zentric ">
            <div class="panel-heading"><b>C A R E E R S</b></div>
            <div class="panel-body text-left">
                We seek service-minded, and innovative individuals
                who can help us continue to offer our high standard
                of quality of service. We offer competitive compensation,
                excellent benefits, for contributing to the continued
                success of our organization.
                <br><br><br>
                {{--<div class="text-right">--}}
                    {{--<button class="learn_more">LEARN MORE</button>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <img src="images/contactus.jpg" class="img-circle circle" alt="Cinque Terre" width="225" height="200"><br><br>
        <div class="panel panel-zentric ">
            <div class="panel-heading"><b>C O N T A C T &nbsp; U S</b></div>
            <div class="panel-body text-left">
                If you would like any further information about our Management
                Consultancy Services, o would like to arrange an appointment with
                one of our consultans, or attend our training programs, We're available
                to answer all your inquiries.
                <br><br><br>
                {{--<div class="text-right">--}}
                    {{--<a href="/contact"><button class="learn_more">LEARN MORE</button></a>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
</div>

<br><br><br>

<div class="jumbotron">
    <div class="container">
        <h1 class="title text-primary"><strong>OUR SERVICES</strong></h1>
        <h6 class="under_title">We provide a wide range of Management Service specialization for your company</h6>
        <br><br>
        <div class="col-md-4 slidesanim">
            <div class="panel panel-primary panel-hover">
                <div class="panel-body text-left">
                    <h5 class="service_title">CORPORATE REGISTRATION (New Business)</h5>
                    {{--<h5 class="service-desc">Challenge for Professional advancements</h5>--}}
                </div>
            </div>
        </div>
        <div class="col-md-4 slidesanim">
            <div class="panel panel-primary ">
                <div class="panel-body text-left">
                    <h5 class="service_title">BUSINESS PERMIT AND LICENSE PROCESSING</h5>
                    {{--<h5 class="service-desc">Recruit the best in the Field</h5>--}}
                </div>
            </div>
        </div>
        <div class="col-md-4 slidesanim">
            <div class="panel panel-primary ">
                <div class="panel-body text-left">
                    <h5 class="service_title">TRANSFER OF SHARES OF STOCKS</h5>
                    {{--<h5 class="service-desc">Remarkable Corporate Events</h5>--}}
                </div>
            </div>
        </div>
        <div class="col-md-4 slidesanim">
            <div class="panel panel-primary ">
                <div class="panel-body text-left">
                    <h5 class="service_title">BOOKKEEPING AND FINANCIAL REPORTING</h5>
                    {{--<h5 class="service-desc">Protection of Company Assets</h5>--}}
                </div>
            </div>
        </div>
        <div class="col-md-4 slidesanim">
            <div class="panel panel-primary ">
                <div class="panel-body text-left">
                    <h5 class="service_title">CORPORATE BRANDING</h5>
                    {{--<h5 class="service-desc">Investor's Ease in Business Management</h5>--}}
                </div>
            </div>
        </div>
        <div class="col-md-4 slidesanim">
            <div class="panel panel-primary ">
                <div class="panel-body text-left">
                    <h5 class="service_title">SYSTEM AND AUDIT COMPLIANCE</h5>
                    {{--<h5 class="service-desc">Provides HR Strategic Solutions</h5>--}}
                </div>
            </div>
        </div>
    </div>
</div>

<br>

<div class="container container-bg">
    <div class="row">
        <div class="col-md-12">
            <h1 class="title3"><strong>TRAINING PROGRAMS</strong></h1>
            <h6 class="under_title3">Our Selection of Available Training Programs</h6>
        </div>
        @foreach($trainings as $training)
        <div data-desc="{{ $training->description }}" data-title="{{ $training->title }}" data-toggle="modal" data-target="#myModal" class="responsive slidesanim viewTrainingInfo">
            <div class="gallery">
                <a role="button">
                    <img src="images/{{ $training->attachment }}" alt="Forest" width="600" height="400">
                </a>
                <div class="desc">
                    <h5 class="training-title"><b>{{ $training->title }}</b></h5>
                </div>
            </div>
        </div>
        @endforeach
        <div class="clearfix"></div>
    </div>
</div>

<br><br>

<div class="container">
    <h1 class="text-primary text-left"><strong>MESSAGE FROM PRESIDENT</strong></h1>
    <br><br>

    <div class="row">
        <div class="col-md-6" >
            <div class="polaroid">
                <img src="images/bg3.jpg" class="img-thumbnail" alt="Norway" style="width:100%">

            </div>
        </div>

        <div class="col-md-6">
            <div class="row upcoming">
                @foreach($messages as $message)
                <div class="col-md-12 slidesanim" style="float:left;margin-left: 5%">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h3 class="modal-title text-primary">{{ $message->subject }}</h3>
                                <p>{{ $message->content }}</p>
                        </div>
                        <div class="modal-footer">
                            <div class="col-md-12">
                                <div class="col-md-4">
                                    <a href="/message">Show more</a>
                                </div>
                                <div class="col-md-8">
                                    <a>{{ $message->created_at }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </div>
</div>

<br><br><br>


<div class="container-fluid fluid-bg">
    <div class="row">

        <div class="col-md-12">
            <h1 class="titles"><strong>WHY CHOOSE US</strong></h1>
            <h6 class="under_titles">What makes us your best & ideal choice for your company </h6>
            <br>
            <div class="col-md-offset-2 col-md-3 slidesanim" >
                <h5 class="why">We're Experienced Professionals</h5>
                    <p class="description">
                        With Zentric Power Asia, you're not just hiring another
                        management consulting company, you're partnering with
                        experienced professionals who will not only meet, but exceed,
                        your expectations. We provide effective workplace education
                        that is grounded in years of successful application,
                        not opinion or preference.
                    </p>
            </div>

            <div class=" col-md-3 slidesanim">
                <h5 class="why">We Care about your Business</h1>
                    <p class="description " >
                        YES, we really do! At Zentric Power Asia we don't just getElementByIdto know
                        your business, we take it sincerely and genuinely want to help your company reach its potential.
                        We. personally invest ourselves in each and every project we work on.
                        Our programs will provide your business with a clear road map to increase productivity,
                        efficiently, overall communication and employee morale.
                    </p>
            </div>

            <div class=" col-md-3 slidesanim">
                <h5 class="why">We are Committed to Quality</h5>
                    <p class="description">
                        We don't settle for anything but hte best, and neither should
                        you when it comes to training. We've worked hard to find the bestways
                        to provide our clients with affordable Human Resources / Management
                        training programs and reasonable scheduling options without
                        the quality of our services.
                    </p>
            </div>

            <br><br><br>
            <div class="clearfix"></div>
            <br>
            <div class="col-md-4">
                <div class="border3"></div></div>
            <div class="col-md-4">
                <center><h1 class="title text-center"><strong>TESTIMONIALS</strong></h1>
                    <h6 class="under_title text-center">What our clients says about us</h6></center></div>
            <div class="col-md-4">
                <div class="border3"></div></div>


            <div id="myCarousels" class="carousel slide text-center " data-ride="carousel">

                <!-- Wrapper for slidess -->
                <div class="carousel-inner " role="listbox">
                    <div class="item active carTop" >
                        <center><img src="images/bg3.jpg" class="img-circle" alt="Cinque Terre" width="100" height="100"></center><br>
                        <span>Michael Roe, Vice President</span><br>
                        <h6><i>Vice President</i></h6>
                        <div class="border2"></div>
                        <p>"This company is the best. I am so happy with the result!"<br></p>
                    </div>
                    <div class="item carTop">
                        <center><img src="images/bg3.jpg" class="img-circle" alt="Cinque Terre" width="100" height="100"></center><br>
                        <span>Michael Roe, Vice President</span><br>
                        <h6><i>Vice President</i></h6>
                        <div class="border2"></div>
                        <p>"This company is the best. I am so happy with the result!"<br></p>
                    </div>
                    <div class="item carTop">
                        <center><img src="images/bg3.jpg" class="img-circle" alt="Cinque Terre" width="100" height="100"></center><br>
                        <span>Michael Roe, Vice President</span><br>
                        <h6><i>Vice President</i></h6>
                        <div class="border2"></div>
                        <p>"This company is the best. I am so happy with the result!"<br></p>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control previous" href="#myCarousels" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousels" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div><br><br>
</div>

<br>

{{--<div class="container">--}}
    {{--<h1 class="text-primary text-left"><strong>TRAININGS AND EVENTS</strong></h1>--}}
    {{--<h6 class="text-primary text-left">Our upcoming Training and Events</h6>--}}
    {{--<br><br>--}}

    {{--<div class="row">--}}
        {{--<div class="col-md-6" >--}}
            {{--<div class="polaroid">--}}
                {{--<img src="images/bg1.jpg" alt="Norway" style="width:100%">--}}
                {{--<div class="container-padding">--}}
                    {{--<h5 class="text-primary text-left"><b>How to COnvert HR into a Profit Center</b></h5>--}}
                    {{--<p class="text-left">Dhevi ganda Dhevi gandaDhevi gandaDhevi gandaDhevi gandaDhevi ganda</p>--}}
                    {{--<h6 class="text-left" style="text-transform:uppercase">--}}
                        {{--<span ><b>March 17, 2018<b></span> &nbsp; | &nbsp; <span><b>sogo hotel quezon city<b></span>--}}
                    {{--</h6>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

        {{--<div class="col-md-6">--}}
            {{--<div class="row upcoming">--}}
                {{--<h3 class="text-primary" style="margin-top: 0"><strong>UPCOMING TRAININGS AND EVENTS</strong></h3>--}}
                {{--<div class="img col-md-6 slidesanim" style="float:left;margin-left: 5%">--}}
                    {{--<img src="images/seat.jpg" alt="Paris" width="50%" height="100%" style="float:left">--}}
                    {{--<div style="float:left; padding:2%; width:40%; height:100%">--}}
                        {{--<h4 class="text-primary"><b>Event title</b></h4>--}}
                            {{--<h6>March 20, 2018</h6>--}}
                            {{--<h6>Manila Hotel</h6>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="img col-md-6 slidesanim" style="float:left;margin-left: 5%">--}}
                    {{--<img src="images/seat.jpg" alt="Paris" width="50%" height="100%" style="float:left">--}}
                    {{--<div style="float:left; padding:2%; width:40%; height:100%">--}}
                        {{--<h4 class="text-primary"><b>Event title</b></h4>--}}
                            {{--<h6>March 20, 2018</h6>--}}
                            {{--<h6>Manila Hotel</h6>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<center>--}}
                    {{--<button class="learn_more2">VIEW MORE EVENTS</button>--}}
                {{--</center>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="trainingTitle"></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-8">
                            <div id="myImg"></div>
                        </div>
                        <div class="col-md-4">
                            <p id="trainingDesc">

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
<script>
    $(document).ready(function(){
        myFunction();
    });

    $(document).on('click', '.viewTrainingInfo', function(){
        $("#myImg").text("");
        $('#trainingDesc').text("");
        $('#trainingTitle').text("");

        $(this).closest('.slidesanim').find("img").clone().appendTo("#myImg");
        $('#trainingDesc').append($(this).data('desc'));
        $('#trainingTitle').append($(this).data('title'));
    });

    function myFunction() {
        var x = document.getElementById("snackbar");
        x.className = "show";

        setTimeout(function(){
            $('#snackbar').hide('slow');
            x.className = x.className.replace("show", ""); }, 3000);
    }
</script>