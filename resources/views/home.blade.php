@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color: black"><span class="glyphicon glyphicon-log-in"></span> &nbsp; LogOut</a>
    <form id="logout-form" action="/logout" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        document.getElementById('logout-form').submit();
    });
</script>
@endsection
