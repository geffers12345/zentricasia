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
        <nav class="col-sm-3 side" style="height: 700px !important;">
            <br>
            <center><img src="images/bg3.jpg" class="img-circle" alt="Cinque Terre" width="45%" height="125px">
                <h5 style="color:white"><b>{{ \Illuminate\Support\Facades\Auth::user()->name }}</b></h5>
                <h6 style="color:white"><i>Trainne</i></h6>
            </center>
            <br>
            <ul class="nav nav-pills nav-stacked">
                <li><a data-toggle="tab" href="#menu2"><span class="glyphicon glyphicon-education"></span> &nbsp; &nbsp; Trainings</a></li>
                <li><a data-toggle="tab" href="#menu3"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; &nbsp; Resources</a></li>
                <li><a data-toggle="tab" href="#menu4"><span class="glyphicon glyphicon-list-alt"></span> &nbsp; &nbsp; Training Schedules</a></li>
                <li><a data-toggle="tab" href="#menu5"><span class="glyphicon glyphicon-folder-open"></span> &nbsp; &nbsp; My Lessons</a></li>
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
                <div id="menu2" class="tab-pane fade in active">
                    <h1 class="text-primary borderBottom"><strong><span class="glyphicon glyphicon-education"></span> &nbsp;Trainings</strong></h1><br>
                    <div class="row">

                        <div class="clearfix"></div>

                        <div class="col-md-12 table-responsive tables">
                            <table class="table table-bordered" data-page-length="25" id="trainingTable">
                                <thead class="head">
                                <tr>
                                    <th>ID</th>
                                    <th>PICTURE</th>
                                    <th>TITLE</th>
                                    <th>DESCRIPTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($trainings as $training)
                                    <tr>
                                        <td>{{ $training->id }}</td>
                                        <td><img src="images/{{ $training->attachment }}" width="150px"/></td>
                                        <td>{{ $training->title }}</td>
                                        <td>{{ $training->description }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div id="menu3" class="tab-pane fade">
                    <h3></h3>
                    <h1 class="text-primary borderBottom"><strong><span class="glyphicon glyphicon-info-sign"></span> &nbsp;Resources</strong></h1><br>
                    <div class="row">

                        <div class="clearfix"></div>

                        <div class="col-md-12 table-responsive tables">
                            <table class="table table-bordered" id="resourcesTable" data-page-length="25">
                                <thead class="head">
                                <tr>
                                    <th>ID</th>
                                    <th>Document</th>
                                    <th>TITLE</th>
                                    <th>DESCRIPTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($resources as $resource)
                                    <tr>
                                        <td>{{ $resource->id }}</td>
                                        <td><a target="_blank" href="/documents/{{ $resource->attachment }}">{{ $resource->attachment }}</a></td>
                                        <td>{{ $resource->title }}</td>
                                        <td>{{ $resource->description }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div id="menu4" class="tab-pane fade">
                    <h1 class="text-primary borderBottom"><strong><span class="glyphicon glyphicon-picture"></span> &nbsp;Schedules</strong></h1><br>
                    <div class="row">

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
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div id="menu5" class="tab-pane fade">
                    <h1 class="text-primary borderBottom"><strong><span class="glyphicon glyphicon-picture"></span> &nbsp;Lessons</strong></h1><br>
                    <div class="row">

                        <div class="clearfix"></div>

                        <div class="col-md-12 table-responsive tables">
                            <table class="table table-bordered" data-page-length="25" id="scheduleTable">
                                <thead class="head">
                                <tr>
                                    <th>ID</th>
                                    <th>Trainor</th>
                                    <th>Topic</th>
                                    <th>Description</th>
                                    <th>Attachment</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($lessons as $lesson)
                                    <tr>
                                        <td>{{ $lesson->id }}</td>
                                        <td>{{ $lesson->name }}</td>
                                        <td>{{ $lesson->title }}</td>
                                        <td>{{ $lesson->description }}</td>
                                        <td><a target="_blank" href="/documents/{{ $lesson->attachment }}">{{ $lesson->attachment }}</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
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
                                    <input id="email" type="text" class="form-control" value="{{ \Illuminate\Support\Facades\Auth::user()->name }}" name="email" placeholder="Name" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="text-primary" for="usr">Email:</label><br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-tasks text-primary	"></i></span>
                                    <input id="email" type="text" class="form-control" value="{{ \Illuminate\Support\Facades\Auth::user()->email }}" name="email" placeholder="Position" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="text-primary" for="usr">Password:</label><br>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user text-primary	"></i></span>
                                    <input id="email" type="text" value="{{ \Illuminate\Support\Facades\Auth::user()->password }}" class="form-control" name="email" placeholder="Username" required="">
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
    $.noConflict();
    jQuery(document).ready(function($){
        $('#trainingTable').DataTable();
        $('#resourcesTable').DataTable();
        $('#scheduleTable').DataTable();
        $('#usersTable').DataTable();
        $('#messagesTable').DataTable();
    });
</script>