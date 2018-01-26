<div class="form-group">
	{!! Form::label('idClasif','Clasificacion') !!}
	{!! Form::number('idClasif', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('nomProducto','Nombre del producto') !!}
	{!! Form::text('nomProducto', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('descripcion','Descripcion breve') !!}
	{!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('costo','Costo') !!}
	{!! Form::number('costo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('preciovta','Precio de venta') !!}
	{!! Form::number('preciovta', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>