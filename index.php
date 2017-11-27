<script src="js/jquery.min.js"></script>

<script>

$(document).ready(function(){
	const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
	const recognition = new SpeechRecognition();
	
	recognition.lang = 'en-US';
	recognition.interimResults = false;
	
	$("#listen").click(function(){
		recognition.start();
	});
	
	recognition.addEventListener('result', (e) => {
		last = e.results.length - 1;
		text = e.results[last][0].transcript;
		
		confidence = e.results[0][0].confidence;
		
		$("#result").val(text);
		$("#confidence").val(confidence);
	});
});

</script>


<button id="listen">LISTEN</button>
<input id="result" value="" />
<input id="confidence" value="" />
