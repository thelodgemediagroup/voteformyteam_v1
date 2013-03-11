<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<link href="css/reset.css" rel="stylesheet" type="text/css"> 
	<link rel="stylesheet" href="css/styles.css" media="all">

 

</head>

<body>

<div id="container">

	<div id="content">


		

	
		


		<?php /*
			<div id="resultTeamOne">
				
				<?php
					for ($i=1; $i<=$votesTeamOne; $i++){

				?>
					<div class="votesTeamOne"></div>
				<?php
					}
				?>
				
			</div>


			<div id="resultTeamTwo">
				
				<?php
					for ($i=1; $i<=$votesTeamTwo; $i++){

				?>
					<div class="votesTeamTwo"></div>
				<?php
					}
				?>
				
			</div>
			*/ ?>


		

		<div id="header">
			<img src="img/header.jpg" />
		</div>


		<div id="graph">
			<div id="graphleft">
				<table>
				<tr>
					<td class="voteBar">
						<?php
						//$votesTeamOne = 85;
						//$votesTeamTwo = 140;
						for ($i=1; $i<=$votesTeamOne; $i++){
						?>
							<div class="votesTeamOne"></div>
						<?php
						}
						?>
					</td>
					<td width="20"></td>
					<td class="voteBar">
						<?php
						for ($i=1; $i<=$votesTeamTwo; $i++){
						?>
						<div class="votesTeamTwo"></div>
						<?php
						}
						?>
					</td>
				</tr>
				<tr>
					<td class="voteHeadline">DENVER: <?php echo $votesTeamOne; ?></td>
					<td width="20"></td>
					<td class="voteHeadline">NEW ENGLAND: <?php echo $votesTeamTwo; ?></td>
				</tr>
			</table>
			</div>
			<div id="flex">
				<img src="/img/redcross2.png" width="450"/>
			</div>
		</div>


		<div id="teams">
			<img src="img/team_logos.png" />
		</div>
		

		<?php // DEV BUTTONS ?>

		<div id="formsVote">

			<?php // <form action="https://www.paypal.com/cgi-bin/webscr" method="post">  ?>
			<div id="formVoteTeamA" class="formVote">

				<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="JP5GRAPP2ENNC">
				<input type="text" name="quantity" value="1" class="voteQuantity">
				<input type="image" src="http://voteformyteam.com/img/vote_a.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>

			</div>


			<div id="formVoteTeamB" class="formVote">

				<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="HPB6T6Y2ZBJTU">
				<input type="text" name="quantity" value="1" class="voteQuantity">
				<input type="image" src="http://voteformyteam.com/img/vote_b.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>

			</div>
			 
			<div class="clear"></div>

		</div>

	</div>

</div>



</body>
</html>
