<!DOCTYPE html>
<html lang="en">

@include('store.base.head')

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">StoreCommerce</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home') }}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->is('order*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('order') }}">Order</a>
                    </li>
                    <li class="nav-item {{ request()->is('cart*') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('cart') }}">Cart</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container" style="margin-top: 20px; padding-top: 50px">

        @yield('content')

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; 2020. Akhmad Ridwan</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    {{-- Sweetalert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    @if ($message = Session::get('error'))
	<script>
		Swal.fire(
			'Error',
			'{{ $message }}',
			'error'
			)
	</script>
	@endif

	@if ($message = Session::get('success'))
	<script>
		Swal.fire(
			'Success',
			'{{ $message }}',
			'success'
			)
	</script>
	@endif

	@if ($message = Session::get('info'))
	<script>
		Swal.fire(
			'Information',
			'{{ $message }}',
			'info'
			)
	</script>
	@endif

	@if ($message = Session::get('failed'))
	<script>
		Swal.fire(
			'Failed',
			'{{ $message }}',
			'warning'
			)
	</script>
	@endif

	@if ($message = Session::get('warning'))
	<script>
		Swal.fire(
			'Warning',
			'{{ $message }}',
			'warning'
			)
	</script>
	@endif

	@stack('script')

</body>

</html>
