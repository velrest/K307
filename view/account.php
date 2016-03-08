<html>
<head>
    <title>SwissNotes - Account</title>
    <base href="/-K307/">
    <link rel="stylesheet" type="text/css" href="view/static/bootstrap.min.css">
    <link rel="icon" type="image/png" href="view/static/images/favicon.png">
    <link rel="stylesheet" type="text/css" href="view/static/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
<header>
    <?php print $this->notes[1]["content"]?>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-7"><h1 style="padding:0px">SwissNotes - Hello, <?php print $this->userData["username"]?></h1></div>
        <div class="col-md-1 padding20">
            <a href=""><button id="login">Log out</button></a>
        </div>
        <div class="col-md-2"></div>
    </div>
</header>
<div class="row">
    <div class="col-md-2"></div>
    <div id="account_nav" class="col-md-2">
        <ul class="ac_nav_li">
            <li> + New Note</li>
        </ul>
    </div>
    <div id="note_container" class="col-md-6">
        <textarea>
        </textarea>
    </div>
    <div class="col-md-2"></div>
</div>
</body>
</html>