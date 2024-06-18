<section>
    <form method="post" action="../Controller/add.php">
        <label for="newContent">Add a new task</label>
        <input type="text" id="newContent" name="newContent" placeholder="Type new task here" required>
        <label for='newPriority'>Priority</label>
        <select id="newPriority" name='newPriority'>
            <option value='1'>High</option>
            <option value='2' selected>Default</option>
            <option value='3'>Low</option>
        </select>
        <input type="submit" value="&#x2795">
    </form>
</section>
