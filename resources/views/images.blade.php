@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 ">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="/home">Voltar</a></div>

                <div class="panel-body container-fluid">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    @if (old('mensagem'))
                    <div class="alert alert-success">
                        {{ old('mensagem') }}
                    </div>
                    @endif

                    <div class="row p-4">
                        @foreach($fotos as $foto)
                        <a href="/images" class="col-sm-4 text-center " style="border: 1px solid gray">
                            <div style="padding-top: 20px;">
                                <img src='/galeria/{{$foto->imagem}}' alt="" width="100px;" height="75px;">
                            </div>
                            <hr>
                            <form method="post" action="{{route('trocar')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <input type="hidden" name="foto" value="{{$foto->id}}">
                                <input type="file" name="image" id="" required><br>
                                <button>Troca imagem</button>

                            </form>

                        </a>

                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection