$(document).ready(function(){
	$('.show_search_form').click(function() {
			$('.modal').modal('hide');
			$('#modal_search').modal('show');
			return false;

	});
	$('.featured-item').hover(function() {
		$(this).find('.featured-detail').stop().animate({bottom: "0"}, 200);
	}, function() {
		$(this).find('.featured-detail').stop().animate({bottom: "-80px"}, 200);
	});
	$('.featured-item .label').hover(function() {
		$(this).removeClass('label-danger');
		$(this).addClass('label-primary');
	}, function() {
		$(this).removeClass('label-primary');
		$(this).addClass('label-danger');
	});
	$('.tag a, .tagcloud a').addClass('label label-primary');
	$('.tag a,.tagcloud a').hover(function() {
		$(this).removeClass('label-primary');
		$(this).addClass('label-danger');
	}, function() {
		$(this).removeClass('label-danger');
		$(this).addClass('label-primary');
	});
	$('.post_content img').addClass('img-responsive');
	$('img.lazy' ).each(function(){
						$(this).attr('data-original', $(this).attr('src'));
						$(this).attr('src', $(this).attr('lazy-data'));
						});
					$("img.lazy").lazyload({
						 effect : "fadeIn"
					});
	$('.post_content').find('table').removeClass().addClass('table table-condensed table-striped table-bordered');
});