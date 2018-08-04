@include('layouts.header')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <center>
                <h1 class="text-primary"><b>RESOURCES</b></h1>
            </center>
        </div>
        @foreach($resources as $resource)
            <div class="col-md-4 slides resources" data-toggle="tooltip" title="{{ $resource->description }}">
                <div class="modal-content">
                    <div class="modal-body">
                        <h3 class="modal-title text-primary">{{ $resource->title }}</h3>
                        {{--<p>{{ $resource->description }}</p>--}}
                    </div>
                    <div class="modal-footer">
                        <a href="documents/{{ $resource->attachment }}" target="_blank">READ DOCUMENT</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@include('layouts.footer')
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>