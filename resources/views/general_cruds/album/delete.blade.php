@extends('layouts.layout_master')
@section('title', 'Deletando um álbum')
@section('content')
	<div class="linha">
		<h2 class="title title-center">Deletando Álbum</h2>
	</div>
	<div class="linha">
		<div class="col-l col-6 pula-2">
			<p class="title">
				Você deseja deletar este álbum?
				@if(count($album->musics)>0)
					Ele possui as segunites músicas:
					@foreach($album->musics as $musica)
						{{$musica->name}}
					@endforeach
				@endif
			</p>
		</div>
		<div class="clear"></div>
	</div>
	<div class="linha">
		<div class="col-l col-6 pula-2">
			<form action="{{ route('album.destroy', [$album->id]) }}" method="POST">
				{{ method_field('DELETE') }}
				{!! csrf_field() !!}
				<button type="submit" class="btn btn-bor btn-bor-rad btn-perigo">Sim, tenho certeza!</button>
				<a href="{{route('banda.painel', $album->band->id)}}" class="btn btn-bor btn-bor-rad btn-prosseguir">Não! Ainda quero ele de pé!</a>
			</form>
		</div>
	</div>
@endsection