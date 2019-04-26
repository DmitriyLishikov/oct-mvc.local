<h2>All tasks</h2>
<!--<input type="button" value="add task" name="add_task"/>-->
<button id="add_task" type="button">add task</button>
<ul>
    <?php foreach ($this->tasks as $task): ?>
        <li> <?= $task['name'] ?></li>
    <?php endforeach; ?>
</ul>