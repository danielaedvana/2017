<table>
    <tr>
        <th>MInhas Tarefas</th>
    </tr>
    <?php foreach ($tarefas as $tarefa): ?>
        <tr>
            <td><?php echo $tarefa["titulo"]?></td>
            <td><?php echo $tarefa["descricao"]?></td>
            <td><?php echo ($tarefa["concluida"] ? "sim" : "não") ?></td>
        </tr>
    <?php endforeach;?>
</table>