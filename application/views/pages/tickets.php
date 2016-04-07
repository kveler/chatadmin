<h1>Tickets</h1>

<a href="?c=index&m=addTicketSubmit"><button class="btn btn-default">Nieuwe ticket aanmaken</button></a> <br/><br/>

<table class="table table-hover">
    <tr>
        <th>Ticket ID</th>
        <th>Naam</th>
        <th>Datum</th>
        <th>Ticket</th>
        <th>Opgelost?</th>
    </tr>

    <?php foreach($this->getTickets as $ticket) : ?>

        <tr>
            <td><?= $ticket->id    ?></td>
            <td><?= $ticket->vnaam ?></td>
            <td><?php $t = $ticket->date; echo(date("d-m-Y",$t)); ?></td>
            <td><?php echo substr($ticket->ticket, 0,50). '...'; ?></td>
            <td><?php if($ticket->solved == 1){echo"<span class='glyphicon glyphicon-ok'></span>";}else{echo"<span class='glyphicon glyphicon-remove'></span>";} ?></td>
            <td><a href="?c=index&m=getOneTicketData&a=<?= $ticket->id ?>">Klik</a></td>
        </tr>

    <?php endforeach; ?>
</table>