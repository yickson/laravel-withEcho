@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lista de mensajes</div>
                    <div class="card-body">
                        <div class="table">
                            <table>
                                <tr>
                                    <th>Id</th>
                                    <th>Título</th>
                                    <th>Contenido</th>
                                </tr>
                                @foreach($mensajes as $mensaje)
                                    <tr>
                                        <td>{{ $mensaje->id }}</td>
                                        <td>{{ $mensaje->title }}</td>
                                        <td>{{ $mensaje->subject }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Echo.channel('messages')
        //     .listen('MessageWasCreated', function(data){
        //         console.log(data)
        //     });
    </script>
@endsection
