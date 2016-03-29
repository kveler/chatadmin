<h1>User toevoegen</h1><br/>

<form method="post" style="width:40%">
    <div class="form-group">
        <label>Voornaam</label>
        <input name="voorname" type="text" class="form-control" id="voornaam" placeholder="Voornaam" required>
    </div>
    <div class="form-group">
        <label>Tussenvoegsel</label>
        <input name="tuzzenvoegsel" type="text" class="form-control" id="tussenv" placeholder="Tussenvoegsel">
    </div>
    <div class="form-group">
        <label>Achternaam</label>
        <input name="lastname" type="text" class="form-control" id="achternaam" placeholder="Achternaam" required>
    </div>
    <div class="form-group">
        <label>Bedrijf</label>
        <input name="company" type="text" class="form-control" id="bedrijf" placeholder="Bedrijf">
    </div>
    <div class="form-group">
        <label>Emailadres</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="Emailadres" required>
    </div>
    <input name="addUserSubmit" type="submit" class="btn btn-default"></input>
</form><br/>
<a href="?c=index&m=page&a=users"><button class="btn btn-default">Terug</button></a>