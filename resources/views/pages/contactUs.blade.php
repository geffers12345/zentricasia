@include('layouts.header')
<div class="container">
    <h1 class="text-success"><b>SEND US A MESSAGE</b></h1>
    <h5 class="text-success">Please completely fill up our contact form.</h5>
    <br><br>
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <div class="row">
                <div class="form slides">
                    <form class="form-horizontal ">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="text-success" for="usr">Full Name:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user text-success	"></i></span>
                                        <input id="email" type="text" class="form-control" name="email" placeholder="Name" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="usr" class="text-success">Email:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope text-success"></i></span>
                                        <input id="email" type="email" class="form-control" name="email" placeholder="Email" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="usr" class="text-success">Phone Number:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone text-success"></i></span>
                                        <input id="email" type="number" class="form-control" name="email" placeholder="Phone Number" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="usr" class="text-success">Subject:</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil text-success"></i></span>
                                        <input id="email" type="text" class="form-control" name="email" placeholder="Subject" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="comment" class="text-success">Comment:</label>
                                    <textarea class="form-control" rows="5" id="comment" required=""></textarea>
                                </div>
                            </div>

                            <div class="col-md-offset-10 col-md-2">
                                <div class="form-group">
                                    <button class="button btn-success" rows="5" id="comment">
                                        <span class="glyphicon glyphicon-send"></span> &nbsp;&nbsp;SEND</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')