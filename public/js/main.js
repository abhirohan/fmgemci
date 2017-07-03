$(document).ready(function(){
	var _fetureURL = window.URL || window.webkitURL;
	$('#featured-image').change(function(){
		var feturedCurrentFile, featuredImage;
		if((feturedCurrentFile = this.files[0])){
                console.log("sd");
			featuredImage = new Image();
			featuredImage.onload = function () {
				var maxWidthFeature  = 1920; // Max width for the image
                var maxHeightFeature = 6000;    // Max height for the image
                var featureRatio = 0;
				var nWidthFeature  = this.width;
                var nHeightFeature = this.height;
                if(nWidthFeature > maxWidthFeature){
                    featureRatio = maxWidthFeature / nWidthFeature;   // get featureRatio for scaling image
                    nHeightFeature = nHeightFeature * featureRatio;    // Reset height to match scaled image
                    nWidthFeature  = nWidthFeature * featureRatio;    // Reset width to match scaled image
                }
                var featureReader = new FileReader();
                featureReader.onload = function(e){
                	$('#showfeatured-image').attr('src',e.target.result);
                }
                featureReader.readAsDataURL(feturedCurrentFile);
                setTimeout(function(){
                    var source_img = document.getElementById("showfeatured-image");
                    var target_img = document.getElementById("showfeatured-image");
                    var quality =  70;
                    target_img.src = jic.compressCover(source_img,quality,nWidthFeature,nHeightFeature).src;
                    $('#showfeatured-image').attr('src', target_img.src);
                    $('#showfeatured-image').show();                    
                	$('#featured64').val(target_img.src);
                	console.log(target_img.src);
                },2000);
			}
			featuredImage.src = _fetureURL.createObjectURL(feturedCurrentFile);
		}
	});
});