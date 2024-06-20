<?php

function Task(array $task): string
{
    $id = $task[0];
    $content = $task[1];
    $status = $task[2];
    $priority = $task[4] ?: "default";
    $color = $task[5] ?: "";
    $priorityHigh = $priority === "1" ? 'selected' : '';
    $priorityDefault = $priority === "2" ? 'selected' : '';
    $priorityLow = $priority === "3" ? 'selected' : '';
    $unchecked = "&#x2B1C";
    $checked = "&#x2705;";
    $statusMark = $status ? $checked: $unchecked;
    $del = $status ? '<del>' : '';
    $delEnd = $status ? '</del>' : '';

    return "
<br>
<article>
    <div>
        <form method='post' action='../../Controller/toggle.php'>
            <input type='hidden' name='invertStatusId' value='" . $id . "'>
            <input type='hidden' name='actualStatus' value='" . $status . "'>
            <input type='submit' value='" . $statusMark . "' style='background-color:" . $color . "'>
        </form>
    </div>
    <div class='task'>
        <p>" . $del . $content . $delEnd . "</p>
    </div>
        <div>
        <button onclick='edit". $id . ".showModal()'>&#x270D</button>
        <dialog id='edit" . $id . "'>
            <div>
                <form method='post' action='../../Controller/edit.php'>
                    <div class='inputs'>
                        <input type='hidden' name='editedId' value='" . $id . "'>
                        <label for='editedContent'>Edit task</label>
                        <input type='text' name='editedContent' value='" . $content . "' required>
                        <label for='editedPriority'>Edit Priority</label>
                        <select name='editedPriority'>
                            <option value='1' " . $priorityHigh . ">High</option>
                            <option value='2' " . $priorityDefault . ">Default</option>
                            <option value='3' " . $priorityLow . ">Low</option>
                        </select>
                        <label for='editedColor'>Edit Color</label>
                        <input type='color' name='editedColor' value='" . $color . "'>
                    </div>
                    <div>
                        <input type='submit' value='Save Edit'>
                    </div>
                    <div>
                        <input type='submit' formmethod='dialog' value='Cancel Edit'>
                    </div>
                </form>
            </div>
        </dialog>
        <button onclick='delete" . $id . ".showModal()'>&#x274C</button>
        <dialog id='delete". $id . "'>
            <div>
                <p> Are you sure you want to delete : <br>" . $content . " ?</p>
            </div>
            <div>
                <form method='post' action='../../Controller/delete.php'>
                    <input type='hidden' name='deleteId' value='" . $id . "'>                    
                    <input type='submit' value='Confirm Delete'>
                    <input type='submit' formmethod='dialog' value='Cancel Delete'>
                </form>
            </div>
        </dialog>
    </div>
</article>
<br>
";
}