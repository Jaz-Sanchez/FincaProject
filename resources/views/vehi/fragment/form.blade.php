<div class="form-group">
	{!! Form::label('idTipoV','Tipo de vehiculo') !!}
	{!! Form::number('idTipoV', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('idFinca','Finca a la que pertenece') !!}
	{!! Form::number('idFinca', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('Marca','Nombre de la marca') !!}
	{!! Form::text('Marca', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('Combustible','Tipo de combustible que usa') !!}
	{!! Form::text('Combustible', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('Rendimiento','Rendimiento') !!}
	{!! Form::text('Rendimiento', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('ModeloVeh','Modelo') !!}
	{!! Form::number('ModeloVeh', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('Adepreciacion','Depreciacion') !!}
	{!! Form::text('Adepreciacion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('ValorActVeh','Valor actual') !!}
	{!! Form::number('ValorActVeh', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>