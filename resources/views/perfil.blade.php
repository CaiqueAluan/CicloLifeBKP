@extends('app')

@section('conteudo')
<div class="row">
    <div class="col-lg-4">
        <div class="card p-4">
            <div class="mb-2">
                <img src="image/perfilfoto.png" alt="" width="70">
                <p class="mb-10"><strong>{{ auth()->user()->name }}</strong></p>
            </div>

            <div class="mb-4">
                <label for="">Bio</label>
                <textarea class="form-control" placeholder="Sobre mim" id="PostPublic" name="bio" style="height: 100px"></textarea>
            </div>
            <div class="mb-4">
                <label for="">Nascimento</label>
                <input type="text" class="form-control" style="width: 110px" name="nascimento">
            </div>
            <div class="mb-4">
                <label for="">Cidade</label>
                <input type="text" class="form-control" style="width: 250px" name="cidade">
            </div>

            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#ModalEditarBio">Editar</button>

        </div>
    </div>
    <div class="col-lg-8">
        <div class="card">

        </div>
    </div>
    <div class="modal fade" id="ModalEditarBio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="post" action="{{route('editperfil')}}">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Perfil</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="">Bio</label>
                            <textarea class="form-control" placeholder="Sobre mim" id="bio" name="bio" style="height: 100px"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">Nascimento</label>
                            <input type="text" class="form-control" name="nascimento">
                        </div>
                        <div class="mb-3">
                            <label for="">Cidade</label>
                            <input type="text" class="form-control" name="cidade">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success" value="Enviar">Editar</button>
                    </div>
            </form>
        </div>
    </div>
</div>


@endsection