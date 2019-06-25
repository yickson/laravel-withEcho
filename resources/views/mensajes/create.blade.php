@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear mensaje</div>
                    <div class="card-body">
                        <form action="{{ url('mensajes/almacenar') }}" method="post" class="form-group">
                            @csrf
                            <label for="title">Título</label>
                            <input type="text" name="title" class="form-control">
                            <label for="subject">Contenido</label>
                            <textarea name="subject" class="form-control" cols="30" rows="10"></textarea>
                            <input type="submit" class="btn btn-success" value="Enviar mensaje">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready()
    </script>
@endsection
