<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>slide</title>
	<style>
		body{
			margin: 0px;
			padding: 0px;
		}
		div{
			display: flex;
			justify-content: center;
		}
		button{
			padding: 10px;
			margin: 10px;
		}
	</style>
</head>
<body>
	<div>
		<button id="btn1" >1</button>
		<button id="btn2" >2</button>
		<button id="btn3" >3</button>
		<button id="btn4" >4</button>
	</div>
	<script>
		let btn1 = document.querySelector('#btn1');
		let btn2 = document.querySelector('#btn2');
		let btn3 = document.querySelector('#btn3');
		let btn4 = document.querySelector('#btn4');

		btn1.addEventListener('click', () =>{
			document.body.style.backgroundImage = "url('images/CA_appliances_1.png')";
		});
		btn2.addEventListener('click', () =>{
			document.body.style.background = "url('images/CA_cookware_2.png')"
		});
		btn3.addEventListener('click', () =>{
			document.body.style.background = "url('images/CA_food_storage.png')"
		});
		btn4.addEventListener('click', () =>{
			document.body.style.background = "url('images/CA_lunch_box.png')"
		});
	</script>
</body>
</html>