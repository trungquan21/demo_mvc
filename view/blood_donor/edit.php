<div style="color: red">
    <?php echo $error; ?>
</div>
<form action="" method="post">
    Name:
    <input type="text"
           name="name"
           value="<?php
           echo isset($_POST['name']) ? $_POST['name'] : $book['bd_name']?>"
    />
    <br />
    sex:
    <input type="text"
           name="sex"
           value="<?php
           echo isset($_POST['sex']) ? $_POST['sex'] : $book['bd_sex']?>"
    />
    <br />
    age:
    <input type="text"
           name="age"
           value="<?php
           echo isset($_POST['age']) ? $_POST['age'] : $book['bd_age']?>"
    />
    <br />
    <input type="submit" name="submit" value="Update" />
</form>