@if(Session::has('message'))
    <div class="alert alert-dismissible fade in" role="alert"><i class="fa fa-lg fa-info"></i><button type="button" class="close btn btn-default" data-dismiss="alert" aria-hidden="true">Close</button> {{ Session::get('message') }}</div>
@endif