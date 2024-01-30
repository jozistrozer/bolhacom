<?php
include_once 'header.php';
?>

<main class="form-signin w-100 m-auto">
  <form action="login_check.php" method="POST">
    <h1 class="h3 mb-3 fw-normal">Prijava</h1>

    <div class="form-floating">
      <input type="email" name="email" required="required" class="form-control" id="floatingInput" placeholder="ime@primer.si" />
      <label for="floatingInput">Vnesi e-pošto</label>
    </div>

    <div class="form-floating">
      <input type="password" name="pass" required="required" class="form-control" id="floatingPassword" placeholder="Password" />
      <label for="floatingPassword">Geslo</label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="submit">Prijavi</button>
  </form>

<?php
include_once 'footer.php';
?>