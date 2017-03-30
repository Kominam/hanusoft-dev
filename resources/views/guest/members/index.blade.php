@extends('layouts.guest.desktop')
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.7.3/socket.io.js">
    </script>
    <script src="{{ mix('js/guest.js') }}">
    </script>
@endpush
@section('content')
<div class="main" role="main">
    <section class="page-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>
                        Team
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <h2>
            Meet the
            <strong>
                Team
            </strong>
        </h2>
        <ul class="nav nav-pills sort-source" data-option-key="filter" data-sort-id="team">
            <li class="active" data-option-value="*">
                <a href="#">
                    Show All
                </a>
            </li>
            <li data-option-value=".K13"><a href="#">K13</a></li>
        </ul>
        <hr/>
        <div class="row">
            <Members></Members>
        </div>
    </div>
</div>
@stop
