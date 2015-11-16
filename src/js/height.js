/*
	* Problem: Setting height of CSS is just not achieving consistent '100% height'
	*  results, without specifying a px height for <html>.
	*  Solution: Get the height of the window upon page load and change the CSS of <html
	*  'height' property to match. 
 */

$(document).ready(function() {
	/*
		* Designer's Note: Scrollheight is a property - not a method, so no '().'
		*  ScrollHeight is really what gets the 'entire' page height - the whole DOM!
		*  (https://developer.mozilla.org/en-US/docs/Web/API/Element/scrollHeight)
	 */
	var html = document.getElementsByTagName("html")[0]; // Need "" around tag name.
	var docHeight = html.scrollHeight + "px"; // Need units on this numerical value.

	// Use .style.property to change the height property of <html>. 
	html.style.height = docHeight;
	console.log(html.style.height);

});