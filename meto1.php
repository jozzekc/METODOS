<h2>METODO POST</h2>

<form  method="POST" >
    NOMBRE: <input type="text" name="a"  />
    APELLIDOS: <input type="text" name="b"  />
    <input type="submit" name"" value="Enviar" />
</form>
<?php
if ($_POST){
$dato[0]= $_POST ['a'];
$dato[1]= $_POST ['b'];
}
echo " SU NOMBRE ES: $dato[0] <br>";
echo " SUS APELLIDOS SON: $dato[1] ";

 ?>
