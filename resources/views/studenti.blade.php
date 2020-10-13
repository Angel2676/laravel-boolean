@extends ('layouts.app')
@section('titolo', 'home page')
@section ('content')
    <div class="card-group container-md">
     @foreach ($data as $key => $student)
         <div class="card-group">
             <div class="card">
                <img src="{{$student['img']}}" class="card-img-top" alt="{{'nome'}}">
                <div class="card-body">
                  <a href="{{route ('Student.show', ['id' =>$key])}}"><h5 class="card-title">{{$student['nome']}}</h5></a>
                  <p class="card-text">{{$student['anni']}} anni</p>
                  <p class="card-text"><small class="text-muted">{{$student['azienda']}}</small></p>
                  <p class="card-text"><small class="text-muted">{{$student['ruolo']}}</small></p>

                  {{-- <p class="card-text"><small class="text-muted">{{$student['descrizione']}}</small></p> --}}
                </div>
            </div>
        </div>

     @endforeach
    </div>
@endsection
