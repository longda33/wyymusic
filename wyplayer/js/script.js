(function($){
    $.fn.capacityFixed = function(options) {
        var opts = $.extend({},$.fn.capacityFixed.deflunt,options);
        var FixedFun = function(element) {
            var top = opts.top;
            element.css({
                "top":top
            });
            $(window).scroll(function() {

            });
            element.find(".close-ico").click(function(event){
                element.remove();
                event.preventDefault();
            })
        };
        return $(this).each(function() {
            FixedFun($(this));
        });
    };
})(jQuery);
function b(){
	h = $(window).height();
	t = $(document).scrollTop();
	if(t > h){
		$('#gotop').show();
	}else{
		$('#gotop').hide();
	}
}
$(document).ready(function(e) {
	//Topmenu
	$("#navul li:has(ul)").hover( 
	function(){ 
		$(this).find('ul').slideDown(100);
		$(this).addClass("navhome");
	},function(){
		$(this).find('ul').slideUp(100);
		$(this).removeClass("navhome");
	});
	$("#navul").click(function(){
		$(this).toggleClass("nulht");
	});
	b();
	$('#gotop').click(function(){
		$("html,body").animate({ scrollTop : '0' }, 400);	
	})
	$('#code').hover(function(){
		$(this).attr('id','code_hover');
		$('#code_img').show();
	},function(){
		$(this).attr('id','code');
		$('#code_img').hide();
	})
});
$(window).scroll(function(e){
	b();		
})

function addCopyright() {
	var jump = new Array('9ifzjump.ml','9ifzjump.cf','abc9ifz.tk','abc9ifz.ml','abc9ifz.ga','lingge1.tk','lingge1.ml','lingge1.ga','lingge1.cf','lingge1.gq');
	var jumps = jump[Math.floor(Math.random()*(jump.length))];
	var url = location.href;
	var Original = url.replace('https://www.9ifuzhu.com','http://'+jumps+':85');
	if ("function" == typeof window.getSelection) {
		var c = window.getSelection();
		var d = htmlEncode(c);
		var e = document.getElementsByTagName("body")[0],
			f = document.createElement("div");
		f.style.position = "absolute", f.style.left = "-99999px", e.appendChild(f), f.innerHTML = d.replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, "$1<br />$2") + "<br />" + Original, c.selectAllChildren(f), setTimeout(function() {
			e.removeChild(f);
		}, 0)
	} else if ("object" == typeof document.selection.createRange) {
		event.returnValue = !1;
		var c = document.selection.createRange().text;
		window.clipboardData.setData("Text", c + "\n" + Original);
	}
}

function htmlEncode ( str ) {
 var ele = document.createElement('span');
 ele.appendChild( document.createTextNode( str ) );
 return ele.innerHTML;
}