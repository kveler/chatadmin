<h1>Users</h1>

<a href="?c=user&m=addUserSubmit"><button class="btn btn-default">Zelf user toevoegen</button></a> <br/><br/>

<table class="table table-hover">
    <tr>
        <th>User ID</th>
        <th>Naam</th>
        <th>Achternaam</th>
        <th>Bedrijf</th>
        <th>Meer</th>
    </tr>
    <?php foreach($this->getUsers as $user) : ?>

        <tr>
            <td><?= $user->user_id ?></td>
            <td><?= $user->vnaam ?></td>
            <td><?= $user->achternaam ?></td>
            <td><?= $user->bedrijf ?></td>
            <td><a href="?c=user&m=getOneUserData&a=<?= $user->user_id ?>">Klik</a></td>
        </tr>

    <?php endforeach; ?>

</table>