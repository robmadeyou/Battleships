<?php

?>
<html>
<head>
	<title>Battleships</title>
	<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="/socket.io/socket.io.js"></script>
	<script src="/js.js"></script>
	<style>
		.hoverShip
		{
			background-color: cyan;
		}

		.heldShip
		{
			background-color: green;
		}

		.ships
		{
			border: white 2px solid;
		}

		.errorShip
		{
			background-color: red;
		}

		.fired
		{
			background-color: darkred;
		}

		.hit
		{
			background-color: green;
		}
	</style>
</head>
<body style="background-color: black; color:white; text-align:center">
<div style="width=100%; text-align:center;">
	<h1 style="color: white"><?php ?></h1>
</div>
<?php
	print '<h1>Your board</h1>';
	print '<h1 id="gameStatus"></h1>';
	printBoard('personal-ships');

	?>
	<div class="ship-selection">
		<p size="5" class="ships" id="ship-place-5">Five x <span>1</span></p>
		<p size="4" class="ships" id="ship-place-4">Four x <span>2</span></p>
		<p size="3" class="ships" id="ship-place-3">Three x <span>3</span></p>
		<p size="2" class="ships" id="ship-place-2">Two x <span>4</span></p>
	</div>
	<?php
	print '<h1>Enemy board</h1>';
	printBoard( 'click-cell' );

	function printBoard( $class = '' )
	{
		print '<div style="width: 500px; height:500px; position:relative; padding: 0; margin: 0" >';

		for( $i = 0; $i < 11; $i++ )
		{
			if( $i != 0 )
			{
				print '<div style="float:left; width: 40px; height: 40px; border: white 1px solid"> ' . $i . ' </div>';
			}
			for( $j = 0; $j < 11; $j++ )
			{
				if( $i == 0 )
				{
					print '<div style="float:left; width:40px; height:40px; border: white 1px solid" >' . $j . '</div>';
				}
				else
				{
					if( $j != 0 )
					{
						print '<div id="e' . ( $i - 1 ) . '-' . ( $j - 1 ) . '" class="' . $class . '" style="float:left; width: 40px; height:40px; border: white 1px solid" ></div>';
					}
				}
			}
		}
		print '</div>';
	}
?>
</body>
</html>