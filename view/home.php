<html>
<head>
    <title>SwissNotes</title>
    <?php
    print fread(fopen("view/header.html", "r"), filesize("view/header.html"));
    ?>
</head>
<body>
<header>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8"><h1><b>SwissNotes</b></h1></div>
        <div class="col-md-2 padding20">
            <a href="default/login"><button class="login">Anmelden</button></a>
            <a href="default/register"><button class="login">Registrieren</button></a>
        </div>
        <div class="col-md-1"></div>
    </div>
</header>
<div class="row fixed">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12 nopadding">
                <h2 class="txt_center">SwissNotes erklärt</h2>
            </div>
        </div>
        <img class="center" src="view/static/images/book.png">

        <p class="txt1 txt_center">SwissNotes ist eine Website entwickelt um Sie organisiert zu halten.<br>
            Mit SwissNotes können Sie alle Ihre Notizen in der Cloud jederzeit abrufen.<br>
            SwissNotes ist mit unserem schönen benutzerfreundliches Design einfach zu verwenden.<br>
            Starten Sie mit SwissNotes noch heute!</p>

        <div class="row">
            <div class="col-md-3 nopadding"></div>
            <div class="col-md-6 nopadding">
                <a href="default/register"><h2 id="get_startet" class="margin50 txt_center login">Jetzt Starten!</h2></a>
            </div>
            <div class="col-md-3 nopadding"></div>
        </div>
        <p class="txt1">Screenshot:</p>
        <img class="scrn1 center" src="view/static/images/Info.png" alt="Infobild">

        <img class="block_inline" src="view/static/images/swissflag.jpg" alt="Schweizer Logo"><p class="txt1 block_inline"> Swiss Software</p>
        <p class="txt1 txt_center"> Copyright &copy; SwissNotes - All Rights Reserved</p>
    </div>
    <div class="col-md-2"></div>
</div>
</body>
</html>