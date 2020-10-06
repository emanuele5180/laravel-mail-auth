@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    {{$xxx -> name}} <br>
                    {{$xxx -> description}} <br>
                    {{$xxx -> like}} <br>
                    {{$xxx -> share}} <br>

                  <a href="{{route('home')}}">go!</a>
                  
                  @auth
                    <a href="{{route('destroy', $tab ->id)}}"></a>
                  @endauth


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
