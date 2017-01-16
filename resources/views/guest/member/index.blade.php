@extends('layouts.guest.desktop')
@section('content')
	<Members></Members>
@stop
@push('script')
	<script src="{{ elixir('user/js/user.js') }}"></script>
@endpush