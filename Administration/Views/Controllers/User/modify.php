<div class="container">

  <div class="page-content">

    <!-- Heading -->
    <div class="single-head">
      <!-- Heading -->
      <h3 class="pull-left"><i class="fa fa-users lblue"></i> Utilisateurs</h3>
      <!-- Bread crumbs -->
      <div class="breads pull-right">
        <strong>Nav</strong> : <a href="/admin/">Home</a> / <a href="/admin/user">User</a> / Modfication
      </div>
      <div class="clearfix"></div>
    </div>

    <!-- Users page -->
    <div class="page-users">
      <!-- Nav tab -->
      
      <div class="page-tabs">
        <!-- Tab panes -->
         <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          <li ><a href="/admin/user" class="br-red" ><i class="fa fa-user red"></i> Utilisateurs</a></li>
          <li class="active"><a href="#addnew" class="br-red" data-toggle="tab" aria-expanded="true"><i class="fa fa-pencil red"></i> Modification</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">

          <!-- Add new user -->
          <div class="tab-pane fade active in" id="addnew">
            <h4>Modification</h4>
<?php if($action) :?>
            <p>L'utilisateur à bien été modifié</p>
<?php else :?>
            <form class="form-horizontal" role="form" method="POST">

              <div class="form-group">
                <label for="nickname" class="col-md-2 control-label">Nom d'utilisateur</label>
                <div class="col-md-10">
                  <input type="text" class="form-control" id="nickname" placeholder="Nom d'utilisateur" name='nickname' required="" value="<?php echo  $formValue->nickname ?>">
                </div>
              </div>

              <div class="form-group">
                <label for="email" class="col-md-2 control-label">Email</label>
                <div class="col-md-10">
                  <input type="email" class="form-control" id="email" placeholder="Email"  name='mail' required="" value="<?php echo  $formValue->mail ?>">
                </div>
              </div>

              <div class="form-group">
                <label for="password" class="col-md-2 control-label">Password</label>
                <div class="col-md-10">
                  <input type="password" class="form-control" id="password" placeholder="Password"  name='password' value="">
                  <p class="help-block">Ne complétez ce champ que si vous souhaitez modifié le mot de passe.</p>
                </div>
              </div>
              <div class="form-group">
                <label for="password" class="col-md-2 control-label">Confirmation Password</label>
                <div class="col-md-10">
                  <input type="password" class="form-control" placeholder="Confirme password" name="passwordConfirm" value="">
                </div>
              </div>

              <div class="form-group">
                <label for="dropdown" class="col-md-2 control-label">Role</label>
                <div class="col-md-10">
                  <select class="form-control" name="role">                    
                      <?php foreach ($role as $key => $value): ?>                      
                        <option value="<?php echo $value->id ?>" <?php if ($value->id == $formValue->id_role ){echo 'selected';}  ?>><?php echo $value->name ?></option>
                    <?php endforeach;?>
                  </select>
                </div>
              </div>


              <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                  <button type="submit" class="btn btn-info">Modifier</button>
                </div>
            </form>
            <?php endif;?>
          </div>
        </div> <!-- Tab panes End -->
      </div> <!-- Users page End -->

    </div>

  </div>
</div>

</div>


