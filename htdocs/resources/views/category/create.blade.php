@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nueva Categoria</div>

                <div class="panel-body">
                {!! Form::open(['route'=>'category.store','method'=>'POST','class'=>'form-horizontal']) !!}
                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {!! Form::label('name','Nombre',['class'=>'col-md-4 control-label']) !!} 
                            <div class="col-md-6">
                               
                                {!! Form::text('name',null,['class'=>'form-control' ]) !!}

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                    {!! Form::submit('Crear',['class'=>'btn btn-primary'])  !!}
                {!! Form::close()  !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
