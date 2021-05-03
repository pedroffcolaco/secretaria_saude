@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <a href="{{ url('usuarios')  }}">Voltar</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     @if (Request::is('*/edit'))
                    <form action="{{ url ('usuarios/update')}}/{{$usuario->id}}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome:</label>
                            <input type="text" name="name" class="form-control" value="{{ $usuario->name  }}" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input type="email" name="email" class="form-control" value="{{ $usuario->email  }}" > <br>
                            
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </div>
                    </form>
                     
                     @else
                    
                    <form action="{{ url ('usuarios/add') }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome:</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input type="email" name="email" class="form-control" ><br>
                            
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </form> @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
