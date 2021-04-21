@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listar TC</h1>
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
    		<table class="table table-striped">
    			<thead>
    				<tr>
    					<th>ID</th>
    					<th>TC Venta</th>
    					<th>TC Compra</th>
    					<th>Fecha</th>
    					
    				</tr>
    			</thead>
    			<tbody>
    				@foreach ($changes as $change)
    					<tr>
    						<td>{{$change->id}}</td>
    						<td>{{$change->tc_venta}}</td>
    						<td>{{$change->tc_compra}}</td>
    						<td>{{$change->created_at}}</td>
    						
    					</tr>
    				@endforeach
    			</tbody>
    		</table>
    	</div>
    </div>
@stop

