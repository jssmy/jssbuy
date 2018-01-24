@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Nuevo Producto</div>

                <div class="panel-body">
                    {!! Form::open(['route'=>'product.store','method'=>'POST','class'=>'form-horizontal','files'=>true]) !!}
                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {!! Form::label('name','Nombre',['class'=>'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::text('name',null,['class'=>'form-control','required'=>'requerid','autfocus'=>'autofocus']) !!}
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                          
                         </div> 
                         <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">  
                           {!! Form::label('description','Descripcion',['class'=>'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::text('description',null,['class'=>'form-control','required'=>'required','autofocus'=>'autofocus'])  !!}
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div> 
                        <div class="form-group{{ $errors->has('unit_price') ? ' has-error' : '' }}">  
                           {!! Form::label('unit_price','Precio unitario ( S/. )',['class'=>'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::number('unit_price',null,['class'=>'form-control','required'=>'required','autofocus'=>'autofocus','placeholder'=>'0.00 S/.'])  !!}
                                    @if ($errors->has('unit_price'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('unit_price') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div> 
                        <div class="form-group{{ $errors->has('stock') ? ' has-error' : '' }}">  
                           {!! Form::label('stock','Stock',['class'=>'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::number('stock',null,['class'=>'form-control','required'=>'required','autofocus'=>'autofocus'])  !!}
                                    @if ($errors->has('stock'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('stock') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div> 
                        <div class="form-group{{ $errors->has('img_3') ? ' has-error' : '' }}">  
                           {!! Form::label('category','Categoria',['class'=>'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                    <select name="category" class="form-control" id="sel1">
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('category'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('category') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div> 
                        <div class="form-group{{ $errors->has('img_1') ? ' has-error' : '' }}">  
                           {!! Form::label('img_1','Imagen 1',['class'=>'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::file('img_1',null,['class'=>'form-control','required'=>'required','autofocus'=>'autofocus'])  !!}
                                    @if ($errors->has('img_1'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('img_1') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div> 
                        <div class="form-group{{ $errors->has('img_2') ? ' has-error' : '' }}">  
                           {!! Form::label('img_2','Imagen 2',['class'=>'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::file('img_2',null,['class'=>'form-control','required'=>'required','autofocus'=>'autofocus'])  !!}
                                    @if ($errors->has('img_2'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('img_2') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div> 
                
                        <div class="form-group{{ $errors->has('img_3') ? ' has-error' : '' }}">  
                           {!! Form::label('img_3','Imagen 3',['class'=>'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::file('img_3',null,['class'=>'form-control','required'=>'required','autofocus'=>'autofocus'])  !!}
                                    @if ($errors->has('img_3'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('img_3') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div> 
                        <div class="form-group{{ $errors->has('img_4') ? ' has-error' : '' }}">  
                           {!! Form::label('img_4','Imagen 4',['class'=>'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::file('img_4',null,['class'=>'form-control','required'=>'required','autofocus'=>'autofocus'])  !!}
                                    @if ($errors->has('img_4'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('img_4') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div> 
                        <div class="form-group{{ $errors->has('img_5') ? ' has-error' : '' }}">  
                           {!! Form::label('img_5','Imagen 5',['class'=>'col-md-4 control-label']) !!}
                                <div class="col-md-6">
                                    {!! Form::file('img_5',null,['class'=>'form-control','required'=>'required','autofocus'=>'autofocus'])  !!}
                                    @if ($errors->has('img_5'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('img_5') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div> 
                        

                     {!! Form::submit('Crear',['class'=>'btn btn-primary'])  !!}
                    {!! Form::close() !!}                    



                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
