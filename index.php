<DOCKTYPE html>
<html>
     <head lang="pt-br">
     <title>formulario</title>
     <meta charset="utf-8">
     </head>

<bory>
<form>
<input type="text" name="formulario">
</form>

<?php

if (isset($_COOKIE['nome']) && isset($_GET['deletecookie'])){
    unset($_COOKIE['nome']);
    echo '<script>alert("cookie deletado")
    </script>'; 
 
  
}else{ 
    if(isset($_COOKIE['nome'])){
        echo "<a href='?deletecookie=true'><button>Deletar Cookie</button></a>"; 
    }else{ 

?>


<?php } } ?>
    

</body>
</html>




