@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="text-align: center">{{ __('Cadastrar') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if( Request::is('*/edit'))
                        <form action="{{url('livro/update')}}/{{$livro->id}}" >
                             @csrf
                             <div class="form-group">
                                 <label>Nome do Livro:</label>
                                 <input type="text"  name="nome" class="form-control" value="{{ $livro->nome }}"  placeholder="Digite o nome o livro">
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputPassword1">Nome do Autor:</label>
                                 <input type="text" name="autor" class="form-control" value="{{ $livro->autor }}" placeholder="Digite o nome do autor">
                             </div>

                             <button type="submit" class="btn btn-primary">Atualizar</button>
                            <a class="btn btn-primary" href="{{ url('livro') }}" role="button">Voltar</a>

                        </form>

                        @else

                        <form action="{{url('livro/store')}}" method="post">
                             @csrf
                             <div class="form-group">
                                 <label>Nome do Livro:</label>
                                 <input type="text"  name="nome" class="form-control"  placeholder="Digite o nome o livro">
                             </div>
                             <div class="form-group">
                                 <label for="exampleInputPassword1">Nome do Autor:</label>
                                 <input type="text" name="autor" class="form-control"  placeholder="Digite o nome do autor">
                             </div>

                             <button type="submit" class="btn btn-primary">Cadastrar</button>
                            <a class="btn btn-primary" href="{{ url('home') }}" role="button">Voltar</a>

                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
