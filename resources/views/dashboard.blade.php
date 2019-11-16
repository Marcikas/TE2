@extends('layouts.app')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Usuários</h1>
            <p class="mb-4">Lista de usuários que estão cadastrados na plataforma</a>.</p>
  
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Usuários cadastrados</h6>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="usuarios" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Nome</th>
                        <th>Email</th>                        
                        <th>Ações</th>                        
                      </tr>
                    </thead>                    
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td><a class="btn btn-danger" href="{{ url('/api/delete')}}/{{ $user->id}}">Remover</a></td>                      
                            </tr>                           
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
  
          </div>
          <!-- /.container-fluid -->
@endsection