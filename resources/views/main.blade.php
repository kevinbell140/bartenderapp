<!DOCTYPE html>
<html lang="en">
@include('partials._head')

@include('partials._nav')

<body>
<div class="container">
    @yield('content')
    @include('partials._footer')
</div>

@include('partials._javascript')


</body>
</html>
