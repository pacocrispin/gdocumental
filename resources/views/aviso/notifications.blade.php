@extends('layouts.main',['activePage' => 'aviso','titlePage' => 'Todas las Notificaciones'])

@section('content')
    <div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Notificaciones no Leidas</div>
                    <div class="card-body">
                        @if (auth()->user())
                            @forelse ( $avisoNotifications as $notification )
                            <div class="alert alert-warning">
                                Aviso titulo: {{$notification->data['titulo']}}
                                <p>{{$notification->created_at->diffForHumans()}}</p>
                                <button type="submit" class="mark-as-read btn btn-sm btn-dark" data-id="{{$notification->id}}">Marcar como Leido</button>
                            </div>
                            @if ($loop->last)
                            <a href="#" id="mark-all">Marcar todos como leidos</a>
                                
                            @endif
                                
                            @empty
                            No tienes notificaciones
                                
                            @endforelse
                        @endif
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection
@section('scripts')
<script>
    function sendMarkRequest(id=null){
        return $.ajax("{{route('markNotification')}}",{
            method: 'POST',
            data: {
                _token: "{{csrf_token()}}",
            id
            }
        });
    }

    $(function(){
        $('.mark-as-read').click(function(){
            let request = sendMarkRequest($(this).data('id'));
            request.done(() => {
                $(this).parents('div.alert').remove();
            });
        });
        $('#mark-all').click(function(){
            let request = sendMarkRequest();
            request.done() => {
                $('div.alert').remove();
            )}
        });
    });
</script>
    
@endsection