<h1>Tickets</h1>

<a href="?c=index&m=addTicketSubmit"><button class="btn btn-default">Nieuwe ticket aanmaken</button></a> <br/><br/>

<table class="table table-hover">
    <tr>
        <th>Ticket ID</th>
        <th>Naam</th>
        <th>Datum</th>
        <th>Ticket</th>
    </tr>

    <?php foreach($this->getTickets as $ticket) : ?>

        <tr>
            <td><?php $ticket->id    ?></td>
            <td><?php $ticket->user_id ?></td>
            <td> </td>
            <td><?php $ticket->ticket ?></td>
            <td><u>Klik</u></td>
        </tr>

    <?php endforeach; ?>


    <tr>
        <td>1</td>
        <td>Dirk Jansen</td>
        <td>29/3/2016</td>
        <td><u>Klik</u></td>
    </tr>
</table>