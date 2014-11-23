<div class="container">

  <div class="page-content">

    <!-- Heading -->
    <div class="single-head">
      <!-- Heading -->
      <h3 class="pull-left"><i class="fa fa-users lblue"></i> Actualité</h3>
      <!-- Bread crumbs -->
      <div class="breads pull-right">
        <strong>Nav</strong> : <a href="/admin/">Home</a> / <a href="/admin/content">Content</a> / Actualité
      </div>
      <div class="clearfix"></div>
    </div>

    <div class="page-users">
      <!-- Nav tab -->
      <div class="page-tabs">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          <li class="active"><a href="#ausers" class="br-lblue" data-toggle="tab"><i class="fa fa-user lblue"></i> Actualités</a></li>
          <li><a href="/admin/content/addArticle" class="br-red" ><i class="fa fa-plus red"></i> Ajouter une actualité</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane fade active in" id="ausers">
            <div class="table-responsive">
              <table class="table table-bordered">
                <tbody><tr class="active">
                    <th>Id</th>
                    <th>Title</th>
                    <th>alias</th>
                    <th>Update</th>
                  </tr>
                  <?php
                    foreach ($news as $newscontent) {
                      echo '<tr>';
                      echo '<td>' . $newscontent->id . '</td>';
                      echo '<td>' . $newscontent->title . '</td>';
                      $date = new DateTime($newscontent->update);
                      echo '<td> le ' . $date->format( 'd/m/Y' ) . ' à ' . $date->format( 'H:i:s' ) . '</td>';
                      echo '<td class="action"><a href="/admin/content/modifyNews/' . $newscontent->id . '" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></a>';
                      echo '<a href="/admin/content/deleteNews/' . $newscontent->id . '" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a></td>';
                      echo '</tr>';
                  }
                  ?>
                </tbody>
              </table>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div> 

    </div>

  </div>
</div>

</div>