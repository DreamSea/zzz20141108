<!DOCTYPE html>
<!-- from http://keithclark.co.uk/articles/pure-css-parallax-websites/ -->
<html>
<head>
	<title>Basic Info</title>
	<style>

		/* Parallax base styles
          --------------------------------------------- */

		.parallax {
			height: 100vh;
			overflow-x: hidden;
			overflow-y: visible;
			perspective: 300px;
		}

		.parallax__group {
			position: relative;
			height: 100vh;
			transform-style: preserve-3d;
		}

		.parallax__layer {
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
		}

		.parallax__layer--fore {
			transform: translateZ(90px) scale(.7);
			z-index: 1;
		}

		.parallax__layer--base {
			transform: translateZ(0);
			z-index: 4;
		}

		.parallax__layer--back {
			 transform: translateZ(-300px) scale(2);
			 z-index: 3;
		 }

		.parallax__layer--deep {
			transform: translateZ(-600px) scale(3);
			z-index: 2;
		}


		/* demo styles
          --------------------------------------------- */

		* {
			margin:0;
			padding:0;
		}

		.parallax {
			font-size: 200%;
		}

		/* add some padding to force scrollbars */
		.parallax__layer {
			padding: 50vh 0;
		}

		/* centre the content in the parallax layers */
		.parallax__title {
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
		}

		.shiftRightDown {
			position: absolute;
			left: 40%;
			font-size : 80 %;
			margin-left: auto;
			margin-right: auto;
			width: 6em
		}

		.shiftLeftUp {
			position: absolute;
			bottom: 30%;
			right: 40%;
			font-size: 400%;
		}

		#bigPi {
			font-size: 500%;
			color: white;
		}

		#finanQuote {
			font-size: 80%;
		}


		/* style the groups
  --------------------------------------------- */
		#group1 {
			z-index: 5; /* slide over group 2 */
		}
		#group1 .parallax__layer--base {
			background: rgb(210, 163, 81);
		}

		#group2 {
			z-index: 3; /* slide under groups 1 and 3 */
		}
		#group2 .parallax__layer--back {
			background: rgb(119, 180, 210);
		}

		#group3 {
			z-index: 4; /* slide over group 2 and 4 */
		}
		#group3 .parallax__layer--base {
			background: rgb(210, 163, 81);
		}

		#group4 {
			z-index: 2; /* slide under group 3 and 5 */
		}
		#group4 .parallax__layer--deep {
			background: rgb(119, 180, 210);
		}

		#group5 {
			z-index: 3; /* slide over group 4 and 6 */
		}
		#group5 .parallax__layer--base {
			background: rgb(210, 163, 81);
		}

		#group6 {
			z-index: 2; /* slide under group 5 and 7 */
		}
		#group6 .parallax__layer--back {
			background: rgb(119, 180, 210);
		}

		#group7 {
			z-index: 3; /* slide over group 6 */
		}
		#group7 .parallax__layer--base {
			background: rgb(0, 0, 0);
		}

	</style>
</head>
<body>
<div class="parallax">
	<div class="parallax">
		<div id="group1" class="parallax__group">
			<div class="parallax__layer parallax__layer--base">
				<div class="parallax__title" id="finanQuote">'financial literacy is an essential skill for financial decision-making and wellbeing over the life cycle.'
				</div>
			</div>
		</div>
		<div id="group2" class="parallax__group">
			<div class="parallax__layer parallax__layer--base">
				<div class="parallax__title">
					<div class="shiftRightDown">of US adults admit to not having a budget</div>
				</div>
			</div>
			<div class="parallax__layer parallax__layer--back">
				<div class="parallax__title">
					<div class="shiftLeftUp">61%</div>
				</div>
			</div>
		</div>
		<div id="group3" class="parallax__group">
			<div class="parallax__layer parallax__layer--fore">
				<div class="parallax__title">
					<div class="shiftRightDown">worried about servicing their debt commitments</div>
				</div>
			</div>
			<div class="parallax__layer parallax__layer--base">
				<div class="parallax__title">
					<div class="shiftLeftUp">26%</div>
				</div>
			</div>
		</div>
		<div id="group4" class="parallax__group">
			<div class="parallax__layer parallax__layer--base">
				<div class="parallax__title">
					<div class="shiftRightDown">carried over a balance and was charged interest</div>
				</div>
			</div>
			<div class="parallax__layer parallax__layer--deep">
				<div class="parallax__title">
					<div class="shiftLeftUp"> </div>
				</div>
			</div>
			<div class="parallax__layer parallax__layer--back">
				<div class="parallax__title">
					<div class="shiftLeftUp">49%</div>
				</div>
			</div>
		</div>
		<div id="group5" class="parallax__group">
			<div class="parallax__layer parallax__layer--fore">
				<div class="parallax__title">
					<div class="shiftRightDown">spend equal or greater than their incomes</div>
				</div>
			</div>
			<div class="parallax__layer parallax__layer--base">
				<div class="parallax__title">
					<div class="shiftLeftUp">50%</div>
				</div>
			</div>
		</div>
		<div id="group6" class="parallax__group">
			<div class="parallax__layer parallax__layer--back">
				<div class="parallax__title">
					<div class="shiftLeftUp">31%</div>
				</div>
			</div>
			<div class="parallax__layer parallax__layer--base">
				<div class="parallax__title">
					<div class="shiftRightDown">of university students do not regularly track expenses</div>
				</div>
			</div>
		</div>
		<div id="group7" class="parallax__group">
			<div class="parallax__layer parallax__layer--base">
				<div class="parallax__title" id="bigPi">π</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>