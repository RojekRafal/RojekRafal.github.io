<html lang="pl">
<head>
	<title>Blog Rafał Rojek</title>
	<meta charset="UTF-8">
	
	<style>
	body{
		background-color:#208a4e;
		font-family: Arial;
	}
	
	.header{
		text-align:left;
		height:10%;
		padding:20px;
		background-color:#106636;
		
	}
	.header img{
		height: 80px;
		margin-right: 20px;
	}
	
	img{
		float:left;
		height:50%;
		padding:20px;
		
	}
	.left{
		float:left;
		width:70%;
		height:73%;
		padding:20px;
		background-color:#c9d9bf;
		
	}
	.right1{
		float:right;
		width:20%;
		height:20%;
		padding:20px;
		text-align:center;
		background-color: #c9d9bf;
	}
	.right2{
		float:right;
		width:20%;
		height:50%;
		padding:20px;
		text-align:center;
		background-color: #c9d9bf;
		
	}
	.footer{
		clear:both;
		background-color: #106636;
        color: white;
        text-align: center;
		padding: 40px;
	}
	
	
	p{
		font-size:20px;
		
	}
	.post {
            margin-bottom: 30px;
    }

    .post h2 {
			color: #106636;
    }

    .post p {
        font-size: 18px;
        line-height: 1.5;
    }
	
</style>
</head>



<body>
	<div class="container">
	<div class="header">
		<br>
		
		<img src="image.png" alt="uśmieszek">
		<h1>Blog Rafała Rojka</h1>
	</div>
	<div class="left">
            
			<?php

        $tytul1 = "Pierwszy wpis: Witaj na blogu!";
        $tresc1 = "To mój pierwszy wpis — testuję działanie dynamicznej treści w PHP.";

        $tytul2 = "Jak stworzyłem tego bloga";
        $tresc2 = "Strona została napisana w HTML, CSS i PHP. Wykorzystałem pętlę, by generować wpisy.";

        $tytul3 = "Lorem Ipsum";
        $tresc3 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam pretium ex vitae nibh luctus tincidunt. In sit amet fermentum purus. Aenean eget blandit ante. Morbi erat elit, porta pellentesque pretium ultricies, tincidunt et justo. Etiam hendrerit non magna quis rhoncus. Integer sit amet convallis urna, id facilisis nibh. Vivamus tincidunt volutpat ligula, a sagittis diam lobortis molestie.";


        $tytuly = [$tytul1, $tytul2, $tytul3];
        $tresci = [$tresc1, $tresc2, $tresc3];


        for ($i = 0; $i < count($tytuly); $i++) {
            echo "<article>";
            echo "<h2>{$tytuly[$i]}</h2>";
            echo "<p>{$tresci[$i]}</p>";
            echo "</article>";
        }
        ?>
		
			<form action="test.php" method="post" name="formkom" onsubmit="return validateForm()">
			Nick:  &nbsp&nbsp&nbsp<input type="text" name="nick"><br>
			E-mail: <input type="email" name="email"><br>
			Komentarz: <br><textarea name="koment" rows="4" cols ="30" ></textarea>
			<input type="submit">
			</form>
			
        </div>
	<div class="right1">
		<h2>O mnie</h2><br>
		<p>Mam 23 lata, jestem studentem Informatyki na Uniwersytecie Śląskim</p>
		
	</div>
	<div class="right2">
		<h2>Strona główna</h2><br>
		
		
		<audio id="dzwiek" >

		</audio>
		<button id="przelacz" onclick="przelaczDzwiek()">Play</button>
	
	
	
	
	
		<h2>Kalendarz</h2><br>
		<?php echo date('l jS \of F Y h:i:s A');?>
		<h2>Kategorie</h2>
		<ul>
            <li>Wrzesień 2025</li>
            <li>Sierpień 2025</li>
            <li>Lipiec 2025</li>
        </ul>
		<br>
		<h2>Panel administracyjny</h2><br>
		<a href="#">Zaloguj się</a>
	</div>
	<div class="footer">
	
Copyright
<?php echo "© " . date("Y") . " Rafał Rojek"; ?>

	</div>
	</div>
	
	<script type="text/javascript">
	var music = document.getElementById("dzwiek");
		var guzik = document.getElementById("przelacz");
		var song = ["1.mp3","2.mp3","3.mp3","4.mp3","5.mp3"];
		function przelaczDzwiek() {
		
		music.volume = 0.04;
			if (music.paused) {
					var los = Math.floor(Math.random() * 5);
					music.src=song[los];
					var losowy = Math.random() * 60;		
					music.currentTime = losowy;
					music.play();
					IntervalId = setInterval(random, 2000);
					guzik.innerHTML = "Pause";
				}
				else {
					music.pause();
					guzik.innerHTML ="Play";
						clearInterval(IntervalId);
						IntervalId = null;
				}
			}
		
		function random(){
			var los = Math.floor(Math.random() * 5);
			music.src=song[los];

			music.play();
		}
		
		function validateForm() {
	  let x = document.forms["formkom"]["nick"].value;
	  if (x == "") {
		alert("Musisz uzupełnić pole nick");
		return false;
	  }
	  let y = document.forms["formkom"]["email"].value;
	  if (y == "") {
		alert("Adres email jest wymagany do komentowania");
		return false;
	  }
	  let z = document.forms["formkom"]["koment"].value;
	  if (z == "") {
		alert("Komentarz nie może być pusty");
		return false;
	  }
}
	</script>
</body>
</html>