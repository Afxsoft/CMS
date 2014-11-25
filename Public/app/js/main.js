var keyMois = 0;
	
var CurrentDate = new Date();

var tableauMois =new Array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
var tableauJour =new Array("Dimanche", "Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
var tableauFiltre =new Array();

var tabChauffeur = new Array("Jean", "Michel", "Jacques", "Rosette");
var tabType = new Array("scolaire", "transport", "culturel", "associatif");
var tabVehicule = new Array("bus", "mini-bus", "mini-van");

function getNbJours(date){
	return new Date(date.getFullYear(), date.getMonth()+1, -1).getDate()+1;
}

function firstDayOfMonth(date){
	y = date.getFullYear(), m = date.getMonth();
	var firstDay = new Date(y, m, 1);
	return firstDay.getDay();
}

function firstDayOfMonth(date){
	y = date.getFullYear(), m = date.getMonth();
	var firstDay = new Date(y, m, 1);
	return firstDay.getDay();
}

function lastDayOfMonth(date){
	return new Date(date.getFullYear(), date.getMonth() + 1, 0);
}

function lastDayOfYear(date){
	return new Date(date.getFullYear(), 11, 31)
}

function diffdate(d1,d2){
	var WNbJours = d2.getTime() - d1.getTime();
	return Math.ceil(WNbJours/(1000*60*60*24));
}

function tempsVoyage(date1, date2){
	var diff = {}                           // Initialisation du retour
	var tmp = date2 - date1;

	tmp = Math.floor(tmp/1000);             // Nombre de secondes entre les 2 dates
	diff.sec = tmp % 60;                    // Extraction du nombre de secondes

	tmp = Math.floor((tmp-diff.sec)/60);    // Nombre de minutes (partie entière)
	diff.min = tmp % 60;                    // Extraction du nombre de minutes

	tmp = Math.floor((tmp-diff.min)/60);    // Nombre d'heures (entières)
	diff.hour = tmp % 24;                   // Extraction du nombre d'heures

	tmp = Math.floor((tmp-diff.hour)/24);   // Nombre de jours restants
	diff.day = tmp;

	return diff;
}

function getCurrentMonth(){
	return CurrentDate.getMonth();
}

function getCurrentYear(){
	return CurrentDate.getFullYear();
}

function isCurrentMonth(date){
	return date.getMonth() == getCurrentMonth() && date.getFullYear() == getCurrentYear();
}

function getActualDateCalendar(){
	return new Date($('#annee_actuelle').html(), $('#mois_actuel').attr('mois'), 1);
}

function dateFormatTransform(date){
	// format entrée aaaa-mm-jj hh:mm:ss
	var date_heure = date.split(" ");
	var date = date_heure[0].split("-");
	var heure = date_heure[1].split(":");
	
	var IDs = new Array();
	IDs['annee'] = date[0];
	IDs['mois'] = date[1];
	IDs['jour'] = date[2];
	IDs['heure'] = heure[0];
	IDs['minute'] = heure[1];
	IDs['seconde'] = heure[2];
	return IDs;
}

function showeventList(date, method, id){
	var num_firstDay = firstDayOfMonth(date)
	$('#content').html('');
	var html_calen = "";
	
	html_calen += '<div>';
	if(num_firstDay == 0){
		num_firstDay = 7;
	}
	for(j=1; j<num_firstDay; j++){
		html_calen += '<div class="jourDisable jour"></div>';
	}
	for(i=1; i<=getNbJours(date); i++){	
		
		var key_id =  i+'-'+(date.getMonth()+1)+'-'+date.getFullYear();
		
		if(i == date.getDate() && isCurrentMonth(date)){
			html_calen += '<div id="'+key_id+'" class="jour jourCourant">'+i+'</div>';
		}else{
			html_calen += '<div class="jour" id="'+key_id+'">'+i+'</div>';
		}
	}

	html_calen += '<span class="clear"></span>';	
	html_calen += '</div>';

	$('#content').append(html_calen);
	$('#mois_actuel').html(tableauMois[date.getMonth()]).attr('mois', date.getMonth());
	$('#annee_actuelle').html(date.getFullYear());
	
	if(!$('#calendrier').hasClass('filtre')){$('#filtre_content').html('');}
	
	$('#list').html('');
	$('.picto').remove();

	for(key in eventList){
		if (eventList.hasOwnProperty(key)) {
			var objEv = eventList[key];
			if($('#calendrier').hasClass('filtre')){
				
				if($('#calendrier').hasClass('chauffeur')){
					if(eventList[key]['chauffeur'] == $('#calendrier').attr('dt-fltr')){
						objEv = eventList[key];
					}else{
						continue;
					}
				}else{
					if(eventList[key]['type'] == $('#calendrier').attr('dt-fltr')){
						objEv = eventList[key];
					}else{
						continue;
					}				
				}
			}
			var dateTrD = dateFormatTransform(objEv["dateDebut"]);
			var dateTrF = dateFormatTransform(objEv["dateFin"]);
			if((date.getMonth()+1 != dateTrD['mois'] && date.getMonth()+1 != dateTrF['mois']) || (date.getFullYear() != dateTrD['annee'] && date.getFullYear() != dateTrF['annee'])){
				continue;
			}
			var d1 = new Date(dateTrD['annee'], dateTrD['mois']-1, dateTrD['jour']);
			var d2 = new Date(dateTrF['annee'], dateTrF['mois']-1, dateTrF['jour']);
			
			if(CurrentDate > d2){
				continue;
			}

			affichageListCroissant(dateTrD, objEv);

			var newloop = 1;
			for(i=0; i<=diffdate(d1, d2); i++){
				if(d1.getDate()+i > lastDayOfMonth(d1).getDate()){
					if(d2.getFullYear() > lastDayOfYear(d1).getFullYear()){
						var id_end = newloop+'-'+1+'-'+(d1.getFullYear()+1);
					}else{
						var id_end = newloop+'-'+(parseFloat(dateTrD['mois'])+1)+'-'+d1.getFullYear();
					}
					newloop++;
				}else{
					var id_end = parseFloat(d1.getDate()+i)+'-'+dateTrD['mois']+'-'+d1.getFullYear();
				}
				constructPicto($('#'+id_end), key);
			}	
		}
	}
	if(!$('#calendrier').hasClass('filtre')){$('#filtre_content').append(constructFiltreContent());}
	initSelectChauffeur();
	initSelectType();
	
	initClickJour();
}

function showEventListDetail(id){
	var dataValue = $('#'+id).find('.picto').attr('dt-event');
	$('#list').html('');
	if(typeof dataValue != "undefined"){
		var tab_attr = dataValue.split('-');
		for(key in tab_attr){
			var objEv = eventList[tab_attr[key]];
			var dateTrD = dateFormatTransform(objEv["dateDebut"]);
			affichageListCroissant(dateTrD, objEv);
		}
	}
}

function constructFiltreContent(objEv){
	if($('#calendrier').hasClass('chauffeur')){
		var KeyTab = tabChauffeur;
	}else{
		var KeyTab = tabType;
	}
	
	var htmlFiltre = "";
	for(i=0; i<KeyTab.length; i++){
		htmlFiltre += '<div class="filtre_block '+KeyTab[i]+'">';
			htmlFiltre += '<i class="fa fa-tag"></i><label for="'+i+'">'+KeyTab[i]+'</label><input type="checkbox" name="'+i+'" id="'+i+'"/>';
		htmlFiltre += '</div>';
	}
	return htmlFiltre;
}

function constructDetailLine(objEv){
	var htmlLine = "", jourTPS ="", heureTPS = "", minuteTPS = "";
	
	var dateTrD = dateFormatTransform(objEv["dateDebut"]);
	var dateTrF = dateFormatTransform(objEv["dateFin"]);
	
	var dt_dp = new Date(dateTrD['annee'], dateTrD['mois']-1, dateTrD['jour']); 
	var dt_ar = new Date(dateTrF['annee'], dateTrF['mois']-1, dateTrF['jour']); 
	
	var dd = new Date(dateTrD['annee'], dateTrD['mois']-1, dateTrD['jour'], dateTrD['heure'], dateTrD['minute']); 
	var da = new Date(dateTrF['annee'], dateTrF['mois']-1, dateTrF['jour'], dateTrF['heure'], dateTrF['minute']); 
	
	if(dt_dp < dt_ar){
		mm_jour = false;
	}else{
		mm_jour = true;
	}
		
	var date_depart = '<span>'+tableauJour[dd.getDay()].substr(0, 3)+' '+dateTrD['jour']+' '+tableauMois[dd.getMonth()].substr(0, 3)+"</span><br><span>"+dateTrD['heure']+'H'+dateTrD['minute']+'</div><div class="lieu">'+objEv['lieuDebut']+"</span>";
	var date_arrivee = "";
	var dt_date = dateTrD['annee']+dateTrD['mois']+dateTrD['jour']+dateTrD['heure']+dateTrD['minute'];
	
	if(!mm_jour){
	date_arrivee += '<span>'+tableauJour[da.getDay()].substr(0, 3)+' '+dateTrF['jour']+' '+tableauMois[da.getMonth()].substr(0, 3)+'</span><br>';
	}
	date_arrivee += '<span>'+dateTrF['heure']+'H'+dateTrF['minute']+'</div><div class="lieu">'+objEv['lieuFin']+'</span>';
	
	if(tempsVoyage(dd, da).day > 0){	jourTPS = tempsVoyage(dd, da).day+'j';	}
	if(tempsVoyage(dd, da).hour > 0){	heureTPS = tempsVoyage(dd, da).hour+'H';	}
	if(tempsVoyage(dd, da).min > 0){	minuteTPS = tempsVoyage(dd, da).min+'min';	}

	htmlLine += '<div class="detail_block '+tabType[objEv["type"]]+'" dt-date="'+dt_date+'">';
		htmlLine += '<div class="ligne titre"><span class="duree">'+jourTPS+heureTPS+minuteTPS+'</span>'+objEv['titre']+'</div>';
		htmlLine += '<div class="ligne vehicule">'+tabVehicule[objEv['vehicule']]+'</div>';
		htmlLine += '<div class="ligne depart"><div class="rond"></div><div class="barre"></div><div class="date">'+date_depart+'</div></div>';
		htmlLine += '<div class="clear"></div>';
		htmlLine += '<div class="ligne arrivee"><div class="rond"></div><div class="barre"></div><div></div><div class="date">'+date_arrivee+'</div></div>';
	htmlLine += '</div>';
	return htmlLine;
}

function constructPicto(element, id){
	if(typeof element.find('.picto').attr('dt-event') == "undefined"){
		element.append('<div class="picto"></div>');
		element.find('.picto').attr('dt-event', id);
	}else{
		var recup = element.find('.picto').attr('dt-event');
		recup += "-"+id;
		element.find('.picto').attr('dt-event', recup);
	}
}

// PERMET DE RANGER LA LISTE PAR ORDRE CROISSANT
function affichageListCroissant(dateTrD, objEv){
	var dt_date = dateTrD['annee']+dateTrD['mois']+dateTrD['jour']+dateTrD['heure']+dateTrD['minute'];
	var test_loop = false;
			
	if($('#list').find('.detail_block').length == 0){
		$('#list').append(constructDetailLine(objEv));
	}else{
		$('#list').find('.detail_block').each(function(){
			if(dt_date <= $(this).attr('dt-date') && !test_loop){
				$(this).before(constructDetailLine(objEv));
				test_loop = true;
			}else{
				if($(this).next().length == 0 && !test_loop){
					$(this).after(constructDetailLine(objEv));
					test_loop = true;
				}
			}
		});
	}
}

function initClickJour(){
	$('.jour').click(function(){
		if($(this).hasClass('jourDisable')){
			return;
		}
		$('.actif').removeClass('actif');
		$('.bck-jour').remove();
	
		var id_attr = $(this).attr('id');
		
		$(this).addClass('actif');
		$(this).append('<div class="bck-jour"></div>');
		
		showEventListDetail(id_attr);

	});
}

function fillEventListContent(type){
	
	$('#eventListContent').html('');
	
	for(key in eventList){
		var html_list = "";
		if (eventList.hasOwnProperty(key)) {
			var objEv = eventList[key];
			var dateTrD = dateFormatTransform(objEv["dateDebut"]);
			var dateTrF = dateFormatTransform(objEv["dateFin"]);

			html_list += '<div class="ligne"><input type="'+type+'" id="'+objEv['id']+'" name="'+dateTrD['annee']+dateTrD['mois']+'"/><label for="'+objEv['id']+'">'+objEv['titre']+'</label></div>';
			
			if($('.'+dateTrD['annee']+dateTrD['mois']).length == 0){
				var html_list_wrap = "";
				
				html_list_wrap += '<div class="group '+dateTrD['annee']+dateTrD['mois']+'">';
				html_list_wrap += '<div class="separation">'+tableauMois[dateTrD['mois']-1]+' '+dateTrD['annee']+'</div>';
				html_list_wrap += html_list;
				html_list_wrap += '</div>';
				html_list_wrap += '</div>';

				$('#eventListContent').append(html_list_wrap);
			}else{
				$('.'+dateTrD['annee']+dateTrD['mois']).append(html_list);
			}
		}
	}
	if(type == "radio"){
		$('#btn_supp_event').hide();
		$('#btn_select_event').show();
	}else{
		$('#btn_supp_event').show();
		$('#btn_select_event').hide();
	}
}

function initSelectChauffeur(){
	$('#chauffeur').html('');
	for(i=0; i<tabChauffeur.length; i++){
		$('#chauffeur').append('<option value="'+i+'">'+tabChauffeur[i]+'</option>')
	}
}

function initSelectType(){
	$('#type').html('');
	for(i=0; i<tabType.length; i++){
		$('#type').append('<option value="'+i+'">'+tabType[i]+'</option>')
	}
}

function resetAddForm(){
	$('#fade , .popup_block').fadeOut();
	$("#add_event_form :input").each(function(){
		if(!$(this).is(':submit')){
			$(this).val('');
		};
	});	
}

function fillAddForm(id){
	var evtList = eventList['eventList'+id];
	for(key in evtList){
		switch(key){
			case "dateDebut":
			case "dateFin":
				var date = dateFormatTransform(evtList[key]);
				$('#'+key).val(date['jour']+"-"+date['mois']+"-"+date['annee']);
				$('#'+key).parent('.wrapper').find('.chp-heure').val(date['heure']+":"+date['minute']+":"+date['seconde']);
			break;
			case "type":
			case "chauffeur":
				$('#'+key+' option[value="'+evtList[key]+'"]').prop('selected', true);
			break;
			default: 
				$('#'+key).val(evtList[key]);
			break;
		}
	}
	$('#btn_add_event').attr('data-id', id).val('Modifier'); 
}

$(document).ready(function(){

	showeventList(CurrentDate);
	
	$('#moisSuivant').click(function(){
		keyMois++;
		var NextDate = new Date();
		var thisCurrentMonth = CurrentDate.getUTCMonth();
		NextDate.setUTCMonth(thisCurrentMonth+keyMois);
		showeventList(NextDate);
	});

	$('#moisPrecedent').click(function(){
		keyMois--; 
		var NextDate = new Date();
		var thisCurrentMonth = CurrentDate.getUTCMonth();
		NextDate.setUTCMonth(thisCurrentMonth+keyMois);
		showeventList(NextDate);
	});

	$('#ajoutEventList').click(function(){
		$('#popup_add_event').fadeIn();
		//Apparition du fond - .css({'filter' : 'alpha(opacity=80)'}) pour corriger les bogues de IE
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();
		$('#btn_add_event').attr('data-id', '').val('Ajouter');
		return false;
	});
	
	$('#suppEventList').click(function(){
		fillEventListContent('checkbox');	
		$('#popup_supp_event').fadeIn();
		//Apparition du fond - .css({'filter' : 'alpha(opacity=80)'}) pour corriger les bogues de IE
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();
		return false;

	});
	
	$('#modifEventList').click(function(){
		
		fillEventListContent('radio');	
		$('#popup_supp_event').fadeIn();
		//Apparition du fond - .css({'filter' : 'alpha(opacity=80)'}) pour corriger les bogues de IE
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();

		return false;
	});
	
	$('.close, #fade').click(function() { 
		$('#fade , .popup_block').fadeOut();
		return false;
	});
	
	$('#btn_add_event').click(function(){
		var temp_obj = {};
		var temp_date = "";
		
		if($(this).attr('data-id') != ""){
			var idx_new = $(this).attr('data-id');	
		}else{
			var idx_new = Object.keys(eventList).length+1;
		}
		
		temp_obj["id"] = idx_new;
		
		$("#add_event_form :input").each(function(){
			var val_ipt = $(this).val()
			var name_ipt = $(this).attr('name')
			if(!$(this).is(':submit')){
				if($(this).hasClass('chp-date')){
					var val_ipt_d = val_ipt.split('-');
					temp_obj[name_ipt] = val_ipt_d[2]+"-"+val_ipt_d[1]+"-"+val_ipt_d[0] + " " +$(this).parent('.wrapper').find('.chp-heure').val();
				}else{
					temp_obj[name_ipt] = val_ipt;
				}
			}
		});
		eventList["eventList"+idx_new] = temp_obj;
		showeventList(getActualDateCalendar());
		resetAddForm();
		return false;
	});

	$('#btn_supp_event').click(function(){
		$("#eventListContent :input:checked").each(function(){
			delete eventList["eventList"+$(this).attr('id')];
		});
		showeventList(getActualDateCalendar());
		resetAddForm();
		return false;
	});
	
	$('#btn_select_event').click(function(){
		var id_modif
		$("#eventListContent :input:checked").each(function(){
			id_modif = $(this).attr('id');
		});
		resetAddForm();
		fillAddForm(id_modif);
		
		$('#popup_add_event').fadeIn();
		$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();
		return false;
	});
	
	$(function() {
	    $("#dateDebut").datepicker({
		minDate: 0,
		dateFormat: "dd-mm-yy",
		onSelect: function(selected_date) {
		    $("#dateFin").datepicker("option", "minDate", selected_date);
		}
	    });
	    $("#dateFin").datepicker({
		dateFormat: "dd-mm-yy",
		minDate: 0,
		onSelect: function(selected_date) {
		    $("#dateDebut").datepicker("option", "maxDate", selected_date);
		}
	    });
	    
	});$(function() {
	    $("#dateDebut").datepicker({
		minDate: 0,
		dateFormat: "dd-mm-yy",
		onSelect: function(selected_date) {
		    $("#dateFin").datepicker("option", "minDate", selected_date);
		}
	    });
	    $("#dateFin").datepicker({
		minDate: 0,
		dateFormat: "dd-mm-yy",
		onSelect: function(selected_date) {
		    $("#dateDebut").datepicker("option", "maxDate", selected_date);
		}
	    });

	});
	
	$('#btn_show_admin').click(function(){
		$( "#filtre_content" ).hide()
		if($( "#admin_content" ).is(':visible')){
			$( "#admin_content" ).hide();
		}else{
			$( "#admin_content" ).show();
		}
	});
	
	$('#btn_show_filtre').click(function(){
		$( "#admin_content" ).hide();
		if($( "#filtre_content" ).is(':visible')){
			$( "#filtre_content" ).hide();
		}else{
			$( "#filtre_content" ).show();
		}
	});
	
	$('#viewChauffeur').click(function(){
		if(!$('#calendrier').hasClass('chauffeur')){
			$(this).find('i').addClass('fa-eye-slash').removeClass('fa-eye');
			$('#calendrier').removeClass('filtre').addClass('chauffeur');
		}else{
			$(this).find('i').addClass('fa-eye').removeClass('fa-eye-slash');
			$('#calendrier').removeClass('chauffeur').removeClass('filtre').attr('dt-chf', "");
		}
		showeventList(getActualDateCalendar());
	});

	$("body").delegate('#filtre_content :input', "change", function() {
		
		if($(this).is(':checked')){
			$('#filtre_content :input').prop('checked', false);
			$(this).prop('checked', true);
		}else{
			$('#filtre_content :input').prop('checked', false);
		}

		$('#calendrier').attr('dt-fltr', $('#filtre_content :input:checked').attr('id'));

		if($('#filtre_content :input:checked').length > 0){
			$('#calendrier').addClass('filtre');
		}else{
			$('#calendrier').removeClass('filtre').attr('dt-fltr', "");
		}
		
		
		showeventList(getActualDateCalendar());
	});
});
