
<form method="POST" action="marks.php">
<div><input type="number" class="form-control" name="studentid" value = "<?php include("register.php"); $studentid ?>" placeholder="studentid" /></div>
    <div><input type="number" class="form-control" name="mark1" value="0" placeholder="mark 1"/></div>
    <div><input type="number" class="form-control" name="mark2" value="0" placeholder="mark 2"/></div>
    <div><input type="number" class="form-control" name="mark3"  value="0"placeholder="mark 3"/></div>
    <div><input type="number" class="form-control" name="mark4"  value="0" placeholder="mark 4"/></div>
    <div><button type="submit" name="csm">Ok</button></div>

</form>