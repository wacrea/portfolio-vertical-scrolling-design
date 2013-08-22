<!DOCTYPE html>
	<?php require_once('lib/lang.php'); ?>
<html>
<head>
<title>Tony Stark bis - <?php echo lang('Designer d\'interfaces & développeur web (front-end)', 'I \'m a web & UI designer & webdeveloper front-end.'); ?></title>


<link rel="stylesheet" type="text/css" href="style.css" />

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="nav.js"></script>

<?php date_default_timezone_set("Europe/Paris"); ?>

</head>

<body>

	<div id="home">
		<div id="page">
	
			<div id="title">
				<h1>Tony Stark <sup>bis</sup></h1>
				
				<h3><?php echo lang('<span style="color: #ad4039;">Designer d\'interfaces</span> & <span style="color: #8ce041;">développeur web</span> (front-end).', 'I \'m a <span style="color: #ad4039;">UI designer</span> & <span style="color: #8ce041;">webdeveloper</span> front-end.'); ?></h3>
			
			</div>
			
			<nav>
				<ul>
					<li><a href="#home"><?php echo lang('Accueil', 'Home'); ?></a></li>
					<li><a href="#about-me"><?php echo lang('À propos de moi', 'About me'); ?></a></li>
					<li><a href="#portfolio"><?php echo lang('Portfolio', 'Portfolio'); ?></a></li>
					<li><a href="#contact"><?php echo lang('Contactez moi', 'Contact me'); ?></a></li>
				</ul>
			</nav>
		
		</div>
	</div>
	
	<div id="about-me">
		<div id="links">
			<div id="links_sous">
				<div id="links_sous_sous">
					<img alt="Ball" src="images/ball.png" />
				</div>
			</div>
		</div>
		<div id="page">
			<img alt="Photo" src="images/photo.png" id="photo" />

			<div id="text">
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
			</div>
			
			<div id="dernier-tweet">

				<a href="http://www.twitter.com/scofred_"><img alt="logo twitter" src="images/last_tweet.png" id="logo_last_tweet" /></a>

				<?php
					function parse($text)
					{
						 $text = preg_replace('#http://[a-z0-9._/-]+#i', '<a href="$0">$0</a>', $text);
						 $text = preg_replace('#@([a-z0-9_]+)#i', '@<a href="http://twitter.com/$1">$1</a>', $text);
						 $text = preg_replace('# \#([a-z0-9_-]+)#i', ' #<a href="http://search.twitter.com/search?q=%23$1">$1</a>', $text);
						 return $text;
					}

					$user = "scofred_"; /* Nom d'utilisateur sur Twitter */
					$count = 1; /* Nombre de message à afficher */
					$date_format = 'd M Y, H:i:s'; /* Format de la date à afficher */
					$url = 'http://twitter.com/statuses/user_timeline/'.$user.'.xml?count='.$count;
					$oXML = simplexml_load_file( $url );

					function fixEncoding($in_str) 
					{ 
					  $cur_encoding = mb_detect_encoding($in_str) ; 
					  if($cur_encoding == "UTF-8" && mb_check_encoding($in_str,"UTF-8")) 
					    return $in_str; 
					  else 
					    return utf8_encode($in_str); 
					} 

					foreach( $oXML->status as $oStatus )
					{
					 $datetime = date_create($oStatus->created_at);
					 $date = date_format($datetime, $date_format)."\n";
					 echo parse(fixEncoding(utf8_decode($oStatus->text)));
					}
				?>
			</div>

			<div id="skills">

				<table>
					<tr>
						<td class="nom">HTML</td>
						<td class="note" title="4/5"><div id="note1"></div><div id="note1"></div><div id="note1"></div><div id="note1"></div><div id="note0"></div></td>
					</tr>
					<tr>
						<td class="nom">CSS</td>
						<td class="note" title="4/5"><div id="note1"></div><div id="note1"></div><div id="note1"></div><div id="note1"></div><div id="note0"></div></td>
					</tr>
					<tr>
						<td class="nom">Photoshop</td>
						<td class="note" title="4/5"><div id="note1"></div><div id="note1"></div><div id="note1"></div><div id="note1"></div><div id="note0"></div></td>
					</tr>
					<tr>
						<td class="nom">PHP</td>
						<td class="note" title="3/5"><div id="note1"></div><div id="note1"></div><div id="note1"></div><div id="note0"></div><div id="note0"></div></td>
					</tr>
				</table>
				
			</div>

		</div>
	</div>

	<div id="portfolio">
		<div id="page">

			<h1>Portfolio</h1>
			<p><?php echo lang('Tout mes travaux récents', 'All of my recents work'); ?></p>

			<div id="creations">
				
				<div id="creation" style="background:url('http://fakeimg.pl/439x230/282828/eae0d0/?text=Hello') top center;">
					<div id="legende">
						<b>Work1</b>
					</div>
				</div>
				
				<div id="creation" style="background:url('http://fakeimg.pl/439x230/282828/eae0d0/?text=Hello') top center;">
					<div id="legende">
						<b>Work2</b>
					</div>
				</div>				

				<div id="creation" style="background:url('http://fakeimg.pl/439x230/282828/eae0d0/?text=Hello') top center;">
					<div id="legende">
						<b>Work3</b>
					</div>
				</div>


			</div>
			
		</div>
	</div>

	<div id="contact">
		<div id="page">
			<img alt="Contactez moi" id="getintouch" src="images/<?php echo lang('resterencontact.png','getintouch.png'); ?>" />

			<div id="formulaire">

				<label for="nom"><?php echo lang('Nom', 'Name'); ?></label><input type="text" name="nom" id="nom" />
				
				<label for="email">E-mail</label><input type="text" name="email" id="email" />

			<br/><br/>

				<label for="msg" id="msglabel">Message</label>
				<br/>
				<textarea name="msg" id="msg" cols="83" rows="14">
				</textarea>

				<button id="send"><?php echo lang('Envoyer', 'Send'); ?></button>

				<script type="text/javascript">
				$(function() {
					$('#send').click(function() {
					  	// Mise en variables
					  	var nom = $("#nom").val();
					  	var email = $("#email").val();
					  	var msg = $("textarea").val();

					  	// Ajax
					  	$.ajax({
						  type: "POST",
						  url: "contact.php",
						  data: "nom="+nom+"&email="+email+"&msg="+msg,
						}).done(function( result ) {
						  $('#result').empty().slideDown().append(result);
						});
					});
				});
				</script>

			</div>

			<div id="result"></div>

		</div>
	</div>

	<div id="top">
		<span><?php echo lang('Haut', 'Top'); ?></span>
	</div>

	<footer>
		<img alt="<3" src="images/v3.png" style="margin-top: 40px;" />
		<p><?php echo lang('Merci de votre visite !', 'Thanks you for visiting !'); ?></p>

		<br/>

		<p>2011</p>

		<br/>

		<p><?php echo lang('Ce portfolio a été développé par <a href="http://www.williamagay.com/">William AGAY</a>', 'This portfolio was developped by <a href="http://www.williamagay.com/">William AGAY</a>'); ?></p>
	</foorer>
	
</body>

</html>