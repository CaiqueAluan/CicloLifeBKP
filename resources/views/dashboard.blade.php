@extends('app')

@section('conteudo')
<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="border-bottom pb-4 p-2 ">

                <div class="row">
                    <div class="col-auto mb-2">
                        <img src="image/perfilfoto.png" alt="" width="70">
                    </div>
                    <div class="cola-uto">
                        <p class="mb-10"><strong>{{ auth()->user()->name }}</strong></p>
                    </div>
                </div>
                <form action="">
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
                </form>

                <div class="position-absolute top-0 end-0">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#ModalEditarBio"><i class="bi bi-pencil-square text-dark"></i></button>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" role="button">
                            <button class="btn">
                                <i class="bi bi-box-arrow-right text-dark"></i>
                            </button>
                        </a>
                    </form>
                </div>

                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#ModalPublicar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-postcard-heart" viewBox="0 0 16 16">
                        <path d="M8 4.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7Zm3.5.878c1.482-1.42 4.795 1.392 0 4.622-4.795-3.23-1.482-6.043 0-4.622ZM2.5 5a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3Zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3Zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3Z" />
                        <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H2Z" />
                    </svg> Publicar
                </button>



            </div>
        </div>
    </div>
    <div class="col-lg-8">
        @if(count($feeds) == 0)
        <div class="card">
            <p class="text-center">Não a nada aqui ainda <i class="bi bi-emoji-frown"></i></p>
        </div>
        @else
        @foreach ($feeds as $feed)
        <div class="card rounded-0">
            <div class="mt-4">
                <p class="ms-2"><strong>{{ $feed->titulo }}</strong></p>
                <p class="p-2"><img src="{{url('/')}}/public/uploads/{{ $feed->foto }}" width="100%" alt=""></p>
                <p class="ps-2">{{ $feed->texto }}</p>
            </div>

            @if($feed->user_id==auth()->user()->id)
            <div class="row">
                <div class="col-auto ps-3 pb-2">
                    <form method="POST" action="{{route('deletar',[$feed->id])}}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn" onClick="if(!confirm('DELETAR?')){return false}">
                            <i class="bi bi-trash3 text-danger"></i>
                        </button>
                    </form>
                </div>
                <div class="col-auto">
                    <button type="button" class="btn" data-bs-toggle="modal" reg="{{$feed->id}}" data-bs-target="#ModalUpdate">
                        <i class="bi bi-pen text-success"></i>
                    </button>
                </div>

            </div>
            <!-- MODAL UPDATE -->
            <div class="modal fade" id="ModalUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <form method="post" action="{{route('update', [$feed->id])}}" enctype="multipart/form-data">
                        @csrf
                        @method('GET')
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="mb-3">
                                    <label for="TituloPublic">Titulo da Publicação</label>
                                    <input type="text" class="form-control" id="TituloPublic" name="titulo" value="{{$feed->titulo}}">
                                </div>
                                <div class="mb-3">
                                    <label for="PostPublic">Post</label>
                                    <textarea class="form-control" placeholder="Poste um Comentário" id="PostPublic" name="texto" style="height: 100px">{{$feed->texto}}</textarea>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-success" value="Enviar">Publicar</button>
                            </div>
                    </form>
                </div>
            </div>
            @else
            @endif
        </div>
        @endforeach
        @endif

    </div>


    <!-- MODAL NOVO POST -->
    <div class="modal fade" id="ModalPublicar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="post" action="{{route('novopost')}}" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Compartilhar</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="TituloPublic">Titulo da Publicação</label>
                            <input type="text" class="form-control" id="TituloPublic" name="titulo">
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Imagem</label>
                            <input class="form-control" type="file" id="formFile" name="foto">
                        </div>
                        <div class="mb-3">
                            <label for="PostPublic">Post</label>
                            <textarea class="form-control" placeholder="Poste um Comentário" id="PostPublic" name="texto" style="height: 100px"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success" value="Enviar">Publicar</button>
                    </div>
            </form>
        </div>
    </div>



</div>

</div>
@endsection