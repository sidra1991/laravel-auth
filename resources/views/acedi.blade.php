@include('portions.head')
<form action="">
    @csrf
    <h2>Accedi al tuo account</h2>
    <label for="email">Indirizzo e-mail o nome utente</label>
    <input type="email">
    <a href="#">Continuando, accetti i nostri Termini di servizio.</a>
    <button type="button" >continua</button>
    <hr>
    <h3>oppure</h3>
    <hr>
    <a href="#">gmail</a>
    <a href="#">apple</a>
    <p>Continuando con Google o Apple senza un account WordPress.com, creerai un nuovo account accettando i nostri Termini di servizio.</p>
</form>
<a href="#"> crea un acaunt </a>
<hr>
<a href="#"> Inviami una e-mail con il link di accesso</a>
<hr>
<a href="#"> Hai dimenticato la tua password?</a>
<hr>
<a href="/"> Ritorna su WordPress.com</a>
<hr>
