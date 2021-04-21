@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit TC</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
	<strong>
		{{session('info')}}
	</strong>
</div>
@endif
   <div class="card">
	<div class="card-body">

		{!! Form::model($change,['route'=>['admin.change.update', $change],'method'=>'put']) !!}
			<div class="form-group">
				{!! Form::label('tc_venta','TC Venta' ) !!}
				{!! Form::number('tc_venta',null,['class'=>'form-control','placeholder'=>'Ingrese el tipo de cambio venta','step'=>'0.001']) !!}

				@error('tc_venta')
					<span class="text-danger">{{$message}}</span>
				@enderror
			</div>
			<div class="form-group">
				{!! Form::label('tc_compra','TC Compra') !!}
				{!! Form::number('tc_compra',null,['class'=>'form-control','placeholder'=>'Ingrese el tipo de cambio compra','step'=>'0.001']) !!}

				@error('tc_compra')
					<span class="text-danger">{{$message}}</span>
				@enderror
				
			</div>
				{!! Form::submit('Actulizar TC',['class'=>'btn btn-primary'] ) !!}
			
    		
		{!! Form::close() !!}
	</div>
</div>
@stop

