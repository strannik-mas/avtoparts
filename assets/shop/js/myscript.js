jQuery(document).ready(function($){

	$( "#flow-panel-close" ).click(function() {
		$('#flow-panel').css('display','none');
	});

	$( "#flow-panel-top" ).click(function() {
		$('body,html').animate({scrollTop:0},800);
	});
		
  $(".group1").colorbox({rel:'group1'});

	$( "#tabs" ).tabs();

    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500000,
      values: [ 0, 500000 ],
      slide: function( event, ui ) {
        $( "#filter-from" ).val( ui.values[ 0 ] );
        $( "#filter-till" ).val( ui.values[ 1 ] );
      }
    });

  $('#phone-close').click(function() {
    $('#hover-window-wrap').hide();
  });
  
  $('#upd1').click(function() {
		$().toastmessage('showSuccessToast', "Профиль успешно обновлён!");
  });
});