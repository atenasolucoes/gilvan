@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Inicio</div>

                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="row p-4">
                        <a href="/images" class="col-sm-4 text-center">
                            <div>
                                <img src="/imagem/icones/slide.jpg" alt="" width="100px;">
                            </div>
                            <p>Imagens do Slide</p>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection