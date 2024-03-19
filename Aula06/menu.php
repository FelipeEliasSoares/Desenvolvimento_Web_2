
<ul class="nav nav-pills">
  <li class="nav-item"><a href="inicio.php" class="nav-link <?php echo (basename($_SERVER['SCRIPT_FILENAME']) == 'inicio.php') ? 'active' : ''; ?>">Início</a></li>
  <li class="nav-item"><a href="sobre.php" class="nav-link <?php echo (basename($_SERVER['SCRIPT_FILENAME']) == 'sobre.php') ? 'active' : ''; ?>">Sobre</a></li>
  <li class="nav-item"><a href="faq.php" class="nav-link <?php echo (basename($_SERVER['SCRIPT_FILENAME']) == 'faq.php') ? 'active' : ''; ?>">FAQs</a></li>
  <li class="nav-item"><a href="contato.php" class="nav-link <?php echo (basename($_SERVER['SCRIPT_FILENAME']) == 'contato.php' || 'contato_destino.php') ? 'active' : ''; ?>">Contato</a></li>
</ul>
