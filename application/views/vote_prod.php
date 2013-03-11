<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">


	<link href="css/reset.css" rel="stylesheet" type="text/css"> 

	<style>

	.clear {
		clear: both;
	}

	#container {
		width:900px;
		margin:0 auto;
		background:url('img/background.jpg') repeat-x;
		padding:0 0 40px 0;
	}

	#teams {
		margin: 120px auto 0;
		width:844px;
	}

	#formsVote {
		margin:0;
	}

	.formsVote {
		width: 200px;
	}

	#formVoteTeamA {
		float: left;
		margin: 0 0 0 100px;
	}

	#formVoteTeamB {
		float: right;
		margin: 0 100px 0 0;
	}

	.voteQuantity {
		width:80px;
		height:28px;
		font-size:28px;
		text-align:center;
	}

	.voteSubmitBtn {
		vertical-align: middle;
	}

	</style>

</head>

<body>

<div id="container">

	<div id="content">

		<?php /*
		<div id="results">
			<div id="resultTeam1"><?php echo 'result 1 goes here'; ?>
				<?php
					$votesTeam1 = 10;
					$votesTeam2 = 20;
					for ($i=1; $i<=$votesTeam1; $i++){

					}
				?>
				<div class="votesTeam1"></div>
			</div>
		</div>
		*/ ?>

		<div id="header">
			<img src="img/header.jpg" />
		</div>

		<div id="teams">
			<img src="img/team_logos.png" />
		</div>




		<div id="formsVote">

			<?php /* <form action="https://www.paypal.com/cgi-bin/webscr" method="post"> */ ?>
			<div id="formVoteTeamA" class="formVote">
				<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="SPQT66Z5XEEZN">
					<input type="text" name="quantity" value="1" class="voteQuantity">
					<input type="image" src="http://voteformyteam.com/img/vote_a.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>

			<div id="formVoteTeamB" class="formVote">
				<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="QXCDMEPHE6CM2">
					<input type="text" name="quantity" value="1" class="voteQuantity">
					<input type="image" src="http://voteformyteam.com/img/vote_b.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>
			</div>

			<div class="clear"></div>

		</div>

	</div>

</div>



</body>
</html>
