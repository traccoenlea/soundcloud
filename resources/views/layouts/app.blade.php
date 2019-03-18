@if(request()->ajax())
    @yield('content')
@else
    @include('layouts.full')
@endif

<pre>
    {{print_r(Session::all())}}
</pre>
@if(Session::has('toastr'))
    <script>
        $(document).ready(function() {
            toastr.{{Session::get('toastr')['statut']}}('{{Session::get('toastr')['message']}}');
        });
    </script>
@endif