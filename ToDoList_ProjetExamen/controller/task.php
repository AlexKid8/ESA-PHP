<?php
function Task($task): string
{
   return "
<article>
    <div>
    
    </div>
    <div>
    
    </div>
    <div>
        <button onclick='delete.showModal()'>Delete</button>
        <dialog id='delete'>
            <form method='post' action='./deleteTask.php'>
                <input type='hidden' value='" . $task[0] ."'>
                <input type='button' value='Cancel'>
                <input type='submit' value='Delete'>    
            </form>
        </dialog>
    </div>
</article>
";
}

/* <del>	Defines text that has been deleted from a document */