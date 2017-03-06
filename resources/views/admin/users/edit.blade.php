@extends('layouts.app')

@section('content')


    <div class="container-fluid no-padding" >
        <div class="container padding80">
            <div class="text-center space50">
                <h2 class="uppercase">Froto Edit users page</h2>
                <p>For admin only</p>

    <div class="col-sm-3">


        <img src="{{$user->photo ? $user->photo->file : asset('fonts/placeholder.png')}}" alt="" class="img-responsive img-rounded">
    </div>


    <div class="col-sm-9">









                {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['AdminUsersController@update',$user->id],'files'=>true]) !!}

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

                <div class="form-group, text-center">
                    {!! Form::submit('Update User', ['class'=>'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}







            {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminUsersController@destroy', $user->id]]) !!}


                <div class="form-group">
                    {!! Form::submit('Delete User', ['class'=>'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}





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


        </div>
    </div>
    </div>





@stop