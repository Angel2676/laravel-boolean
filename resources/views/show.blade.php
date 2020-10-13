@extends ('layouts.app')
@section('titolo', 'chi siamo')
@section ('content')
    <div class="card-group">
         <div class="card-group">
             <div class="card">
                <img src="{{$student['img']}}" class="card-img-top" alt="{{'nome'}}">
                <div class="card-body">
                  <h5 class="card-title">{{$student['nome']}}</h5>
                  <p class="card-text">{{$student['anni']}}</p>
                  <p class="card-text"><small class="text-muted">{{$student['azienda']}}</small></p>
                  <p class="card-text"><small class="text-muted">{{$student['ruolo']}}</small></p>
                  <p class="card-text"><small class="text-muted">{{$student['descrizione']}}</small></p>
                </div>
            </div>
        </div>
@endsection
