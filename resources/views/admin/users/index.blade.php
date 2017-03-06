@extends('layouts.app')

@section('content')
    <div class="container-fluid no-padding" >
        <div class="container padding80">
            <div class=" text-center space50">
                <h2 class="uppercase">Froto All users</h2>
                <p>visible to only admin</p>










    <table class="table table-hover">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Photo</th>
            <th>Role</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>time</th>
            <th>date</th>




        </tr>
        </thead>
        <tbody>

        @if($users)
            @foreach($users as $user)



        <tr>
            <td>{{$user->id}}</td>
            <td><img height="50" src="{{$user->photo ? $user->photo->file : 'no user photo'}}" alt=""></td>
            <td>{{$user->role->name}}</td>
            <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->time}}</td>
            <td>{{$user->date}}</td>



        </tr>
        @endforeach

@endif




        </tbody>
    </table>
            </div>
        </div>
    </div>





@stop