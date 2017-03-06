@extends('layouts.app')

@section('content')






    <div class="inner-content parallax-bg4" id="uc-main">


    <div class="clearfix space60"></div>
    <div class="col-md-8 col-md-offset-2 ">

        <div class="col-md-8 col-md-offset-2 text-center space50">
            <h2 class="uppercase">login</h2>
        </div>
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="control-label "></label>


                    <input id="email" type="email" class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}">

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif

            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="control-label"></label>


                    <input id="password" type="password" class="form-control" placeholder="Password" name="password">

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif

            </div>

            <div class="form-group">

                    <button type="submit" class="button btn-md">
                        Login
                    </button>
                <div>
                    <div class="space20"></div>
                <label>
                    <input type="checkbox" name="remember">&nbsp;&nbsp; Remember Me
                </label>
                    </div>

                    <a class="helper-text text-center" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
               <br> <a class="helper-text text-center" href="{{ url('/register') }}">Not a Member?</a></br>
                </div>

        </form>



    </div>

</div>






@endsection
