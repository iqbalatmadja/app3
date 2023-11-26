@extends('layouts.app',['pagetitle'=>'Dashboard'])

@section('content')
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('components.topnav')
        @include('components.sidebar')
        <div class="content-wrapper" >
            @include('components.pageheader',['pagetitle'=>'Dashboard'])
            @include('components.topsection')  
            <div class="card-body">
                Start creating your amazing application!
            </div>
            <div class="card-footer">&nbsp;</div>
        </div>
    </div>
</div>
@include('components.mainfooter')
@include('components.mandatoryfooter')
<script>
$(document).ready(function(){
});
</script>
</body>
</html>
@endsection
