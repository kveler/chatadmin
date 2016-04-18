<h1>Chats</h1>

<table class="table table-hover">
    <tr>
        <th>Chat ID</th>
        <th>Naam User</th>
        <th>Naam operator</th>
        <th>Chat</th>
    </tr>
    
    <?php foreach($this->getChat as $chat) : ?>

        <tr>
            <td><?= $chat->id ?></td>
            <td><?= $chat->user_id ?></td>
            <td><?= $chat->operator_id ?></td>
            <td><u>Klik</u></td>
        </tr>

    <?php endforeach; ?>

</table>