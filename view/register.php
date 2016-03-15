<html>
<head>
  <title>Registrieren</title>
  <?php
    print fread(fopen("view/head.html", "r"), filesize("view/head.html"));
  ?>
</head>
<body>
  <?php
    print fread(fopen("view/header.html", "r"), filesize("view/header.html"));
  ?>
  <div id="register_container">
  <img id="icon" src="view/static/images/register.png" alt="Registrieren"/>
    <h2>Registrieren</h2>
    <form id="register_form" action="user/register" method="post">
      <label for="username">Benutzername </label><br>
      <input id="username" class="form_elements" type="text" name="username" required tabindex="1"/><br>
      <label for="password">Passwort </label><br>
      <input id="password" class="form_elements" type="password" name="password" required tabindex="2"/><br>
      <label for="cpassword">Passwort wiederholen</label><br>
      <input id="cpassword" class="form_elements" type="password" name="cpassword" required tabindex="3"/><br>
      <input id="submit" type="submit" value="Registrieren">
    </form>
  </div>
</body>
</html>