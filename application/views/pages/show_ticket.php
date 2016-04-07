<h1>Ticket</h1>

<strong>ID van user</strong><br/>
<?= $this->ticket->vnaam ?> <br/><br/>
<strong>Ticket beschrijving</strong> <br/>
<?= $this->ticket->ticket ?> <br/><br/>
<strong>Opgelost?</strong><br/>
<?php if($this->ticket->solved == 0){echo "<strong>Nee</strong>";} else {echo "<strong>Ja</strong>";}?>

<br/> <br/>

<a href="?c=index&m=getTicketData"><button class="btn btn-default">Terug</button></a>