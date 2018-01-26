<div class="form-group">
	{!! Form::label('idFin','Finca a la que pertenece') !!}
	{!! Form::number('idFin', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('nombrePredio','Nombre del predio') !!}
	{!! Form::text('nombrePredio', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('numLote','Numero de lote') !!}
	{!! Form::number('numLote', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('superficie','Extencion de la superficie') !!}
	{!! Form::number('superficie', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('tipIrrigacion','Tipo de irrigacion') !!}
	{!! Form::text('tipIrrigacion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('tipRiego','Tipo de riego') !!}
	{!! Form::text('tipRiego', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('observaciones','Observaciones') !!}
	{!! Form::text('observaciones', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>