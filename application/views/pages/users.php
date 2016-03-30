<h1>Users</h1>

<a href="?c=index&m=addUserSubmit"><button class="btn btn-default">Zelf user toevoegen</button></a> <br/><br/>

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
            <td><?php $user->id    ?></td>
            <td><?php $user->vnaam ?></td>
            <td><?php $user->achternaam ?></td>
            <td><?php $user->bedrijf ?></td>
            <td><u>Klik</u></td>
        </tr>

    <?php endforeach; ?>


    <tr>
        <td>1</td>
        <td>Dirk</td>
        <td>Jansen</td>
        <td>Compra</td>
        <td><u>Klik</u></td>
    </tr>
</table>