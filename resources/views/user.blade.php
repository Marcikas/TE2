@extends('layouts.app')

@section('content')
<div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edite seu perfil</h6>
            </div>
            <div class="card-body p-4">                
                <form action="{{url('/api/update')}}/{{Auth::user()->id}}" enctype="multipart/form-data" method="POST">
                    <div class="form-row">
                        <div class="col-md-3 col-sm-1">
                            <img id="profileImg" width="150" height="150" class="img-profile rounded-circle" src="{{asset('storage/')}}/{{Auth::user()->photo}}">
                            <br><br><input type="file" class="form-group" name="photo">
                        </div>
                        <div class="col-md-4 col-sm-2 border-left">
                            <div class="form-group ml-3">                                
                                <input class="form-control" name="name" type="text" id="nameInput" value="{{ Auth::user()->name }}" placeholder="Nome">
                            </div>
                            <div class="form-group ml-3">                                
                                <input class="form-control" name="email" type="email" id="nameInput" value="{{ Auth::user()->email }}" placeholder="Email">
                            </div>
                            <button class="btn btn-info ml-3" type="submit">Salvar</button>                            
                        </div>                                           
                    </div>
                </form>                
            </div>
        </div>
    </div>
@endsection