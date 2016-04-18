<h1>User toevoegen</h1><br/>

<div class="alert alert-success" role="alert">
    <strong>Nieuwe user is aangemaakt!</strong>
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
        <label>Bedrijf</label>
        <input name="bedrijf" type="text" class="form-control" id="bedrijf" placeholder="Bedrijf">
    </div>
    <div class="form-group">
        <label>Emailadres</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="Emailadres" required>
    </div>
    <input name="addUserSubmit" type="submit" class="btn btn-default">
</form><br/>
<a href="?c=user&m=getUserData"><button class="btn btn-default">Terug</button></a>