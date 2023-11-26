@extends('layouts.app',['pagetitle'=>'Dashboard'])

@section('content')
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('components.topnav')
        @include('components.sidebar')
        <div class="content-wrapper" >
            @include('components.pageheader',['pagetitle'=>'Dashboard'])
            @include('components.topsection')  
            @if (session('msg'))
            <div class="alert alert-primary" role="alert">
            {{ session('msg') }}
            </div>
            @endif
            <div class="card-body">
                Start creating your amazing application!
            </div>
            <div class="card-footer">&nbsp;</div>
        </div>
    </div>
</div>
@include('components.mainfooter')
@include('components.mandatoryfooter')
<script src="{{ asset("js/adminlte.min.js") }}"></script>
<script src="{{ asset("js/demo.js") }}"></script>
<script src="{{ asset("js/dashboard3.js") }}"></script>
<script>
$(document).ready(function(){
});
</script>
</body>
</html>
@endsection
