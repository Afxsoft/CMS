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
          <li class="active"><a href="#addnew" class="br-red" data-toggle="tab" aria-expanded="true"><i class="fa fa-pencil red"></i> Suppression</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">

          <!-- Add new user -->
          <div class="tab-pane fade active in" id="addnew">
            <h4>Suppression</h4>
            <?php if ($action) : ?>
                <p>L'utilisateur à bien été supprimer</>
                <?php else: ?>
                <form class="form-horizontal" role="form" method="POST">

                  <div class="form-group">
                    <div class="col-md-12">
                      <p>Voulez vraiment supprimer ?</p>
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="col-md-offset-2 col-md-10">
                      <button type="submit" class="btn btn-danger" name="submit" value="delete">Supprimer </button>
                    </div>
                </form>
            <?php endif; ?>
          </div>
        </div> <!-- Tab panes End -->
      </div> <!-- Users page End -->

    </div>

  </div>
</div>

</div>


