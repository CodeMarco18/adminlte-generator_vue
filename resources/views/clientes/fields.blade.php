<!-- Apn Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apn_nom', 'Apn Nom:') !!}
    {!! Form::text('apn_nom', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::number('celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Sexo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sexo', 'Sexo:') !!}
    {!! Form::text('sexo', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>