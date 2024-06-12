<?php
function Task($task){
    $taskArticle =
        "<article id='" . $task[0] . "'>
            <p>" . $task[1] . "</p>
            <div>
                <button onclick=\"edit.showModal()\">Edit</button>
                <dialog id='edit'>
                    <form method=\"post\" action='../src/editTask.php'>
                        <input type=\"text\" value=\"\">
                        <input type=\"submit\" value=\"save edit\">
                    </form>
                </dialog>
                <form method=\"post\" action=\"../src/editTask.php\">
                    <input type='hidden' name='id' value='" . $task[0] . "'>
                    <input type=\"submit\" value=\"Edit\" >
                </form>
                <form method=\"post\" action=\"../src/deleteTask.php\">
                    <input type='hidden' name='id' value='" . $task[0] . "'>
                    <input type=\"submit\" value=\"Delete\" onclick=\"return confirm('Are you sur you wanna delete " . $task[1] . "?')\" >
                </form>
            </div>
        </article> ";
    return $taskArticle;

}