<?php
include_once 'header.php';
?>


<form action="category_insert.php" method="POST">
    <h1 class="h3 mb-3 fw-normal">Dodaj kategorijo</h1>

    <div class="form-floating">
        <input type="text" name="title" required="required" class="form-control" id="floatingInput" />
        <label for="floatingInput">Vnesi ime kategorije</label>
    </div>

    <div class="form-floating">
        <textarea name="description" required="required" class="form-control" id="floatingInput" rows="3" ></textarea>
        <label for="floatingTextArea">Vnesi opis kategorije</label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="submit">Dodaj</button>
</form>

<?php
include_once 'footer.php';
?>