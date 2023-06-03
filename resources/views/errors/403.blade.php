@extends('layouts.master')


@section('content')
	<div>
		<div class="error-page mt-0 pt-5">
        <h2 class="headline text-warning"> 403</h2>
        <div class="error-content text-white">
			<h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! You don't have permission.</h3>
			<p>
				We could not find the page you were looking for.
				Meanwhile, you may <a href="{{ URL::previous() }}">return to back</a> or try using the search form.
			</p>
        </div><!-- /.error-content -->
    </div>
	</div>
	
@endsection
