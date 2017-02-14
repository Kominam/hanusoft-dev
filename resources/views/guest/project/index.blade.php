@extends('layouts.guest.desktop')
@section('content')
	<Projects></Projects>
@stop
@push('script')
	<script src="{{ elixir('user/js/user.js') }}"></script>
@endpush
