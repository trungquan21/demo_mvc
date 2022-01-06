<h1>
    Thêm mới nguoi
</h1>

<!--</form>-->
<div style="color: red">
    <?php echo $error; ?>
</div>
<form method="post" action="">
    Name :
    <input type="text" name="name" value="" />
    <br />
    Sex:
    <input type="text" name="sex" value="" />
    <br />
    Age:
    <input type="text" name="age" value="" />
    <br />
    
    <input type="submit" name="submit" value="Save" />
</form>