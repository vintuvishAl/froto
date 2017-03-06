@extends('layouts.app')

@section('content')

    <div class="container-fluid no-padding" >
        <div class="container padding80">
            <div class=" text-center space50">
                <h2 class="uppercase">Froto data from hire a vechile</h2>
                <p>visible to only admin</p>





                <table class="table table-hover">
        <thead>
        <tr>
            <th>id</th>
            <th>user</th>
            <th>Vechile</th>
            <th>Vechile Type</th>
            <th>pickup location</th>
            <th>Drop location</th>
            <th>weight</th>
            <th>receivername</th>
            <th>phoneno</th>
            <th>pickupdate</th>
            <th>pickuptime</th>
            <th>frotoguyneeded</th>
            <th>nooffrotoguys</th>

        </tr>
        </thead>
        <tbody>

        @if($posts)

            @foreach($posts as $post)


        <tr>
            <td>{{$post->id}}</td>
            <td><a href="{{route('admin.hav.show', $post->id)}}">{{$post->user->name}}</a></td>
            <td>{{$post->vechiles}}</td>
            <td>{{$post->vechiletype}}</td>
            <td>{{$post->pickup}}</td>
            <td>{{$post->drop}}</td>
            <td>{{$post->weight}}</td>
            <td>{{$post->name}}</td>
            <td>{{$post->contact}}</td>
            <td>{{$post->date}}</td>
            <td>{{$post->time}}</td>
            <td>{{$post->frotoguy}}</td>
            <td>{{$post->frotoguynumber}}</td>



        </tr>
            @endforeach


         @endif
        </tbody>
    </table>

</div>
    </div>
    </div>


@stop