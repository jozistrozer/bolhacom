<?php
include_once 'header.php';
include_once 'db.php';

$id = $_GET['id'];
$query = 'select * from categories where id = ?';
$stmt = $pdo->prepare($query);
$stmt->execute([$id]);
$result = $stmt->fetch();

$title       = $result['title'];
$description = $result['description'];
?>


<form action="category_update.php" method="POST">
    <h1 class="h3 mb-3 fw-normal">Uredi kraj</h1>
    <input type="hidden" name="ident" id="hiddenField" value="<?php echo $id ?>" />

    <div class="form-floating">
        <?php
        echo '<input type="text" name="title" required="required" class="form-control" id="floatingInput" value="'.$title.'" />';
        ?>
        <label for="floatingInput">Ime kategorije</label>
    </div>

    <div class="form-floating">
        <?php
        echo '<input type="text" name="description" required="required" class="form-control" id="floatingInput" value="'.$description.'"/>'
        ?>
        <label for="floatingPassword">Opis kategorije</label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="submit">Shrani</button>
</form>

<?php
include_once 'footer.php';
?>