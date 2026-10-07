<?php
require_once 'proteger.php';
cabecalho('Central');
?>
<p>Bem-vindo, <?= e($_SESSION['usuario_nome']) ?>!</p>
<p>Use o menu para cadastrar responsáveis, pacientes e agendamentos.</p>
<form action="logout.php" method="post">
<input type="hidden" name="csrf" value="<?= e(token()) ?>">
<button>Sair do sistema</button>
</form>
<?php rodape(); ?>