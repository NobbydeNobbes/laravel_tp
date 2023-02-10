@extends('layout.app')

@section('content')
<body class="bg-light" cz-shortcut-listen="true">
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h2>Formulaire de Création de Compte</h2>
      <p class="lead">Veuillez entrer vos informations personnelles pour créer votre compte au sein de notre banque</p>
    </div>

    
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Adresse</h4>
        <form class="needs-validation" action="{{url('/register.reg')}}" methode="POST">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Prénom</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Un prénom valide est nécessaire.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Nom de Famille</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Un nom de famille valide est nécessaire.
              </div>
            </div>

           

            <div class="col-12">
              <label for="email" class="form-label"> Adresse Email</label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Entrez une adresse email valide
              </div>
            </div>
            <div class="col-12">
              <label for="email" class="form-label">Confirmation d'Adresse Email</label>
              <input type="email" class="form-control" id="email" placeholder="you@exemple.com">
              <div class="invalid-feedback">
                Confirmez votre adresse email
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Addresse</label>
              <input type="text" class="form-control" id="address" placeholder="59 rue Victore Hugo" required="">
              <div class="invalid-feedback">
                Entrez votre adresse
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Addresse 2 <span class="text-muted">(Optionnel)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Appartement ou chambre">
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Pays</label>
              <select class="form-select" id="country" required="">
                <option value="">Choisir</option>
                <option>France</option>
                <option>Belgique</option>
                <option>Espagne</option>
                <option>Allemagne</option>
                <option>Irlande</option>
                <option>Pays-bas</option>
                <option>Italie</option>
                <option>Portugal</option>
              </select>
              <div class="invalid-feedback">
                Merci de choisir votre pays de résidence.
              </div>
            </div>

           

            <div class="col-md-3">
              <label for="zip" class="form-label">Code Postal</label>
              <input type="text" class="form-control" id="zip" placeholder="" required="">
              <div class="invalid-feedback">
                Un code postal est nécessaire
              </div>
            </div>
          </div>

          <hr class="my-4">

       

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2017–2022 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

      <script src="checkout.js"></script>
  

</body>
@endsection