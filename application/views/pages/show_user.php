<h1>User</h1>

<strong>ID</strong><br/>
<?= $this->user->user_id ?> <br/><br/>
<strong>Voornaam</strong><br/>
<?= $this->user->vnaam ?> <br/><br/>
<strong>Tussenvoegsel</strong><br/>
<?= $this->user->tussenv ?> <br/><br/>
<strong>Achternaam</strong><br/>
<?= $this->user->achternaam ?> <br/><br/>
<strong>Email</strong> <br/>
<?= $this->user->email ?> <br/><br/>
<strong>Bedrijf</strong><br/>
<?= $this->user->bedrijf ?> <br/><br/>
<strong>Bedrijf</strong><br/>
<?= $this->user->bedrijf ?> <br/><br/>
<strong>Aangemaakt op</strong><br/>
<?php $t = $this->user->aangemaakt; echo(date("d-m-Y",$t)); ?> <br/><br/>


<br/> <br/>

<a href="?c=user&m=getUserData"><button class="btn btn-default">Terug</button></a>
