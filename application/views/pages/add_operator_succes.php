<h1>Operator toevoegen</h1><br/>

<div class="alert alert-success" role="alert">
    <strong>Nieuwe operator is toegevoegd!</strong>
</div>

<form method="post" style="width:40%">
    <div class="form-group">
        <label>Voornaam</label>
        <input name="voornaam" type="text" class="form-control" id="voornaam" placeholder="Voornaam" required>
    </div>
    <div class="form-group">
        <label>Tussenvoegsel</label>
        <input name="tussenvoegsel" type="text" class="form-control" id="tussenv" placeholder="Tussenvoegsel">
    </div>
    <div class="form-group">
        <label>Achternaam</label>
        <input name="achternaam" type="text" class="form-control" id="achternaam" placeholder="Achternaam" required>
    </div>
    <div class="form-group">
        <label>Emailadres</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="Emailadres" required>
    </div>
    <div class="form-group">
        <label>Inlognaam</label>
        <input name="inlognaam" type="text" class="form-control" id="inlognaam" placeholder="Inlognaam" required>
    </div>
    <div class="form-group">
        <label>Wachtwoord</label>
        <input name="wachtwoord" type="password" class="form-control" id="wachtwoord" placeholder="Wachtwoord" required>
    </div>
    <input name="addOperatorSubmit" type="submit" class="btn btn-default">
</form><br/>
<a href="?c=operator&m=getOperatorsData"><button class="btn btn-default">Terug</button></a>