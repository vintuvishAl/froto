@extends('layouts.app')

@section('content')

    <div class="container-fluid no-padding" >
        <div class="container padding80">
            <div class="col-md-12  text-center space50">
                <h2 class="uppercase">Hire a vehicle </h2>
                <div class="space30"></div>


       {!! Form::open(['method'=>'POST', 'action'=> 'AdminHavController@store']) !!}


                <div class="form-group">
                    {!! Form::label('vechiles', 'Vechile:') !!}
                     {!! Form::select('vechiles', ['BIKE'=>'BIKE', 'PIAGGIO APE'=>'PIAGGIO APE', 'TATA ACE'=>'TATA ACE', 'ASHOK LEYLAND DOST'=>'ASHOK LEYLAND DOST', 'TATA 407'=>'TATA 407', 'Eicher DCM'=>'Eicher DCM']  , ['multiple class'=>'form-control']) !!}
                  </div>



                <div class="form-group">
                    {!! Form::label('vechiletype', 'close:') !!}
                    {!! Form::radio('vechiletype', 'open'  ,['class'=>'form-control']) !!}
                    {!! Form::label('vechiletype', 'open:') !!}
                    {!! Form::radio('vechiletype', 'close'  ,['class'=>'form-control']) !!}
                </div>
                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group">

                            {!! Form::textarea('pickup', null, ['class'=>'form-control', 'rows'=>2, 'placeholder'=>'Pickup address']) !!}
                        </div>                    </div>
                    <div class="col-md-6">
                        <div class="form-group">

                            {!! Form::textarea('drop', null, ['class'=>'form-control', 'rows'=>2, 'placeholder'=>'Drop address']) !!}
                        </div>
                    </div>
                    </div>
<div class="row">
    <div class="col-md-4">
                <div class="form-group">

                    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Name of the person who receives goods']) !!}
                </div>
        </div>
    <div class="col-md-4">
                <div class="form-group">

                    {!! Form::number('contact', null, ['class'=>'form-control', 'placeholder'=>'Contact Number']) !!}
                </div>
    </div>
    <div class="col-md-4">
                <div class="form-group">

                    {!! Form::number('weight', null, ['class'=>'form-control', 'placeholder'=>'Approximate weight']) !!}
                </div>
        </div>
</div>
                <div class="row">
                    <div class="col-md-6">
                <div class="form-group">
                    {!! Form::label('date', 'Select Date:') !!}
                    {!! Form::input(\carbon\carbon::now(), 'date', null, ['class'=>'form-control','placeholder="MM/DD/YYY"']) !!}
                </div>
                    </div>
                    <div class="col-md-6">
                <div class="form-group">
                     {!! Form::label('time', 'Select Time:') !!}
                     {!! Form::input('time', 'time', $value = null, $options = array('class'=>'form-control' ,'placeholder=--:-- -')) !!}
                </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        {!! Form::label('frotoguy', 'FROTO GUY NEEDED?') !!}
                        {!! Form::select('frotoguy', array(1=>'yes', 0=>'no'), 0 , ['class'=>'form-control']) !!}
                    </div>
                        </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('frotoguynumber', 'Number of Froto guys:') !!}
                          <div>
                           {!! Form::selectRange('frotoguynumber', 0,5 , ['class'=>'form-control']) !!}</div>
                        </div>
                    </div>
                    </div>
<div class="row text-center space50">

           <div class="form-group">
               {!! Form::submit('Hire vehicle', ['class'=>'button btn-desc btn-full']) !!}
           </div>
            </div>
           {!! Form::close() !!}


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

@stop