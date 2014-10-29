<h1>Add User</h1>
<form class="form-signin" role="form" method="POST">
  <input type="text" class="form-control" placeholder="Nickname" required="" autofocus="" name="nickname">
  <input type="email" class="form-control" placeholder="Mail" required="" autofocus="" name="mail">
  <input type="password" class="form-control" placeholder="Password" required="" name="password">
  <input type="password" class="form-control" placeholder="Confirme password" name="passwordConfirm">
  <select class="form-control" name="role">
      <?php foreach ($role as $key => $value): ?>
        <option value="<?php echo $value->id ?>"><?php echo $value->name ?></option>
    <?php endforeach; ?>
  </select>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Ajouter</button>
</form>