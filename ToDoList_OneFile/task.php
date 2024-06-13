<?php
function Task(array $task): string
{
    $id = $task[0];
    $content = $task[1];
    $status = $task[2];
    $del = $status==='done'?'<del>':'';
    $delEnd = $status==='done'?'</del>':'';
    $unchecked = "&#x2B1C";
    $checked = "&#x2705;";
    $statusMark = $status ? $checked: $unchecked;
    /*
     * ⬜	11036	&#x2B1C	    White large square
     * ✅	9989	&#x2705	    Check mark button
     * ☐	9744	&#x2610	    BALLOT BOX
     * ☑	9745	&#x2611	    BALLOT BOX WITH CHECK
     * ✍	9997	&#x270D	    WRITING HAND
     * ❌	10060	&#x274C	    Cross mark
    */
    return "
<article>
    <div>
        <form method='post' action='./setTaskStatus.php'>
            <input type='hidden' value=''>
            <input type='submit' value='" . $statusMark . "'>
        </form>
    </div>
    <div>
        <p>" . $del . $content . $delEnd . "</p>
    </div>
        <div>
        <button onclick='edit". $id . ".showModal()'>&#x270D</button>
        <dialog id='edit" . $id . "'>
            <div>
                <form method='post' action='./editTask.php'>
                    <input type='hidden' value='" . $id . "'>
                    <input type='text' name='deleteId' value='" . $content . "'>
                    <input type='submit' value='Save Edit'>
                </form>
            </div>
            <div>
                <button onclick='edit". $id . ".close()'>Cancel Edit</button>
            </div>
        </dialog>
        <button onclick='delete" . $id . ".showModal()'>&#x274C</button>
        <dialog id='delete". $id . "'>
            <div>
                <p> Are you sure you want to delete : " . $content . " ?</p>
            </div>
            <div>
                <form method='post' action='./deleteTask.php'>
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