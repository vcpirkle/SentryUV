$(function() {
	var specUrl = 'sag120-apvc_specifications.pdf#page=1&view=FitH,100';
	
	$('#myTab a.specs').on('shown.bs.tab', function() {
		if($('#frameSpecs').attr('src') == null || $('#frameSpecs').attr('src') == '') {
			$('#frameSpecs').attr('src', specUrl);
		}
	});
});