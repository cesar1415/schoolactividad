{{--@extends('adminlte::page')--}}

{{--@section('title', 'Instructor')--}}

{{--@section('content_header')--}}
{{--    <h1>Vista Home</h1>--}}
{{--@stop--}}

{{--@section('content')--}}
{{--    <p>Bienvenidos</p>--}}
{{--@stop--}}

{{--@section('css')--}}
{{--    <link rel="stylesheet" href="/css/admin_custom.css">--}}
{{--@stop--}}

{{--@section('js')--}}
{{--    <script> console.log('Hi!'); </script>--}}
{{--@stop--}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado aprendices</h1>
@stop

@section('content')
    <div>
        <a href="{{route('instructor.create')}}" type="button" class="btn btn-secondary btn-lg">Crear</a>
    </div>
    <br>
    <div class="modal-content">
        <div class="p-4">
            <div>
                <table id="products" class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($apprentices as $apprentice)
                            <th>{{$apprentice->id}}</th>
                            <th>{{$apprentice->name}}</th>
                            <th>{{$apprentice->description}}</th>
                            <th>{{$apprentice->cantidad}}</th>
                            <td>
                                <form action="{{route('apprentice.destroy', $apprentice->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('apprentice.show',$apprentice->id)}}"
                                       class="btn btn-sm btn-outline-info">Detalles</a>
                                    <a href="{{route('apprentice.edit',$apprentice->id)}}"
                                       class="btn btn-sm btn-outline-warning ">Editar</a>
                                    <button class="btn btn-sm btn-outline-danger submit-prevent-button" type="sumbit">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#products').DataTable({
                "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "ALL"]]
            });
        });
    </script>
@stop

