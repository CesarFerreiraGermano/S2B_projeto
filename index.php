<?php
include ("Login_funcoes.php");
if (usuarioEstaLogado()) {
   header("Location: Dashboard.php");

}else {
    include ("HomePage_header.php");
    include ("Login_modal.php");
    include ("HomePage_sectionPaginaInicial.php");
    include ("HomePage_sectionComoFunciona.php");
    include ("HomePage_sectionSobreNos.php");
    include ("HomePage_sectionContato.php");
    include("HomePage_footer.php");
}
?>