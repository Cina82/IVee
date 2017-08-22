jQuery(document).ready(function($){
// v2.0.0
	function getUrlVars(){
	    var url = location.search;
	    var qs = url.substring(url.indexOf('?') + 1).split('&');
	    for(var i = 0, result = {}; i < qs.length; i++){
	        qs[i] = qs[i].split('=');
	        result[qs[i][0]] = decodeURIComponent(qs[i][1]);
	    }
	    return result;
	}

	if(document.location.search.length) {
		var utm_var = getUrlVars();


		if (utm_var["utm_source"] !== undefined){
			jQuery(document).ready(function( $ )  {
				$("a").each(function () {
					if ($(this).attr('href').indexOf("?") != -1) {
	          			$(this).prop("href", function() { return this.href + location.search.replace("?", "&")})	
					} else {
					    $(this).prop("href", function() { return this.href + location.search})
					}
				});
			});
			var elements = ["prosearch","prosearch-footer"];
			for (g in elements){

				if (document.getElementById(elements[g])){
					for (i in utm_var) {
						var input = document.createElement("input");
						input.setAttribute("type", "hidden");
						input.setAttribute("name", i);
						input.setAttribute("value", utm_var[i]);
						document.getElementById(elements[g]).appendChild(input);
					}
				}
			}
		}
	} 

}); 