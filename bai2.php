<html>
    <body>
    <form  method="post" name="form">
        <input type="text" placeholder="Tu khoa..." name="nhaptukhoa">
        <input type="submit" value="Tim" name="submit">
    </form>
    </body>
</html>

<?php
    if(!empty($_POST['nhaptukhoa']))
    {
        $ten =$_POST['nhaptukhoa'];
        echo("Ket qua:".$ten);
    }
 else {
        echo("Moi nhao vao text tu khoa");
}
?>