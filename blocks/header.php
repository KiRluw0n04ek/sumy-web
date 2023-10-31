<div class="container">
  <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <div class="col-md-3 mb-2 mb-md-0">
      <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
        <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>
    </div>

    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
      <li><a href="/index.php" class="nav-link px-2 link-secondary"><h6>Головна</h6></a></li>
      <li><a href="/about.php" class="nav-link px-2 link-secondary"><h6>Контакти</h6></a></li>
    </ul>

    <div class="col-md-3 text-end">
      <?php
        if($_COOKIE['User'] == 'YES'):
      ?>
      <a class = "btn btn-outline-primary" href="/auth.php">Кабінет користувача</a>
    <?php else: ?>
      <a class = "btn btn-outline-primary" href="/auth.php">Ввійти</a>
    <?php endif; ?>
    </div>
  </header>
</div>
