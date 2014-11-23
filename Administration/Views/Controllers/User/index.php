<div class="container">

  <div class="page-content">

    <!-- Heading -->
    <div class="single-head">
      <!-- Heading -->
      <h3 class="pull-left"><i class="fa fa-users lblue"></i> Utilisateurs</h3>
      <!-- Bread crumbs -->
      <div class="breads pull-right">
        <strong>Nav</strong> : <a href="/admin/">Home</a> / User
      </div>
      <div class="clearfix"></div>
    </div>

    <!-- Users page -->
    <div class="page-users">
      <!-- Nav tab -->
      <div class="page-tabs">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          <li class="active"><a href="#ausers" class="br-lblue" data-toggle="tab"><i class="fa fa-user lblue"></i> Utilisateurs</a></li>
          <li><a href="/admin/user/add" class="br-red" ><i class="fa fa-plus red"></i> Ajouter un nouvel utilisateur</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane fade active in" id="ausers">
            <!-- Users table -->
            <div class="table-responsive">
              <table class="table table-bordered">
                <tbody><tr class="active">
                    <th>Id</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Date d'ajout</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                  <?php
                  foreach ($user as $users) {
                      echo '<tr>';
                      echo '<td>' . $users->id . '</td>';
                      echo '<td>' . $users->nickname . '</td>';
                      echo '<td>' . $users->mail . '</td>';
                      $date = new DateTime($users->update);
                      echo '<td> le ' . $date->format( 'd/m/Y' ) . ' à ' . $date->format( 'H:i:s' ) . '</td>';
                      echo '<td>' . $users->id_role . '</td>';

                      echo '<td class="action"><a href="/admin/user/modify/' . $users->id . '" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>';
                      echo '<a href="/admin/user/delete/' . $users->id . '" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a></td>';
                      echo '</tr>';
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div> <!-- Users page End -->

    </div>

  </div>
</div>

</div>


