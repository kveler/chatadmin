<h1>Operators</h1>

<button class="btn btn-default">Nieuwe operator aanmaken</button> <br/><br/>

<table class="table table-hover">
    <tr>
        <th>User ID</th>
        <th>Naam</th>
        <th>Meer</th>
    </tr>

    <?php foreach($this->operators as $operator) : ?>

    <tr>
        <td><?= $operator->id ?></td>
        <td><?= $operator->vnaam ?> <?php if($operator->tussenv != NULL ){echo $this->tussenv;} ?> <?= $operator->achternaam ?></td>
        <td><u>Klik</u></td>
    </tr>

    <?php endforeach; ?>
</table>