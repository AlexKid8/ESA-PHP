<?php

function Task(array $task): string
{
    $id = $task[0];
    $content = $task[1];
    $status = $task[2];
    $priority = $task[4] ? $task[4] : "default";
    $priorityHigh = $priority === "1" ? 'selected' : '';
    $priorityDefault = $priority === "2" ? 'selected' : '';
    $priorityLow = $priority === "3" ? 'selected' : '';
    $unchecked = "&#x2B1C";
    $checked = "&#x2705;";
    $statusMark = $status ? $checked: $unchecked;
    $del = $status ? '<del>' : '';
    $delEnd = $status ? '</del>' : '';

    return "
<article>
    <div>
        <form method='post' action='../../Controller/toggle.php'>
            <input type='hidden' name='invertStatusId' value='" . $id . "'>
            <input type='hidden' name='actualStatus' value='" . $status . "'>
            <input type='submit' value='" . $statusMark . "'>
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
                        <label for='editedPriority'>Edit Priority</label>
                        <select name='editedPriority'>
                            <option value='1' " . $priorityHigh . ">High</option>
                            <option value='2' " . $priorityDefault . ">Default</option>
                            <option value='3' " . $priorityLow . ">Low</option>
                        </select>
                        <input type='hidden' name='editedId' value='" . $id . "'>
                        <label for='editedContent'>Edit task</label>
                        <input type='text' name='editedContent' value='" . $content . "' required>
                    </div>
                    <div>
                        <input type='submit' value='Save Edit'>
                    </div>
                </form>
            </div>
            <div>
                <button onclick='edit". $id . ".close()'>Cancel Edit</button>
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
                </form>
            </div>
            <div>
                <button onclick='delete". $id . ".close()'>Cancel Delete</button>
            </div>
        </dialog>
    </div>
</article>
";
}