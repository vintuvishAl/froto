@extends('layouts.app')

@section('content')
    <div class="container-fluid no-padding" >
        <div class="container padding80">
            <div class="col-md-8 col-md-offset-2 text-center space50">
                <h2 class="uppercase">Welcome to Froto</h2>

            </div>


    <div class="row">
        <div class="col-md-6 text-center">
            <a href="{{route('admin.hav.create')}}" class="button btn-desc btn-full ">Hire a vehicle</a>
        </div>
        <div class="col-md-6">
            <a href="#" class="button btn-desc btn-full btn-border color3">Share a vehicle</a>
        </div>
    </div>
    </div>
    </div>

@endsection
