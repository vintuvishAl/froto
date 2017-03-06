@extends('layouts.app')

@section('content')
    <div class="container-fluid no-padding" >
        <div class="container padding80">
            <div class="col-md-8 col-md-offset-2 text-center space50">
                <h2 class="uppercase">Froto create users </h2>
                <p>visible to only admin</p>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-5 padd-l0">






         {!! Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store','files'=>true]) !!}

              <div class="form-group">
                  {!! Form::label('name', 'NAME:') !!}
                  {!! Form::text('name', null, ['class'=>'form-control']) !!}
              </div>
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('role_id', 'Role:') !!}
            {!! Form::select('role_id', [''=>'Choose Option']+$roles , 3 , ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('is_active', 'Status:') !!}
            {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'), 0 , ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
                    {!! Form::label('photo_id', 'Photo:') !!}
                    {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'password:') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>

        








             <div class="form-group">
                 {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
             </div>
             {!! Form::close() !!}


                </div>
            </div>



        @if(count($errors) > 0 )

            <div class="alert alert-danger">

                <ul>
                    @foreach($errors->all() as $error)

                        <li>{{$error}}</li>

                    @endforeach
                </ul>

            </div>


        @endif


    </div>








@stop
