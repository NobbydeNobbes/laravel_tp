@extends('layout.app')

@section('content')
<body class="text-center" cz-shortcut-listen="true">
    
    <main class="form-signin w-100 m-auto">
        <form>
                <img class="mb-4" src="../dollar.png" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Entrez vos identifiants</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Adresse mail</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Mot de Passe</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Se souvenir de moi
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Se connecter</button>
            <p class="mt-5 mb-3 text-muted">© 2017–2022</p>
        </form>
    </main>
</body>
@endsection


    
  

