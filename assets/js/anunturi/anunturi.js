
$(document).ready(function(){    

    $('#anunt_add_submit').click(function(event){
        event.stopPropagation();
        $('#file_upload').attr('action' , 'index.php?page=anunt&&action=add');
        $('#file_upload').submit();
    });
    
    $('.image-wrapper')
        .mouseenter(function() {
        $(this).find('.image-title').show();
        })
        .mouseleave(function() {
        $(this).find('.image-title').hide();
        });
    
});

show_hide_sections();
$('#type').change(function(){
	show_hide_sections();
});

function show_hide_sections(){
	var type = $('#type').val();
	
	if (type == 'studio' || type == 'apartment' || type == 'house' || type == 'villa' || type == 'office' || type == 'comercial_space' || type == 'industrial_space') 
	{
        $('#bathrooms').show();
	}
    else{
        $('#bathrooms').hide();
    }
	
	if (type == 'apartment') 
	{
		$('#subdivision1').show();
	}
    else{
        $('#subdivision1').hide();
    }
	if(type == 'apartment' || type == 'house' || type == 'villa' || type == 'office'){
        $('#rooms').show();
    }
    else{
         $('#rooms').hide();
    }
	if (type == 'house' || type == 'villa') 
	{
        $('#levels').show();
        $('#section5').show();
		
	}
    else{
        $('#levels').hide();
        $('#section5').hide();
    }
	
    if (type == 'studio' || type == 'apartment' || type == 'house' || type == 'villa' || type == 'office') 
	{
        $('#comfort').show();
        $('#construction_year').show();
		
	}
    else{
        $('#comfort').hide();
        $('#construction_year').hide();
    }

    if (type == 'studio' || type == 'apartment' || type == 'office') 
	{
        $('#floor').show();
		
	}
    else{
        $('#floor').hide();
    }
   
    if (type == 'house' || type == 'villa' || type == 'office' || type == 'comercial_space' || type == 'industrial_space') 
	{
		$('#usable_surface').show();
		
	}
    else{
        $('#usable_surface').hide();
    }
   
    if (type == 'land') 
	{
	   $('#subdivision2').show();
       $('#classification').show();
       $('#land_surface').show();
	}
    else{
        $('#subdivision2').hide();
       $('#classification').hide();
       $('#land_surface').hide();
    }
   if(type == 'comercial_space' || type == 'industrial_space' || type == 'land'){
       $('#1').hide();
       $('#2').hide();
   }
    else{
       $('#1').show();
       $('#2').show();
    }
}

function openMobileMenu()
{
    var header_menu=$('#header .menu');
    if(header_menu.hasClass('opened'))
    {
        header_menu.removeClass('opened');

    }else {
        header_menu.addClass('opened');}

   
}
 

