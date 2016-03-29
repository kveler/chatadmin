<h1>Ticket toevoegen</h1><br/>

<form method="post" style="width:40%">
    <div class="form-group">
        <label>User ID</label>
        <input name="userid" type="number" class="form-control" id="userid" placeholder="User ID" required>
    </div>
    <div class="form-group">
        <label>Ticket info</label>
        <input name="ticket" type="textarea" class="form-control" id="ticket" placeholder="Ticket info...">
    </div>
    <input name="addTicketSubmit" type="submit" class="btn btn-default" />
</form><br/>
<a href="?c=index&m=page&a=tickets"><button class="btn btn-default">Terug</button></a>