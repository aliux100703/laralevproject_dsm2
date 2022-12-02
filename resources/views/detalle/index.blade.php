@extends('layouts.app')

@section('template_title')
    Detalle
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Detalle') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('detalles.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Usuario</th>
										<th>Id Venta</th>
										<th>Fecha</th>
										<th>Cantidad</th>
										<th>Subtotal</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($detalles as $detalle)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $detalle->id_usuario }}</td>
											<td>{{ $detalle->id_venta }}</td>
											<td>{{ $detalle->fecha }}</td>
											<td>{{ $detalle->cantidad }}</td>
											<td>{{ $detalle->subtotal }}</td>

                                            <td>
                                                <form action="{{ route('detalles.destroy',$detalle->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('detalles.show',$detalle->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('detalles.edit',$detalle->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $detalles->links() !!}
            </div>
        </div>
    </div>
@endsection
