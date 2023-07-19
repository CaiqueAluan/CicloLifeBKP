@extends('app')

@section('conteudo')
<div class="row">
    <div class="col-lg-4">
        <div class="card mb-5">
            <div class="border-bottom pb-4 p-4">
                <form method="post" action="{{route('comentario')}}">
                    @csrf
                    <input type="hidden" name="nomedoperfil" value="{{auth()->user()->id}}">
                    <div class="mb-5">
                        <label for="" class="mb-1"><strong>{{ auth()->user()->name }}</strong></label>
                        <input type="text" class="form-control" name="comentario" id="comentario" placeholder="Deixe sua sugestão de rota">
                    </div>
                    <div class="position-absolute bottom-0 end-0 m-3">
                        <button type="submit" class="btn btn-outline-success" value="Enviar"><i class="bi bi-chat-dots"></i> Comentar</button>
                    </div>
                </form>
            </div>
        </div>


        <div class="">
            @if(count($rotas) == 0)
            <div class="card">
                <p class="text-center">Não a nada aqui ainda <i class="bi bi-emoji-frown"></i></p>
            </div>
            @else
            @foreach ($rotas as $rota)
            <div class="card">
                <div class="p-3">
                    <?php $nomeuser = '';
                    foreach ($users as $user) {
                        if ($user->id == $rota->nomedoperfil) {
                            $nomeuser = $user->name;
                        }
                    }
                    ?>

                    <p><strong>{{ $nomeuser }}</strong></p>
                    <p>{{ $rota->comentario }}</p>
                </div>
                @if($rota->user_id==auth()->user()->id)
                <div class="row">
                    <div class="col-auto ps-3 pb-2">
                        <form method="POST" action="{{route('deletarcoment',[$rota->id])}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn" onClick="if(!confirm('DELETAR?')){return false}">
                                <i class="bi bi-trash3 text-danger"></i>
                            </button>
                        </form>
                    </div>
                    <div class="col-auto">
                        <button type="button" class="btn" data-bs-toggle="modal" reg="{{$rota->id}}" data-bs-target="#ModalUpdate">
                            <i class="bi bi-pen text-success"></i>
                        </button>
                    </div>
                </div>

                <!-- MODAL UPDATE -->
                <div class="modal fade" id="ModalUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form method="post" action="{{route('updatecoment', [$rota->id])}}">
                            @csrf
                            @method('GET')
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <div class="mb-3">
                                        <label for="PostPublic">Comentário</label>
                                        <textarea class="form-control" id="PostPublic" name="comentario" style="height: 100px">{{$rota->comentario}}</textarea>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-success" value="Enviar">Publicar</button>
                                </div>
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
    </div>
    
    <div class="col-lg-8">
        <div class="card">
            <div class="border-bottom text-center pb-4 p-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14671.728851105127!2d-45.85646685!3d-23.172674049999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1684434975985!5m2!1spt-BR!2sbr" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="pt-4"></iframe>
            </div>
        </div>
    </div>

</div>




@endsection