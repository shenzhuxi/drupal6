// JavaScript Document
function equal_height() {
	$("#left").height("auto");
	$("#main").height("auto")
	var lHeight = $("#left").height()+40;
	var mHeight = $("#main").height();
	
    var maxHeight = mHeight > lHeight? mHeight:lHeight;	
	if(lHeight>mHeight){$("#main").height(maxHeight);}
}
$(document).ready(function() {
	var fullwidth = $("#header").width()+$("#wrapper").offset().left;
    
	$("#nav li").hover(function(){
	  var this_width =$(this).offset().left;
	  var relative_width = fullwidth-this_width;
	  var pop_width = $(this).find(".poplink").width();
	  $(this).find(".poplink").show();
	  $(this).addClass("over");
	  if(pop_width > relative_width) {
		$(this).find(".poplink").css({"left":(relative_width-pop_width-8)+"px"})
	  }
	  
	},function(){
	  $(this).find(".poplink").hide();
	  $(this).removeClass("over");
	})
	equal_height();
});
