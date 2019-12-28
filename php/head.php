<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/mobileFirst.css">
<link rel="stylesheet" type="text/css" media="only screen and (min-width:601px)" href="styles/main.css">
<link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />

<script>
	//Accordion
	function accordionToggle(thisAccordionElement) {
		thisAccordionElement.nextElementSibling.classList.toggle('hidden');
		thisAccordionElement.classList.toggle('active');
	}

	//Gallery
	function galleryShowSlide(thisGalleryElement, galleryImage) {
		thisGalleryElement.parentNode.children[0].children[1].src = galleryImage;
		thisGalleryElement.parentNode.children[0].classList.remove('hidden');
	}
	function galleryHideSlide(thisGalleryElement) {
		thisGalleryElement.parentNode.children[0].classList.add('hidden');
	}

	//Video
	function galleryShowVideo(thisGalleryElement, galleryVideo) {
		thisGalleryElement.parentNode.children[0].children[1].src = galleryVideo;
		thisGalleryElement.parentNode.children[0].classList.remove('hidden');
	}
	function galleryHideVideo(thisGalleryElement) {
		thisGalleryElement.parentNode.children[0].classList.add('hidden');
		thisGalleryElement.children[1].src = "";
	}


	//Slideshow
	function slideshowSetSlide(thisSlideshowElement, slideshowImage) {
		thisSlideshowElement.parentNode.children[0].src = slideshowImage;
	}
</script>