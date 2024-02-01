<?php
    include_once('session.php');
    admin();
    include_once 'header.php';
?>
<script>
    function odstrani_kraj(p_id){
        if (confirm('Si ziher?')) {
            $.get('city_delete.php', {id:p_id});
            location.reload();
        }
    }

    function uredi_kraj(p_id) {
      window.location.href = 'city_edit.php?id='+p_id;
    }

</script>
<a class="btn btn-primary" href="city_add.php" role="button" style="margin-bottom: 25px;">Dodaj kraj</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Naziv kraja</th>
      <th scope="col">Poštna številka</th>
      <th scope="col">Akcija</th>
    </tr>
  </thead>
  <tbody>
    <?php
    // Pridobivanje podatkov iz baze
    include_once 'db.php';
    $query = "select * from cities order by title";
    $stmt  = $pdo->prepare($query);
    $stmt->execute();
    $cities = $stmt->fetchAll();

    $i = 1;
    foreach($cities as $city) {
        $id = $city['id'];
        echo '<tr>';
        echo '  <th scope="row">'.$i.'</th>';
        echo '  <td>'.$city['title'].'</td>';
        echo '  <td>'.$city['post_number'].'</td>';
        echo '  <td><button class="btn btn-primary" type="submit" onclick="uredi_kraj('.$id.')"><i class="bi bi-pencil"></i></button>';
        echo '      <button type="button" class="btn btn-danger" style="margin-left:5px;" onclick="odstrani_kraj('.$id.')"><i class="bi bi-trash"></i></button>';
        echo '</td>';
        echo '</tr>';
        $i++;
    }
    /*

    */

    ?>
  </tbody>
</table>

<?php
    include_once 'footer.php';
?>