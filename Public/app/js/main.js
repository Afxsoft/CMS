var keyMois = 0;
	
var CurrentDate = new Date();


var eventList = {
	"eventList1" : {
		"id" : "1",
		"titre" : "Une premier event",
		"dateDebut" : "2014-11-15 10:00:00",
		"dateFin" : "2014-11-16 17:00:00",
		"detail" : "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nunc orci, vehicula nec tortor vel, commodo malesuada lacus. Ut in purus aliquet, ullamcorper nunc quis, hendrerit dolor. Fusce ornare a ante in sagittis. Donec quis erat nibh. Vestibulum commodo nec est placerat faucibus. Curabitur dictum egestas magna ut posuere. Vivamus convallis tincidunt neque, eget vestibulum leo cursus a. ",
		"type" : "type1"
	},
	"eventList2" : {
		"id" : "2",
		"titre" : "Ici en voici un deuxième",
		"dateDebut" : "2014-11-29 10:00:00",
		"dateFin" : "2014-12-3 17:00:00",
		"detail" : "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nunc orci, vehicula nec tortor vel, commodo malesuada lacus. Ut in purus aliquet, ullamcorper nunc quis, hendrerit dolor. Fusce ornare a ante in sagittis. Donec quis erat nibh. Vestibulum commodo nec est placerat faucibus. Curabitur dictum egestas magna ut posuere. Vivamus convallis tincidunt neque, eget vestibulum leo cursus a. ",
		"type" : "type2"
	},
	"eventList3" : {
		"id" : "3",
		"titre" : "Troisième evênement",
		"dateDebut" : "2014-12-6 10:00:00",
		"dateFin" : "2014-12-8 17:00:00",
		"detail" : "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nunc orci, vehicula nec tortor vel, commodo malesuada lacus. Ut in purus aliquet, ullamcorper nunc quis, hendrerit dolor. Fusce ornare a ante in sagittis. Donec quis erat nibh. Vestibulum commodo nec est placerat faucibus. Curabitur dictum egestas magna ut posuere. Vivamus convallis tincidunt neque, eget vestibulum leo cursus a. ",
		"type" : "type3"
	}
}

var tableauMois =new Array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");

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

function getCurrentMonth(){
	return CurrentDate.getMonth();
}

function getCurrentYear(){
	return CurrentDate.getFullYear();
}

function isCurrentMonth(date){
	return date.getMonth() == getCurrentMonth() && date.getFullYear() == getCurrentYear();
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

function showeventList(date){
	
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
	$('#mois_actuel').html(tableauMois[date.getMonth()]);
	
	$('#list').html('');
	$('.picto').remove();
	for(key in eventList){
		if (eventList.hasOwnProperty(key)) {
			var objEv = eventList[key];
			var dateTrD = dateFormatTransform(objEv["dateDebut"]);
			var dateTrF = dateFormatTransform(objEv["dateFin"]);
			
			if((date.getMonth()+1 != dateTrD['mois'] && date.getMonth()+1 != dateTrF['mois']) || (date.getFullYear() != dateTrD['annee'] && date.getFullYear() != dateTrF['annee'])){
				continue;
			}
			var d1 = new Date(dateTrD['annee'], dateTrD['mois']-1, dateTrD['jour']);
			var d2 = new Date(dateTrF['annee'], dateTrF['mois']-1, dateTrF['jour']);
			
			$('#list').append(constructDetailLine(objEv));
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
			$('#list').append('<span class="clear"></span>');		
		}
	}
	initClickJour();
}

function showEventListDetail(id){
	var dataValue = $('#'+id).find('.picto').attr('dt-event');
	$('#list').html('');
	if(typeof dataValue != "undefined"){
		var tab_attr = dataValue.split('-');
		for(key in tab_attr){
			var objEv = eventList[tab_attr[key]];
			$('#list').append(constructDetailLine(objEv));
		}
	}
}

function constructDetailLine(objEv){
	var htmlLine = "";
	var dateTrD = dateFormatTransform(objEv["dateDebut"]);
	var dateTrF = dateFormatTransform(objEv["dateFin"]);
	
	htmlLine += '<div class="detail_block '+objEv["type"]+'">';
			
		htmlLine += '<div class="depart"><span class="annee">'+dateTrD['jour']+"/"+dateTrD['mois']+"/"+dateTrD['annee']+'</span><br/><span class="heure">'+dateTrD['heure']+":"+dateTrD['minute']+'</span></div>';
		htmlLine += '<div class="content">'+objEv['titre']+'</div>';
		htmlLine += '<div class="arrivee "><span class="annee">'+dateTrF['jour']+"/"+dateTrF['mois']+"/"+dateTrF['annee']+'</span><br/><span class="heure">'+dateTrF['heure']+":"+dateTrF['minute']+'</span></div>';
	htmlLine += '</div>';
	
	return htmlLine;
}

function constructPicto(element, id){
	if(typeof element.find('.picto').attr('dt-event') == "undefined"){
		element.append('<div class="picto"></div>');
		element.find('.picto').attr('dt-event', id)
	}else{
		var recup = element.find('.picto').attr('dt-event');
		recup += "-"+id
		element.find('.picto').attr('dt-event', recup)
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

			
			if($('.bck-jour').length > 0){
				$("#dateDebut").datepicker( "setDate" , $('.bck-jour').parent().attr('id'));
			}
			
			
			$('#popup_add_event').fadeIn();

			
			
			
			//Apparition du fond - .css({'filter' : 'alpha(opacity=80)'}) pour corriger les bogues de IE
			$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();

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
	
	$('#bnt_add_event').click(function(){
		var temp_obj = {};
		var idx_new = Object.keys(eventList).length+1
		
		$("#add_event_form :input").each(function(){
			var val_ipt = $(this).val()
			var name_ipt =$(this).attr('name')
			
			if(!$(this).is(':submit')){
				if($(this).hasClass('chp-date')){
					var val_ipt_d = val_ipt.split('-')
					temp_obj[name_ipt] = val_ipt_d[2]+"-"+val_ipt_d[1]+"-"+val_ipt_d[0]+" 10:00:00";
				}else{
					temp_obj[name_ipt] = val_ipt;
				}
			}
		});
		eventList["eventList"+idx_new] = temp_obj;
		
		showeventList(CurrentDate);
		
		$('#fade , .popup_block').fadeOut();
		$("#add_event_form :input").each(function(){
			if(!$(this).is(':submit')){
				$(this).val('');
			};
		});
		return false;
	});

	$('#bnt_supp_event').click(function(){

	
		// console.log('tet');
	
		$("#eventListContent :input:checked").each(function(){
		
			console.log($(this).attr('id'));
		
		
		});
	
		showeventList(CurrentDate);
		
		$('#fade , .popup_block').fadeOut();
		$("#add_event_form :input").each(function(){
			if(!$(this).is(':submit')){
				$(this).val('');
			};
		});
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
		$('#calendrier #list').toggle();
		$('#admin_content').toggle();
	
	});
	
});
