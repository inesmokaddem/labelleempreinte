$(document).ready(function(){
	$('#selectObjects').selectpicker();
	$('#selectObjects').change(function(){
		setBlockTitleFromSelect()
	});
	setBlockTitleFromSelect()
})

function setBlockTitleFromSelect(){
	console.log($('#selectObjects option:selected').data('title'))
	$('#jumbo-title').html($('#selectObjects option:selected').data('title'))
}