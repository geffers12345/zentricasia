<!DOCTYPE html>
<html>
<head  lang="en">
    <title>Zentric Power Asia</title>
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="js/bootstrap-3.3.7/bootstrap-3.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/admin.css" rel="stylesheet" />
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap-3.3.7/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("mySidenav").style.background = "#111";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("mySidenav").style.background = "none";
        }
    </script>
    <script>
        $(document).ready(function(){
            $(window).scroll(function() {
                $(".slidesanim").each(function(){
                    var pos = $(this).offset().top;

                    var winTop = $(window).scrollTop();
                    if (pos < winTop + 600) {
                        $(this).addClass("slides");
                    }
                });
            });
        })
    </script>
</head>
<body>
@if (session('alert'))
    <div id="snackbar">
        {{ session('alert') }}
    </div>
@endif
<nav class="nabby  affixs">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" onclick="openNav()" style="border:1px solid white">
                <span class="menu">&#9776; </span>
            </button>

        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="hober dropdown">
                    <a class="navbar-brand"><img src="images/zpa.png" width="125px"/></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid" id="app">
    <div class="row">
        <nav class="col-sm-3 side">
            <br>
            <center><img src="images/bg3.jpg" class="img-circle" alt="Cinque Terre" width="45%" height="125px">
                <h5 style="color:white"><b>{{ \Illuminate\Support\Facades\Auth::user()->name }}</b></h5>
                <h6 style="color:white"><i>Administrator</i></h6>
            </center>
            <br>
            <ul class="nav nav-pills nav-stacked">
                <li  v-show="{{ \Illuminate\Support\Facades\Auth::user()->role_id == 1 }}"><a data-toggle="tab" href="#home">
                        <span class="glyphicon glyphicon-signal"></span> &nbsp; &nbsp;Dashboard</a></li>
                <li class="active"><a data-toggle="tab" href="#menu2"><span class="glyphicon glyphicon-education"></span> &nbsp; &nbsp; Trainings</a></li>
                <li><a data-toggle="tab" href="#menu3"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; &nbsp; Resources</a></li>
                <li><a data-toggle="tab" href="#menu4"><span class="glyphicon glyphicon-list-alt"></span> &nbsp; &nbsp; Training Schedules</a></li>
                <li v-show="{{ \Illuminate\Support\Facades\Auth::user()->role_id == 1 }}"><a data-toggle="tab" href="#menu5"><span class="glyphicon glyphicon-user"></span> &nbsp; &nbsp; Students</a></li>
                <li><a data-toggle="tab" href="#menu7"><span class="glyphicon glyphicon-envelope"></span> &nbsp; &nbsp; President's Messages</a></li>
                <li v-show="{{ \Illuminate\Support\Facades\Auth::user()->role_id == 1 }}"><a data-toggle="tab" href="#menu8"><span class="glyphicon glyphicon-user"></span> &nbsp; &nbsp; Trainors</a></li>
                <li><a data-toggle="tab" href="#menu9"><span class="glyphicon glyphicon-picture"></span> &nbsp; &nbsp; Gallery</a></li>
                <li><a data-toggle="tab" href="#menu10"><span class="glyphicon glyphicon-comment"></span> &nbsp; &nbsp; Inquiry</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-wrench"></span> &nbsp; &nbsp; Settings <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li ><a data-toggle="tab" href="#menu6" style="color: black"><span class="glyphicon glyphicon-user"></span> &nbsp; My Profile</a></li>
                        <li><a href="/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color: black"><span class="glyphicon glyphicon-log-in"></span> &nbsp; LogOut</a>
                            <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            <br><br><br><br><br>
        </nav>

        <div class="col-sm-9">
            <div class="tab-content">
                <div id="home" class="tab-pane fade">
                    <h1 class="text-primary borderBottom"><strong> <span class="glyphicon glyphicon-signal"></span> &nbsp;Dashboard</strong></h1><br>
                    <div class="row">
                        <div class="col-md-3 slides">
                            <div class="panel panel-messages panel-hover">
                                <div class="panel-body text-left">
                                    <h1><span class="glyphicon glyphicon-envelope"></span><strong style="float:right">{{ count($messages) }}</strong></h1>
                                        <h4>
                                            MESSAGES
                                        </h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 slides">
                            <div class="panel panel-students ">
                                <div class="panel-body text-left">
                                    <h1><span class="glyphicon glyphicon-user"></span><strong style="float:right"> {{ count($comment) }} </strong></h1>
                                        <h4>INQUIRIES</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 slides">
                            <div class="panel panel-training ">
                                <div class="panel-body text-left">
                                    <h1><span class="glyphicon glyphicon-education"></span><strong style="float:right"> {{ count($trainings) }} </strong></h1>
                                        <h4>TRAININGS</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 slides">
                            <div class="panel panel-services ">
                                <div class="panel-body text-left">
                                    <h1><span class="glyphicon glyphicon-info-sign"></span><strong style="float:right"> {{ count($resources) }} </strong></h1>
                                        <h4>RESOURCES</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="menu2" class="tab-pane fade in active">
                    <h1 class="text-primary borderBottom"><strong><span class="glyphicon glyphicon-education"></span> &nbsp;Trainings</strong></h1><br>
                    <div class="row">

                        <div class="col-md-3">
                            <button class="btn-primary btn-primarys" data-toggle="modal" data-target="#modal_addTraining">
                                <span class="glyphicon glyphicon-plus-sign"></span>
                                Add Training</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-md-12 table-responsive tables">
                            <table class="table table-bordered" data-page-length="25" id="trainingTable">
                                <thead class="head">
                                <tr>
                                    <th>ID</th>
                                    <th>PICTURE</th>
                                    <th>TITLE</th>
                                    <th>DESCRIPTION</th>
                                    <th>Trainor</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($trainings as $training)
                                    <tr>
                                        <td>{{ $training->id }}</td>
                                        <td><img src="images/{{ $training->attachment }}" width="150px"/></td>
                                        <td>{{ $training->title }}</td>
                                        <td>{{ $training->description }}</td>
                                        <td>{{ $training->name }}</td>
                                        <td>
                                            <a data-toggle="modal" data-target="#modal_editTraining">
                                                <span data-id="{{ $training->id }}" data-title="{{ $training->title }}"
                                                      data-description="{{ $training->description }}"
                                                      data-image="{{ $training->attachment }}" class="glyphicon glyphicon-pencil editTraining"></span>
                                            </a>
                                            <a>
                                                <span data-id="{{ $training->id }}" class="glyphicon glyphicon-remove deleteTraining"></span>
                                            </a>
                                            <a data-toggle="modal" data-target="#modal_assignTraining">
                                                <span data-id="{{ $training->id }}" data-title="{{ $training->title }}"
                                                      data-description="{{ $training->description }}" class="glyphicon glyphicon-hand-up assign"></span>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="modal_addTraining" role="dialog">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-primary">
                                        <span class="glyphicon glyphicon-education"></span> &nbsp;
                                        Add Training</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" action="/storeTraining" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Picture:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-picture text-primary	"></i></span>
                                                        <input id="file" type="file" class="form-control" name="file" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Title:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-tasks text-primary	"></i></span>
                                                        <input id="trainingTitle" type="text" class="form-control" name="trainingTitle" placeholder="Title" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Description:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil text-primary	"></i></span>
                                                        <input id="trainingDesc" type="text" class="form-control" name="trainingDesc" placeholder="Write something.." required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Save Training</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="modal_editTraining" role="dialog">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-primary">
                                        <span class="glyphicon glyphicon-education"></span> &nbsp;
                                        Update Training</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" action="/storeModifiedTraining" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Title:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-tasks text-primary"></i></span>
                                                        <input id="editTrainingTitle" type="text" class="form-control" name="editTrainingTitle" placeholder="Title" required="">
                                                        <input id="id" type="text" class="form-control" name="id">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Description:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil text-primary	"></i></span>
                                                        <input id="editTrainingDesc" type="text" class="form-control" name="editTrainingDesc" placeholder="Write something.." required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary">Picture:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="glyphicon glyphicon-picture text-primary	"></i>
                                                        </span>
                                                        <input id="editTrainingImage" type="text" class="form-control" name="editTrainingImage">
                                                        <input id="trainImage" type="file" class="form-control" name="file" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="modal_assignTraining" role="dialog">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-primary">
                                        <span class="glyphicon glyphicon-education"></span> &nbsp;
                                        Assign Training</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal">
                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Title:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-tasks text-primary"></i></span>
                                                        <input id="assignTrainingTitle" type="text" class="form-control" name="assignTrainingTitle" placeholder="Title" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Assign To: </label><br>
                                                    <select name="trainors" id="trainors" class="form-control">
                                                        <option value="">--SELECT TRAINORS--</option>
                                                        @foreach($trainors as $trainor)
                                                            <option value="{{ $trainor->id }}">{{ $trainor->name }}</option>>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="assignTraining" class="btn btn-primary">Save Assign</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="menu3" class="tab-pane fade">
                    <h3></h3>
                    <h1 class="text-primary borderBottom"><strong><span class="glyphicon glyphicon-info-sign"></span> &nbsp;Resources</strong></h1><br>
                    <div class="row">

                        <div class="col-md-3">
                            <button class="btn-primary btn-primarys" data-toggle="modal" data-target="#modal_addResources">
                                <span class="glyphicon glyphicon-plus-sign"></span>
                                Add Resources</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-md-12 table-responsive tables">
                            <table class="table table-bordered" id="resourcesTable" data-page-length="25">
                                <thead class="head">
                                <tr>
                                    <th>ID</th>
                                    <th>Document</th>
                                    <th>TITLE</th>
                                    <th>DESCRIPTION</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($resources as $resource)
                                    <tr>
                                        <td>{{ $resource->id }}</td>
                                        <td><a target="_blank" href="/documents/{{ $resource->attachment }}">{{ $resource->attachment }}</a></td>
                                        <td>{{ $resource->title }}</td>
                                        <td>{{ $resource->description }}</td>
                                        <td>
                                            <a data-toggle="modal" data-target="#modal_editResources">
                                                <span data-id="{{ $resource->id }}" data-title="{{ $resource->title }}"
                                                      data-description="{{ $resource->description }}" class="glyphicon glyphicon-pencil editResources"></span>
                                            </a>
                                            <a>
                                                <span data-id="{{ $resource->id }}" class="glyphicon glyphicon-remove deleteResources"></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="modal_addResources" role="dialog">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-primary">
                                        <span class="glyphicon glyphicon-info-sign"></span> &nbsp;
                                        Add Resources</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" action="/storeResources" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Document:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-picture text-primary	"></i></span>
                                                        <input id="resourcesAttach" type="file" class="form-control" name="resourcesAttach" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Title:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-tasks text-primary	"></i></span>
                                                        <input id="resourcesTitle" type="text" class="form-control" name="resourcesTitle" placeholder="Title" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Description:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil text-primary	"></i></span>
                                                        <input id="resourcesDesc" type="text" class="form-control" name="resourcesDesc" placeholder="Write something.." required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="modal_editResources" role="dialog">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-primary">
                                        <span class="glyphicon glyphicon-info-sign"></span> &nbsp;
                                        Edit Resources</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal">
                                        <div class="form-group">

                                            {{--<div class="col-md-12">--}}
                                                {{--<div class="form-group">--}}
                                                    {{--<label class="text-primary" for="usr">Document:</label><br>--}}
                                                    {{--<div class="input-group">--}}
                                                        {{--<span class="input-group-addon"><i class="glyphicon glyphicon-picture text-primary	"></i></span>--}}
                                                        {{--<input id="editResourcesAttach" type="file" class="form-control" name="editResourcesAttach" required="">--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Title:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-tasks text-primary	"></i></span>
                                                        <input id="editResourcesTitle" type="text" class="form-control" name="editResourcesTitle" placeholder="Title" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Description:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil text-primary	"></i></span>
                                                        <input id="editResourcesDesc" type="text" class="form-control" name="editResourcesDesc" placeholder="Write something.." required="">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="saveChangesResources" class="btn btn-primary">UPDATE</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div id="menu4" class="tab-pane fade">
                    <h1 class="text-primary borderBottom"><strong><span class="glyphicon glyphicon-picture"></span> &nbsp;Schedules</strong></h1><br>
                    <div class="row">

                        <div class="col-md-3">
                            <button class="btn-primary btn-primarys" data-toggle="modal" data-target="#modal_addGallery">
                                <span class="glyphicon glyphicon-plus-sign"></span>
                                Add Schedule</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-md-12 table-responsive tables">
                            <table class="table table-bordered" data-page-length="25" id="scheduleTable">
                                <thead class="head">
                                <tr>
                                    <th>ID</th>
                                    <th>Training</th>
                                    <th>Time</th>
                                    <th>Venue</th>
                                    <th>Speaker</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($schedules as $schedule)
                                    <tr>
                                        <td>{{ $schedule->id }}</td>
                                        <td>{{ $schedule->title }}</td>
                                        <td>{{ $schedule->time }}</td>
                                        <td>{{ $schedule->venue }}</td>
                                        <td>{{ $schedule->speaker }}</td>
                                        <td><a data-toggle="modal" data-target="#modal_editGallery">
                                                <span data-id="{{ $schedule->id }}" data-time="{{ $schedule->time }}"
                                                      data-venue="{{ $schedule->venue }}" data-speaker="{{ $schedule->speaker }}"
                                                      class="glyphicon glyphicon-pencil editSchedule"></span>
                                            </a>
                                            <a>
                                                <span data-id="{{ $schedule->id }}" class="glyphicon glyphicon-remove deleteSchedule"></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="modal_addGallery" role="dialog">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-primary">
                                        <span class="glyphicon glyphicon-info-sign"></span> &nbsp;
                                        Add Schedule</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal">
                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Select Training</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-education text-primary	"></i></span>
                                                        <select name="trainingid" id="trainingid" class="form-control">
                                                            <option value="">--SELECT TRAINING--</option>
                                                            @foreach($trainings as $training)
                                                                <option value="{{ $training->id }}">{{ $training->title }}</option>>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Time:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt text-primary	"></i></span>
                                                        <input id="trainingDate" type="date" class="form-control" name="trainingDate" placeholder="" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Venue:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker text-primary	"></i></span>
                                                        <input id="trainingVenue" type="text" class="form-control" name="trainingVenue" placeholder="Venue" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Speaker:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-bullhorn text-primary	"></i></span>
                                                        <input id="trainingSpeaker" type="text" class="form-control" name="trainingSpeaker" placeholder="Speaker" required="">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button id="saveSchedule" type="button" class="btn btn-primary">SUBMIT</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="modal_editGallery" role="dialog">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-primary">
                                        <span class="glyphicon glyphicon-picture"></span> &nbsp;
                                        Edit Schedule</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal">
                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Select Training</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-education text-primary	"></i></span>
                                                        <select name="edittrainingid" id="edittrainingid" class="form-control">
                                                            <option value="">--SELECT TRAINING--</option>
                                                            @foreach($trainings as $training)
                                                                <option value="{{ $training->id }}">{{ $training->title }}</option>>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Time:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt text-primary	"></i></span>
                                                        <input id="editTrainingDate" type="date" class="form-control" name="editTrainingDate" placeholder="" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Venue:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker text-primary	"></i></span>
                                                        <input id="editTrainingVenue" type="text" class="form-control" name="editTrainingVenue" placeholder="Venue" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Speaker:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-bullhorn text-primary	"></i></span>
                                                        <input id="editTrainingSpeaker" type="text" class="form-control" name="editTrainingSpeaker" placeholder="Speaker" required="">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="saveChangesSchedule" class="btn btn-primary">UPDATE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="menu5" class="tab-pane fade">
                    <h1 class="text-primary borderBottom"><strong><span class="glyphicon glyphicon-user"></span> &nbsp;Students</strong></h1><br>
                    <div class="row">

                        <div class="col-md-12 table-responsive tables">
                            <table class="table table-bordered" data-page-length="25" id="usersTable">
                                <thead class="head">
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>Status</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if($user->is_active == 1)
                                                {{ "Active" }}
                                            @else
                                                {{ "Inactive" }}
                                            @endif
                                        </td>
                                        <td>
                                            <a>
                                                <span data-id="{{ $user->id }}" class="glyphicon glyphicon-remove deleteUser"></span>
                                            </a>
                                            <a data-toggle="modal">
                                                <span data-id="{{ $user->id }}"
                                                      class="glyphicon glyphicon-ok editStudent"></span>
                                            </a>
                                            <a data-toggle="modal" data-target="#modal_assignStudent">
                                                <span data-id="{{ $user->id }}" data-name="{{ $user->name }}"
                                                      class="glyphicon glyphicon-hand-up assignStudent"></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="modal_assignStudent" role="dialog">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-primary">
                                        <span class="glyphicon glyphicon-education"></span> &nbsp;
                                        Enroll Student</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal">
                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Student Name:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-tasks text-primary"></i></span>
                                                        <input id="assignStudentName" type="text" class="form-control" name="assignStudentName" placeholder="Title" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Enroll To: </label><br>
                                                    <select name="trainors2" id="trainors2" class="form-control">
                                                        <option value="">--SELECT TRAINORS--</option>
                                                        @foreach($trainors as $trainor)
                                                            <option value="{{ $trainor->id }}">{{ $trainor->name }}</option>>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="assignStudent" class="btn btn-primary">Save Assign</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div id="menu6" class="tab-pane fade">
                    <h1 class="text-primary borderBottom"><strong><span class="glyphicon glyphicon-user"></span> &nbsp;My Account</strong></h1><br>
                    <div class="row">
                        <div class="col-md-offset-3 col-md-6">

                            <div class="form-group">
                                <label class="text-primary" for="usr">Name:</label><br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user text-primary	"></i></span>
                                    <input type="text" class="form-control" value="{{ \Illuminate\Support\Facades\Auth::user()->name }}" name="email" placeholder="Name" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="text-primary" for="usr">Email:</label><br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-tasks text-primary	"></i></span>
                                    <input type="text" class="form-control" value="{{ \Illuminate\Support\Facades\Auth::user()->email }}" name="email" placeholder="Position" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="text-primary" for="usr">Password:</label><br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user text-primary	"></i></span>
                                    <input type="text" value="{{ \Illuminate\Support\Facades\Auth::user()->password }}" class="form-control" name="email" placeholder="Username" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <center>
                                    <button type="button" class="btn-primary" style="border: none; padding: 2%;border-radius: 3px">SAVE CHANGES</button>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="menu7" class="tab-pane fade">
                    <h1 class="text-primary borderBottom"><strong><span class="glyphicon glyphicon-envelope"></span> &nbsp;President's Messages</strong></h1><br>
                    <div class="row">

                        <div class="col-md-3">
                            <button class="btn-primary btn-primarys" data-toggle="modal" data-target="#modal_addMessage">
                                <span class="glyphicon glyphicon-plus-sign"></span>
                                Add Message</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-md-12 table-responsive tables">
                            <table class="table table-bordered" data-page-length="25" id="messagesTable">
                                <thead class="head">
                                <tr>
                                    <th>ID</th>
                                    <th>Subject</th>
                                    <th>Content</th>
                                    <th>Date Created</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($messages as $message)
                                    <tr>
                                        <td>{{ $message->id }}</td>
                                        <td>{{ $message->subject }}</td>
                                        <td>{{ $message->content }}</td>
                                        <td>{{ $message->created_at }}</td>
                                        <td><a data-toggle="modal" data-target="#modal_editMessages">
                                                <span data-id="{{ $message->id }}" data-subject="{{ $message->subject }}"
                                                      data-content="{{ $message->content }}"
                                                      class="glyphicon glyphicon-pencil editMessage"></span>
                                            </a>
                                            <a>
                                                <span data-id="{{ $message->id }}" class="glyphicon glyphicon-remove deleteMessage"></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="modal_addMessage" role="dialog">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-primary">
                                        <span class="glyphicon glyphicon-envelope"></span> &nbsp;
                                        Add Message</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal">
                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Subject:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-star text-primary	"></i></span>
                                                        <input id="messageSubject" type="text" class="form-control" name="messageSubject" placeholder="Subject" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Content:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt text-primary	"></i></span>
                                                        <input id="messageContent" type="text" class="form-control" name="messageContent" placeholder="Content" required="">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button id="saveMessage" type="button" class="btn btn-primary">SUBMIT</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="modal_editMessages" role="dialog">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-primary">
                                        <span class="glyphicon glyphicon-picture"></span> &nbsp;
                                        Edit Schedule</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal">
                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Subject:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-star text-primary	"></i></span>
                                                        <input id="editMessageSubject" type="text" class="form-control" name="editMessageSubject" placeholder="Subject" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Content:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt text-primary	"></i></span>
                                                        <input id="editMessageContent" type="text" class="form-control" name="editMessageContent" placeholder="Content" required="">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="saveChangesMessage" class="btn btn-primary">UPDATE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="menu8" class="tab-pane fade">
                    <h1 class="text-primary borderBottom"><strong><span class="glyphicon glyphicon-user"></span> &nbsp;Manage Trainors</strong></h1><br>
                    <div class="row">

                        <div class="col-md-3">
                            <button class="btn-primary btn-primarys" data-toggle="modal" data-target="#modal_addTrainor">
                                <span class="glyphicon glyphicon-plus-sign"></span>
                                Add Trainor</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-md-12 table-responsive tables">
                            <table class="table table-bordered" data-page-length="25" id="trainorTable">
                                <thead class="head">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($trainors as $trainor)
                                    <tr>
                                        <td>{{ $trainor->id }}</td>
                                        <td>{{ $trainor->name }}</td>
                                        <td>{{ $trainor->email }}</td>
                                        <td>{{ $trainor->password }}</td>
                                        <td><a data-toggle="modal" data-target="#modal_editTrainor">
                                                <span data-id="{{ $trainor->id }}" data-name="{{ $trainor->name }}" data-email="{{ $trainor->email }}"
                                                      data-password="{{ $trainor->password }}"
                                                      class="glyphicon glyphicon-pencil editTrainor"></span>
                                            </a>
                                            <a>
                                                <span data-id="{{ $trainor->id }}" class="glyphicon glyphicon-remove deleteTrainor"></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="modal_addTrainor" role="dialog">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-primary">
                                        <span class="glyphicon glyphicon-user"></span> &nbsp;
                                        Add Trainor</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal">
                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Name:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-star text-primary	"></i></span>
                                                        <input id="trainorName" type="text" class="form-control" name="trainorName" placeholder="Trainor Name" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Email:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt text-primary	"></i></span>
                                                        <input id="trainorEmail" type="text" class="form-control" name="trainorEmail" placeholder="Email" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Password:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt text-primary	"></i></span>
                                                        <input id="trainorPassword" type="password" class="form-control" name="trainorPassword" placeholder="Password" required="">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button id="saveTrainor" type="button" class="btn btn-primary">SUBMIT</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="modal_editTrainor" role="dialog">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-primary">
                                        <span class="glyphicon glyphicon-picture"></span> &nbsp;
                                        Edit Trainor</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal">
                                        <div class="form-group">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Name:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-star text-primary	"></i></span>
                                                        <input id="editTrainorName" type="text" class="form-control" name="editTrainorName" placeholder="Name" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Email:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt text-primary	"></i></span>
                                                        <input id="editTrainorEmail" type="text" class="form-control" name="editTrainorEmail" placeholder="Email" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Password:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt text-primary	"></i></span>
                                                        <input id="editTrainorPassword" type="password" class="form-control" name="editTrainorPassword" placeholder="Password" required="">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="saveChangesMessage" class="btn btn-primary">UPDATE</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="menu9" class="tab-pane fade">
                    <h1 class="text-primary borderBottom"><strong><span class="glyphicon glyphicon-user"></span> &nbsp;Manage Gallery</strong></h1><br>
                    <div class="row">

                        <div class="col-md-3">
                            <button class="btn-primary btn-primarys" data-toggle="modal" data-target="#modal_addPhoto">
                                <span class="glyphicon glyphicon-plus-sign"></span>
                                Add Photo</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-md-12 table-responsive tables">
                            <table class="table table-bordered" data-page-length="25" id="galleryTable">
                                <thead class="head">
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($gallery as $gal)
                                    <tr>
                                        <td>{{ $gal->id }}</td>
                                        <td><img src="images/{{ $gal->imagePath }}" width="150px"/></td>
                                        <td>{{ $gal->title }}</td>
                                        <td>
                                            <a>
                                                <span data-id="{{ $gal->id }}" class="glyphicon glyphicon-remove deleteImage"></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="modal_addPhoto" role="dialog">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title text-primary">
                                        <span class="glyphicon glyphicon-picture"></span> &nbsp;
                                        Add Photo</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="form-horizontal" action="/storeGallery" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Picture:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-picture text-primary	"></i></span>
                                                        <input type="file" class="form-control" name="file" required="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="text-primary" for="usr">Title:</label><br>
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="glyphicon glyphicon-tasks text-primary	"></i></span>
                                                        <input id="photoTitle" type="text" class="form-control" name="photoTitle" placeholder="Title" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Save Photo</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menu10" class="tab-pane fade">
                    <h1 class="text-primary borderBottom"><strong><span class="glyphicon glyphicon-user"></span> &nbsp
                             Inquiries</strong></h1><br>
                    <div class="row">
                        <div class="clearfix"></div>

                        <div class="col-md-12 table-responsive tables">
                            <table class="table table-bordered" data-page-length="25" id="commentsTable">
                                <thead class="head">
                                <tr>
                                    <th>ID</th>
                                    <th>Email</th>
                                    <th>Comment</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comment as $c)
                                    <tr>
                                        <td>{{ $c->id }}</td>
                                        <td>{{ $c->email  }}</td>
                                        <td>{{ $c->comment }}</td>
                                        <td>{{ $c->created_at }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="background:black;color:white;padding:2px">
    <h6 class="text-center">Powered by <strong style="color:#FF1822">RealifiedITServices</strong> 2018 All Rights Reserved.</h6>
</div>
</body>
</html>
<script src="js/sweetalert2.min.js"></script>
<link rel="stylesheet" href="css/sweetalert2.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
<script>
    var app = new Vue({
        el: '#app',
        data: {

        },
        created: {

        }
    });

    var id = 0;

    $.noConflict();
    jQuery(document).ready(function($){
        $('#trainingTable').DataTable();
        $('#resourcesTable').DataTable();
        $('#scheduleTable').DataTable();
        $('#usersTable').DataTable();
        $('#messagesTable').DataTable();
        $('#trainorTable').DataTable();
        $('#galleryTable').DataTable();
        $('#commentsTable').DataTable();

        $('#trainImage').hide();
        $('#id').hide();

        myFunction();
    });

    $('.editTraining').click(function (e) {
        e.preventDefault();
        id = $(this).data('id');

        $('#editTrainingTitle').val($(this).data('title'));
        $('#editTrainingDesc').val($(this).data('description'));
        $('#editTrainingImage').val($(this).data('image'));
        $('#id').val(id);
    });

    $('#editTrainingImage').click(function() {
        $('#trainImage').trigger('click');
    });

    $('#trainImage').change(function() {
        $('#editTrainingImage').val($('#trainImage').val().split('\\')[$('#trainImage').val().split('\\').length - 1]);
    });

    $('.assign').click(function (e) {
        e.preventDefault();
        id = $(this).data('id');

        $('#assignTrainingTitle').val($(this).data('title'));
    });

    $('.editResources').click(function (e) {
        e.preventDefault();
        id = $(this).data('id');

        $('#editResourcesTitle').val($(this).data('title'));
        $('#editResourcesDesc').val($(this).data('description'));
    });

    $('.editTrainor').click(function (e) {
        e.preventDefault();
        id = $(this).data('id');

        $('#editTrainorName').val($(this).data('name'));
        $('#editTrainorEmail').val($(this).data('email'));
        $('#editTrainorPassword').val($(this).data('password'));
    });

    $(document).on('click', '#saveChangesTraining', function (e) {
        e.preventDefault();

        $.ajax({
            url: "{{ url("api/editTraining") }}",
            type: "POST",
            data: {
                id: id,
                title: $('#editTrainingTitle').val(),
                description: $('#editTrainingDesc').val()
                    }, success: function () {
                        swal('Updated!', 'Updated Successfully', 'success');
                        setTimeout(function () {
                        window.location.reload();
                    }, 3000);
                }
        });
    });

    $(document).on('click', '.deleteTraining', function (e){
        e.preventDefault();

        id = $(this).data("id");

        swal({
            title: 'Warning!',
            text: "Are you sure you want to delete this training?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#f01327',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirm!'
        }).then(function(isConfirm) {
            if (isConfirm.value == true) {
                $.ajax({
                    url: "/api/deleteTraining",
                    type: "POST",
                    data: {
                        id: id
                    }, success: function (data) {
                        swal('Deleted!', 'Training has been deleted successfully', 'success');
                        setTimeout(function () {
                            window.location.reload();
                        }, 3000);
                    }
                })
            }
        }, function() {
            alert('dismiss');
        }).catch(function(reason){
            //
        });
    });

    $(document).on('click', '#saveChangesResources', function (e) {
        e.preventDefault();

        $.ajax({
            url: "{{ url("api/editResources") }}",
            type: "POST",
            data: {
                id: id,
                title: $('#editResourcesTitle').val(),
                description: $('#editResourcesDesc').val()
            }, success: function () {
                swal('Updated!', 'Updated Successfully', 'success');
                setTimeout(function () {
                    window.location.reload();
                }, 3000);
            }
        });
    });

    $(document).on('click', '.deleteResources', function (e){
        e.preventDefault();

        id = $(this).data("id");

        swal({
            title: 'Warning!',
            text: "Are you sure you want to delete this resource?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#f01327',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirm!'
        }).then(function(isConfirm) {
            if (isConfirm.value == true) {
                $.ajax({
                    url: "/api/deleteResource",
                    type: "POST",
                    data: {
                        id: id
                    }, success: function () {
                        swal('Deleted!', 'Resource has been deleted successfully', 'success');
                        setTimeout(function () {
                            window.location.reload();
                        }, 3000);
                    }
                })
            }
        }, function() {
            alert('dismiss');
        }).catch(function(reason){
            //
        });
    });

    $(document).on('click', '#saveSchedule', function (e) {
        e.preventDefault();

        $.ajax({
            url: "{{ url("api/saveSchedule") }}",
            type: "POST",
            data: {
                id: $('#trainingid').val(),
                time: $('#trainingDate').val(),
                venue: $('#trainingVenue').val(),
                speaker: $('#trainingSpeaker').val()
            }, success: function () {
                swal('Saved!', 'Saved Successfully', 'success');
                setTimeout(function () {
                    window.location.reload();
                }, 3000);
            }
        });
    });

    $('.editSchedule').click(function (e) {
        e.preventDefault();
        id = $(this).data('id');

        $('#editTrainingDate').val($(this).data('time'));
        $('#editTrainingVenue').val($(this).data('venue'));
        $('#editTrainingSpeaker').val($(this).data('speaker'));
    });

    $(document).on('click', '#saveChangesSchedule', function (e) {
        e.preventDefault();

        $.ajax({
            url: "{{ url("api/editSchedule") }}",
            type: "POST",
            data: {
                id: id,
                tid: $('#edittrainingid').val(),
                time: $('#editTrainingDate').val(),
                venue: $('#editTrainingVenue').val(),
                speaker: $('#editTrainingSpeaker').val()
            }, success: function () {
                swal('Updated!', 'Updated Successfully', 'success');
                setTimeout(function () {
                    window.location.reload();
                }, 3000);
            }
        });
    });

    $(document).on('click', '.deleteSchedule', function (e){
        e.preventDefault();

        id = $(this).data("id");

        swal({
            title: 'Warning!',
            text: "Are you sure you want to delete this schedule?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#f01327',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirm!'
        }).then(function(isConfirm) {
            if (isConfirm.value == true) {
                $.ajax({
                    url: "/api/deleteSchedule",
                    type: "POST",
                    data: {
                        id: id
                    }, success: function () {
                        swal('Deleted!', 'Schedule has been deleted successfully', 'success');
                        setTimeout(function () {
                            window.location.reload();
                        }, 3000);
                    }
                })
            }
        }, function() {
            alert('dismiss');
        }).catch(function(reason){
            //
        });
    });

    $(document).on('click', '#saveMessage', function (e) {
        e.preventDefault();

        $.ajax({
            url: "{{ url("api/saveMessage") }}",
            type: "POST",
            data: {
                subject: $('#messageSubject').val(),
                content: $('#messageContent').val()
            }, success: function () {
                swal('Saved!', 'Saved Successfully', 'success');
                setTimeout(function () {
                    window.location.reload();
                }, 3000);
            }
        });
    });

    $('.editMessage').click(function (e) {
        e.preventDefault();
        id = $(this).data('id');

        $('#editMessageSubject').val($(this).data('subject'));
        $('#editMessageContent').val($(this).data('content'));
    });

    $(document).on('click', '#saveChangesMessage', function (e) {
        e.preventDefault();

        $.ajax({
            url: "{{ url("api/editMessage") }}",
            type: "POST",
            data: {
                id: id,
                subject: $('#editMessageSubject').val(),
                content: $('#editMessageContent').val()
            }, success: function () {
                swal('Updated!', 'Updated Successfully', 'success');
                setTimeout(function () {
                    window.location.reload();
                }, 3000);
            }
        });
    });

    $(document).on('click', '.deleteMessage', function (e){
        e.preventDefault();

        id = $(this).data("id");

        swal({
            title: 'Warning!',
            text: "Are you sure you want to delete this message?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#f01327',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirm!'
        }).then(function(isConfirm) {
            if (isConfirm.value == true) {
                $.ajax({
                    url: "/api/deleteMessage",
                    type: "POST",
                    data: {
                        id: id
                    }, success: function () {
                        swal('Deleted!', 'Message has been deleted successfully', 'success');
                        setTimeout(function () {
                            window.location.reload();
                        }, 3000);
                    }
                })
            }
        }, function() {
            alert('dismiss');
        }).catch(function(reason){
            //
        });
    });

    function myFunction() {
        var x = document.getElementById("snackbar");
        x.className = "show";

        setTimeout(function(){
            $('#snackbar').hide('slow');
            x.className = x.className.replace("show", ""); }, 3000);
    }

    $(document).on('click', '#assignTraining', function(e){
        e.preventDefault();

        $.ajax({
            url: "{{ url("api/assignTraining") }}",
            type: "POST",
            data: {
                id: id,
                trainor_id: $('#trainors').val()
            }, success: function () {
                swal('Assigned Succesfully!', 'Assigned Successfully', 'success');
                setTimeout(function () {
                    window.location.reload();
                }, 3000);
            }
        });
    });

    $(document).on('click', '#saveTrainor', function(e){
        e.preventDefault();

        $.ajax({
            url: "{{ url("api/saveTrainor") }}",
            type: "POST",
            data: {
                name: $('#trainorName').val(),
                email: $('#trainorEmail').val(),
                password: $('#trainorPassword').val()
            }, success: function () {
                swal('Saved Succesfully!', 'Saved Successfully', 'success');
                setTimeout(function () {
                    window.location.reload();
                }, 3000);
            }
        });
    });

    $(document).on('click', '#saveChangesMessage', function (e) {
        e.preventDefault();

        $.ajax({
            url: "{{ url("api/editTrainor") }}",
            type: "POST",
            data: {
                id: id,
                name: $('#editTrainorName').val(),
                email: $('#editTrainorEmail').val(),
                password: $('#editTrainorPassword').val()
            }, success: function () {
                swal('Updated!', 'Updated Successfully', 'success');
                setTimeout(function () {
                    window.location.reload();
                }, 3000);
            }
        });
    });

    $(document).on('click', '.deleteTrainor', function (e){
        e.preventDefault();

        id = $(this).data("id");

        swal({
            title: 'Warning!',
            text: "Are you sure you want to delete this trainor?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#f01327',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirm!'
        }).then(function(isConfirm) {
            if (isConfirm.value == true) {
                $.ajax({
                    url: "/api/deleteTrainor",
                    type: "POST",
                    data: {
                        id: id
                    }, success: function () {
                        swal('Deleted!', 'Trainor has been deleted successfully', 'success');
                        setTimeout(function () {
                            window.location.reload();
                        }, 3000);
                    }
                })
            }
        }, function() {
            alert('dismiss');
        }).catch(function(reason){
            //
        });
    });

    $(document).on('click', '.deleteUser', function (e){
        e.preventDefault();

        id = $(this).data("id");

        swal({
            title: 'Warning!',
            text: "Are you sure you want to delete this student?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#f01327',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirm!'
        }).then(function(isConfirm) {
            if (isConfirm.value == true) {
                $.ajax({
                    url: "/api/deleteUser",
                    type: "POST",
                    data: {
                        id: id
                    }, success: function () {
                        swal('Deleted!', 'Student has been deleted successfully', 'success');
                        setTimeout(function () {
                            window.location.reload();
                        }, 3000);
                    }
                })
            }
        }, function() {
            alert('dismiss');
        }).catch(function(reason){
            //
        });
    });

    $(document).on('click', '.editStudent', function (e){
        e.preventDefault();

        id = $(this).data("id");

        swal({
            title: 'Warning!',
            text: "Are you sure you want to activate this student?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#f01327',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirm!'
        }).then(function(isConfirm) {
            if (isConfirm.value == true) {
                $.ajax({
                    url: "/api/activateUser",
                    type: "POST",
                    data: {
                        id: id
                    }, success: function () {
                        swal('Activated!', 'Student has been activated successfully', 'success');
                        setTimeout(function () {
                            window.location.reload();
                        }, 3000);
                    }
                })
            }
        }, function() {
            alert('dismiss');
        }).catch(function(reason){
            //
        });
    });

    $('.assignStudent').click(function (e) {
        e.preventDefault();
        id = $(this).data('id');

        $('#assignStudentName').val($(this).data('name'));
    });

    $(document).on('click', '#assignStudent', function(e){
        e.preventDefault();

        $.ajax({
            url: "{{ url("api/assignStudent") }}",
            type: "POST",
            data: {
                id: id,
                trainor_id: $('#trainors2').val()
            }, success: function () {
                swal('Enrolled Succesfully!', 'Enrolled Successfully', 'success');
                setTimeout(function () {
                    window.location.reload();
                }, 3000);
            }
        });
    });

    $(document).on('click', '.deleteImage', function (e){
        e.preventDefault();

        id = $(this).data("id");

        swal({
            title: 'Warning!',
            text: "Are you sure you want to delete this photo?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#f01327',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirm!'
        }).then(function(isConfirm) {
            if (isConfirm.value == true) {
                $.ajax({
                    url: "/api/deletePhoto",
                    type: "POST",
                    data: {
                        id: id
                    }, success: function () {
                        swal('Deleted!', 'Photo has been deleted successfully', 'success');
                        setTimeout(function () {
                            window.location.reload();
                        }, 3000);
                    }
                })
            }
        }, function() {
            alert('dismiss');
        }).catch(function(reason){
            //
        });
    });
</script>