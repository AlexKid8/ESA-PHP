

<main>
    <section>
        <form method="post" action="../Controller/add.php">
            <label for="newContent">Add a new task</label>
            <input type="text" id="newContent" name="newContent" placeholder="Type new task here" required>
            <label for='newPriority'>Priority</label>
            <select id="newPriority" name='newPriority'>
                <option value='high'>High</option>
                <option value='default' selected>Default</option>
                <option value='low'>Low</option>
            </select>
            <input type="submit" value="&#x2795">
        </form>
    </section>
    <?php require  "./View/modules/listSection.php"; ?>
</main>
