<!DOCTYPE html>
<html>
  <head>
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link href="/css/navigation.css" rel="stylesheet" type="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Sahitya:400,700" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <div class="wrapp">


      <div class="navigation">
         <ul>
            <li><a href="http://todo.dev/">Sākums</a></li>
            <li><a href="http://todo.dev/forum">Forums</a><li
            <li><a href="http://todo.dev/gallery">Galerijas</a></li>
            <li><a href="http://todo.dev/apply">Pieteikties fotosesijai</a></li>
            <li><a href="http://todo.dev/contacts">Kontakti</a></li>
            <li><a href="http://todo.dev/news">Jaunumi</a></li>
         </ul>
      </div>

      <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
	<div class="row">
		<label for="name">Tavs vārds:</label><br />
		<input id="name" class="input" name="name" type="text" value="" size="30" /><br />
	</div>
	<div class="row">
		<label for="email">Tavs epasts:</label><br />
		<input id="email" class="input" name="email" type="text" value="" size="30" /><br />
	</div>
	<div class="row">
		<label for="message">Jūsu teksts:</label><br />
		<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
	</div>
	<input id="submit_button" type="submit" value="Send email" />
</form>

    </div>
  </body>
</html>
