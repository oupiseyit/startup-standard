@extends('layouts.master')


@section('content')
	<div>
		<div class="error-page mt-0 pt-5">
        <h2 class="headline text-warning"> 404</h2>
        <div class="error-content">
          <h3 class="text-white"><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>
          <p class="text-white">
            We could not find the page you were looking for.
            Meanwhile, you may <a href="{{ route('dashboard') }}">return to dashboard</a> or try using the search form.
          </p>
        </div><!-- /.error-content -->
    </div>
	</div>
@endsection
