<div id="filtre_content" class="four columns">
	<div id=""><i class="fa fa-plus"></i></div>
	<div id=""><i class="fa fa-trash"></i></div>
	<div id=""><i class="fa fa-pencil"></i></div>
</div>
<div id="calendrier" class="ten columns">
	<div id="navigation">
		<div id="moisPrecedent" class="onglet"><i class="fa fa-arrow-circle-left"></i></div>
		<div id="mois_actuel" class="titre"></div>
		<div id="moisSuivant" class="onglet"><i class="fa fa-arrow-circle-right"></i></div>
		<div id="btn_show_filtre" class="onglet"><i class="fa fa-sliders"></i></div>
		<div id="btn_show_admin" class="onglet"><i class="fa fa-cog"></i></div>
		<span class="clear"></span>
	</div>
	<div id="tete">
		<div class="jour">L</div>
		<div class="jour">M</div>
		<div class="jour">M</div>
		<div class="jour">J</div>
		<div class="jour">V</div>
		<div class="jour">S</div>
		<div class="jour">D</div>
		<span class="clear"></span>
	</div>
	<div id="content"></div>
	<div id="list"></div>
</div>
<div id="admin_content" class="two columns">
	<div id="ajoutEventList"><i class="fa fa-plus"></i></div>
	<div id="suppEventList"><i class="fa fa-trash"></i></div>
	<div id="modifEventList"><i class="fa fa-pencil"></i></div>
</div>



<div id="popup_add_event" class="popup_block" method="post">
	<div class="close"><i class="fa fa-times"></i></div>
	<form id="add_event_form" novalidate>
		<div class="wrapper">
			<label for="titre">Titre</label>
			<input type="text" id="titre" name="titre" class="form-control"/>
		</div>
		<div class="wrapper">
			<label for="dateDebut">Date de départ : </label>
			<input type="text" id="dateDebut" name="dateDebut" class="chp-date form-control"/>
		</div>
		<div class="wrapper">
			<label for="dateFin">Date d'arrivée :</label>
			<input type="text" id="dateFin" name="dateFin" class="chp-date form-control"/>
		</div>
		<div class="wrapper">
			<label for="detail">Détails :</label>
			<textarea id="detail" name="detail" rows="3" class="form-control"></textarea>
		</div>
		<div class="wrapper">
			<label for="type">Type :</label>
			<select id="type" name ="type">
				<option value="type1">type 1</option>
				<option value="type2">type 2</option>
				<option value="type3">type 3</option>
			</select>
		</div>
		<input type="submit" id="bnt_add_event" formnovalidate="formnovalidate" value="Ajouter" class="btn large">
	</form>
</div>

<div id="popup_supp_event" class="popup_block" method="post">
	<div class="close"><i class="fa fa-times"></i></div>
	<form id="supp_event_form" novalidate>
		<div id="eventListContent">
			
		
		
		</div>
		<input type="submit" id="bnt_supp_event" formnovalidate="formnovalidate" value="Supprimer" class="btn large">
	</form>
</div>
<div id="fade"></div>