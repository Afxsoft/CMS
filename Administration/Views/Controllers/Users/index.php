<a href="/admin/adduser">+ Ajouter un utilisateur</a>
<table class="table table-striped">
  <thead>
    <tr>
      <?php
      foreach ($user[0] as $label => $value) {
        echo '<th>' . $label . '</th>';
      }
      ?>
      <th>Modifier</th>
      <th>Supprimer</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($user as $users) {
      echo '<tr>';
      foreach ($users as $key => $value) {
        echo '<td>' . $value . '</td>';
      }
      echo '<td><a href="/admin/deleteuser'.$users->id.'">O</a></td>';
      echo '<td><a href="/admin/modifyuser/'.$users->id.'">X</a></td>';
      echo '</th>';
    }
    ?>
  </tbody>
</table>


