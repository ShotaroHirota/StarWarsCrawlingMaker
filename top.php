<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>StarWarsCrawlingMaker</title>
</head>
<body>
	<header>
		<h1>StarWarsCrawlingMaker</h1>
	</header>	
	

	<section id="main">
		<form action="controller.php" method="post" class="free_writing">
			<div>
				EPISODE
				<select name="episode">
					<div>
						<option value="EPISODE 1">1</option>
						<option value="EPISODE 2">2</option>
						<option value="EPISODE 3">3</option>
						<option value="EPISODE 4" selected="">4</option>
						<option value="EPISODE 5">5</option>
						<option value="EPISODE 6">6</option>
						<option value="EPISODE 7">7</option>
					</div>
					<!-- <option value="EPISODE Ⅷ">Ⅷ</option> -->
					<!-- <option value="EPISODE Ⅸ">Ⅸ</option> -->
				</select>
			</div>
			<div>
				subtitle : 50 letters(Max)　<br>
				<input type="text" name="subtitle" maxlength="50" placeholder="A New Hope" required>
			</div>
			
			<div>
				main : 500 letters(Max)　<br>
				<textarea name="opening_crawl" id="main" cols="30" rows="10" maxlength="500" placeholder="It is a period of civil war. Rebel spaceships, striking from a hidden base, have won their first victory against the evil Galactic Empire. During the battle, Rebel spies managed to steal secret plans to the Empire's ultimate weapon, the DEATH STAR, an armored space station with enough power to destroy an entire planet. Pursued by the Empire's sinister agents, Princess Leia races home aboard her starship, custodian of the stolen plans that can save her people and restore freedom to the galaxy...." required></textarea>
			</div>
			<input type="hidden" name ="refferer" value="free_writing">

			<button type="submit" name="action" value="send">As you wish</button>

		</form>
		<br>

		<form action="controller.php" method="POST">
			<div class="episode">
				<p>If you want to watch EPISODE
					<select name="episode">
						<option value="4">1</option>
						<option value="5">2</option>
						<option value="6">3</option>
						<option value="1">4</option>
						<option value="2">5</option>
						<option value="3">6</option>
						<option value="7">7</option>
						<!-- <option value="8">Ⅷ</option> -->
						<!-- <option value="9">Ⅸ</option> -->
					</select>
				opening crawling?</p><!--inline-->
			</div>
			
			<input type="hidden" name ="refferer" value="episode_selected">
			
			<p>Here:<button type="submit" name="action" value="send">As you wish</button></p>
		</form>
	</section><!--end section#main -->
	<footer>
		<p>
		This app is inspired by Craig Buckler's DEMO -><a href="https://www.sitepoint.com/css3-starwars-scrolling-text/">Star Wars 3D Scrolling Text in CSS3</a>
		</p>

	</footer>

</body>
</html>
