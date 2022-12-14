@extends('layouts.app')

@section('template_title')
    {{ $tipoEmpleado->name ?? 'Show Tipo Empleado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tipo Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipo-empleados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cargo:</strong>
                            {{ $tipoEmpleado->cargo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
