<!DOCTYPE html>
<!--
Terrance Whitehead
IT 5236-A Distributed & Mobile Systems 
Calculator Design
Sources: Build A Calculator With JavaScript Tutorial via YouTube
-->
<html>
	<head>
             <link rel="stylesheet" href="css/style.css">
		<title>Virtual Calculator</title>
                
	</head>
	<body>
               <header> Terrance Virtual Calculator </header>
		<div id="container">
			<div id="calculator">
				<div id="result">
					<div id="history">
						<p id="history-value"></p>
					</div>
					<div id="output">
						<p id="output-value"></p>
					</div>
				</div>
				<div id="keyboard">
					<button class="operator" id="clear">C</button>
					<button class="operator" id="backspace">CE</button>
					<button class="operator" id="^">^</button>
					<button class="operator" id="/">/</button>
					<button class="number" id="7">7</button>
					<button class="number" id="8">8</button>
					<button class="number" id="9">9</button>
					<button class="operator" id="*">*</button>
					<button class="number" id="4">4</button>
					<button class="number" id="5">5</button>
					<button class="number" id="6">6</button>
					<button class="operator" id="-">-</button>
					<button class="number" id="1">1</button>
					<button class="number" id="2">2</button>
					<button class="number" id="3">3</button>
					<button class="operator" id="+">+</button>
					<button class="empty" id="empty"></button>
					<button class="number" id="0">0</button>
					<button class="empty" id="empty"></button>
					<button class="operator" id="=">=</button>
				</div>
			</div>
		</div>
		<script src="js/java.js"></script>
	</body>
</html>


