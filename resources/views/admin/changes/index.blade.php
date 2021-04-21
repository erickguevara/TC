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
    	<div class="card-header">
            @can('admin.change.create')
    		<a class="btn btn-primary btn-sm" href="{{route('admin.change.create')}}">Agregar Tipo Cambio</a>
    		@endcan
    	</div>
    	<div class="card-body">
    		<table class="table table-striped">
    			<thead>
    				<tr>
    					<th>ID</th>
    					<th>TC Venta</th>
    					<th>TC Compra</th>
    					<th>Fecha</th>
    					<th colspan="2"></th>
    				</tr>
    			</thead>
    			<tbody>
    				@foreach ($changes as $change)
    					<tr>
    						<td>{{$change->id}}</td>
    						<td>{{$change->tc_venta}}</td>
    						<td>{{$change->tc_compra}}</td>
    						<td>{{$change->created_at}}</td>
    						<td width='10px'>
                                @can('admin.change.edit')
    							<a class="btn btn-primary btn-sm" href="{{route('admin.change.edit',$change)}}">Edit</a>
                                @endcan
    						</td>
    						<td width='10 px'>
                                @can('admin.change.destroy')
    							<form action="{{route('admin.change.destroy',$change)}}" method="POST">
    								@csrf
    								@method('delete')

    								<button type="submit" class="btn btn-danger btn-sm">Delete</button>
    							</form>
                                @endcan
    						</td>
    					</tr>
    				@endforeach
    			</tbody>
    		</table>
    	</div>
    </div>
@stop

