@extends('layouts.app')

@section('template_title')
    {{ $detalle->name ?? 'Show Detalle' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Detalle</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('detalles.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Usuario:</strong>
                            {{ $detalle->id_usuario }}
                        </div>
                        <div class="form-group">
                            <strong>Id Venta:</strong>
                            {{ $detalle->id_venta }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $detalle->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $detalle->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Subtotal:</strong>
                            {{ $detalle->subtotal }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
