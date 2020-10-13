@extends ('layouts.app')
@section('titolo', 'home page')
@section ('content')
    <div class="container">
        <div class="jumbotron fluid">
            <div class="container">
                <h1 class="display-4">Cambia la tua vita. <br> Entra in Boolean.</h1>
                <p class="lead">Segui il corso, diventi un web developer e trovi lavoro.</p>
                  <ul class="list_home">
                      <li> 6 mesi di corso full time, online e in diretta</li>
                      <li> Nessuna competenza di programmazione richiesta</li>
                      <li>Se non trovi lavoro ti rimborsiamo.</li>
                  </ul>
                   <a class="btn btn-primary btn-lg" href="#" role="button">Candidati ora</a>
            </div>

        </div>
    </div>
        <div class="jumbotron2 fluid">
            <div class="container">
                <h2 class="display-4">I nostri numeri</h2>
                <div class="d-flex flex-row bd-highlight mb-3">
                    <img class="p-2 bd-highlight" src="https://www.boolean.careers/images/icons/person.png" alt="logo2">
                    <img class="p-2 bd-highlight" src="https://www.boolean.careers/images/icons/pacman.png" alt="">
                    <img class="p-2 bd-highlight" src="https://www.boolean.careers/images/icons/rettangolo.png" alt="">
                </div>
                <div class="d-flex flex-row bd-highlight mb-3 cl-highlight">
                    <h2>700+</h2>
                    <h2>98%</h2>
                    <h2>23.000 €</h2>
                </div>

                <div class="d-flex flex-row bd-highlight mb-3 cl-highlight">
                    <h4>GLI STUDENTI CHE FINO AD OGGI HANNO SEGUITO IL CORSO ONLINE DI BOOLEAN.</h4>
                    <h4>LA PERCENTUALE DEI NOSTRI STUDENTI CHE ORA LAVORA IN CAMPO TECH.</h4>
                    <h4>LO STIPENDIO MEDIO LORDO DI PARTENZA DEGLI STUDENTI ASSUNTI.</h4>
                </div>

            </div>
        </div>
@endsection
