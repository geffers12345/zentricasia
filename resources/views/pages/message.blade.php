@include ('layouts.header')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <center>
                <h1 class="text-primary"><b>MESSAGE FROM PRESIDENT</b></h1>
            </center>
        </div>
        @foreach($messages as $message)
        <div data-message="{{ $message->content }}" data-title="{{ $message->subject }}" data-toggle="modal" data-target="#myModal" class=" col-md-6 slides viewInfo">
            <div class="img" style="float:left;">
                <div style="float:left; padding:2%; width:40%; height:100%">
                    <p class="text-primary"><b>{{ $message->subject }}</b></p>
                    <p>{{ $message->created_at}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

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
                        <div class="col-md-12">
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

@include ('layouts.footer')
<script>
    $(document).on('click', '.viewInfo', function(){
        $('#trainingDesc').text("");
        $('#trainingTitle').text("");

        $('#trainingDesc').append($(this).data('message'));
        $('#trainingTitle').append($(this).data('title'));
    });
</script>