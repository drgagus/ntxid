var keyword = document.getElementById('keyword');
var result = document.getElementById('result');


keyword.addEventListener('keyup', function(){

	var xhr = new XMLHttpRequest();

	xhr.onreadystatechange = function () {
		if ( xhr.readyState == 4 && xhr.status == 200 ) {
			result.innerHTML = xhr.respontext ;

		}
	}

	xhr.open ('GET', 'search/ajax/' + keyword.value , true);
	xhr.send();
})