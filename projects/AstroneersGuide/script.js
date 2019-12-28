function init() {

}

function toggleAccordion(toggleAccordionSelf) {
	var toggleAccordionSibling = toggleAccordionSelf.nextElementSibling;
	if (toggleAccordionSibling != null) {
		toggleAccordionSibling.classList.toggle("hidden");
	}
}