$(function() {
	var paramsUrl = '#page=1&view=FitH,100';
	
	$('#myTab a.specs').on('shown.bs.tab', function() {
		
		var pdfUrl = $('#frameSpecs').attr('pdf-url');
		
		if($('#frameSpecs').attr('src') == null || $('#frameSpecs').attr('src') == '') {
			$('#frameSpecs').attr('src', pdfUrl + paramsUrl);
		}
	});
});