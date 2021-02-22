@extends("theme.$theme.layout")
@section("titulo")
Rol
@endsection


@section("scripts")
<script src="{{asset("assets/pages/scripts/admin/index.js")}}" type="text/javascript"></script>
@endsection


@section('contenido')
<div class="row">
    <div class="col-lg-12">
        @include('includes.mensaje')
        @include('includes.form-error')
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Rol</h3>
                <div class="box-tools pull-right">
                    <a href="{{route('crear_rol')}}" class="btn btn-block btn-success btn-sm">
                        <i class="fa fa-fw fa-plus-circle"></i>Nuevo registro</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th class="width70"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{$data->nombre}} </td>
                            <td>
                                <a href="{{route('editar_rol',['id'=>$data->id])}}" class="btn-accion-tabla tooltipsC"
                                    title="editar este registro">
                                    <i class="fa fa-fw fa-pencil"></i> </a>
                                <form action="{{url("admin/rol/$data->id")}} " class="d-inline form-eliminar"
                                    method="POST">
                                    @csrf
                                    @method("delete")
                                    <button type="submit" class="btn-accion-tabla eliminar tooltipsC"
                                        title="eliminar este registro">
                                        <i class="fa fa-fw fa-trash text-danger"></i> </button> </form>
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection