@extends('layouts.landing')

@section('title', 'Acesso')
    
@section('navbar')
    
@endsection

@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-4">
        <h4 class="font-alt mb-0">Cadastro</h4>
        <hr class="divider-w mt-10 mb-20">
        <form class="form" role="form" method="POST" action="{{ url('/register') }}" enctype="multipart/form-data"> 
            @csrf         
          <div class="form-group">
            <input class="form-control" type="email" placeholder="Email" name="email"/>
          </div>
          <div class="form-group">
            <input class="form-control" type="password" placeholder="Senha" name="password"/>
          </div>
          <div class="form-group">
            <input class="form-control" type="text" placeholder="Nome" name="name"/>
          </div>
          <div class="form-group">
            <input class="form-control" type="file" placeholder="Sua Foto" name="photo"/>
          </div>
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
      </div>   
      <div class="col-sm-4">
        <h4 class="font-alt mb-0">Login</h4>
        <hr class="divider-w mt-10 mb-20">
        <form class="form" role="form" method="POST" action="{{ url('/login') }}">
            @csrf          
          <div class="form-group">
            <input class="form-control" type="text" placeholder="Email" name="email"/>
          </div>          
          <div class="form-group">
            <input class="form-control" type="text" placeholder="Senha" name="password"/>
          </div>         
          <button class="btn btn-primary" type="submit">Cadastrar</button>
        </form>
      </div>
    </div>  
  </div>
@endsection