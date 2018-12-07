window.onload = function(){
  if(sessionStorage.getItem('tema')){
    document.body.classList.add(sessionStorage.getItem('tema'));
  }
  
  let btndark = document.getElementById('tema-dark');
  btndark.onclick = function(){
    sessionStorage.setItem("tema", "tema-dark");
    location.reload();
  }

  let btnnormal = document.getElementById('tema-normal');
  btnnormal.onclick = function(){
    sessionStorage.setItem("tema", "tema-normal");
    location.reload();

  }
}

// if($('.zoom-img')){
//   //console.log($(".active .img-produto"));
//   $(".zoom-img").elevateZoom({
//   zoomType				: "inner",
//   cursor: "crosshair"
// });
// }

$(document).ready(function(){

	$(".owl-carousel").owlCarousel({
		loop:true,
		items:1,
		margin:0,
		stagePadding: 0,
		autoplay:false
	});

	dotcount = 1;

	jQuery('.owl-dot').each(function() {
		jQuery( this ).addClass( 'dotnumber' + dotcount);
		jQuery( this ).attr('data-info', dotcount);
		dotcount=dotcount+1;
	});

	slidecount = 1;

	jQuery('.owl-item').not('.cloned').each(function() {
		jQuery( this ).addClass( 'slidenumber' + slidecount);
		slidecount=slidecount+1;
	});

	jQuery('.owl-dot').each(function() {
		grab = jQuery(this).data('info');
		slidegrab = jQuery('.slidenumber'+ grab +' img').attr('src');
		jQuery(this).css("background-image", "url("+slidegrab+")");
	});

	amount = $('.owl-dot').length;
	gotowidth = 100/amount;
	jQuery('.owl-dot').css("height", gotowidth+"%");

});
