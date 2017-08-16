<h2>METODO GET</h2>

<form  method="get" >
    NOMBRE: <input type="text" name="a"  />
    APELLIDOS: <input type="text" name="b"  />
    <input type="submit" name"" value="Enviar" />
</form>
<?php
if ($_GET){
$dato[0]= $_GET ['a'];
$dato[1]= $_GET ['b'];
}
echo " SU NOMBRE ES: $dato[0] <br>";
echo " SUS APELLIDOS SON: $dato[1] ";

 ?>
