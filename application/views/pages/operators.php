<h1>Operators</h1>

<a href="?c=operator&m=addOperatorSubmit"><button class="btn btn-default">Nieuwe operator aanmaken</button></a> <br/><br/>

<table class="table table-hover">
    <tr>
        <th>User ID</th>
        <th>Naam</th>
        <th>Mail</th>
        <th>Meer</th>
    </tr>

    <?php foreach($this->getOperators as $operator) : ?>

    <tr>
        <td><?= $operator->id ?></td>
        <td><?= $operator->firstname ?> <?php if($operator->middlename != NULL ){echo $operator->middlename;} ?> <?= $operator->lastname ?></td>
        <td><?= $operator->mail ?></td>
        <td><u>Klik</u></td>
    </tr>

    <?php endforeach; ?>
</table>