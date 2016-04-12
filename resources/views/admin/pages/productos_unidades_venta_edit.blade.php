@extends('admin')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <h1 class="page-title">Editando unidad de venta</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('admin/productos_unidades_venta_view') }}"><i class="fa fa-th"></i> Unidades de Venta</a>
            </li>
            <li class="active">
                <i class="fa fa-pencil text-muted"></i> Editando...
            </li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-md-12 alert" id="unitsmsg" style="display: none;"></div>
        <div class="col-md-4">
        <form class="form-horizontal" id="unitsForm" role="form" enctype="multipart/form-data" method="POST" action="{{ url('admin/productos_unidades_venta_edit') }}" accept-charset="UTF-8">
                {!! csrf_field() !!}
                <input type="hidden" name="unitid" value="{{ $unit->id  }}"/>
            <div class="card-box">
                <div class="row">
                    <div class="col-md-12">
                        <p>Nombre de Unidad de Venta:</p>
                        <input type="text" name="unit" value="{{ $unit->name }}" class="form-control" placeholder="*">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <button type="submit" class="btn btn-lg btn-success"><i class="fa fa-floppy-o"></i> Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection