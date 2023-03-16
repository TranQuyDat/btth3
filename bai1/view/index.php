<?php
$dir = dirname(__DIR__);
require_once $dir.'/MyEmailServer.php';
require_once $dir.'/EmailSender.php';
if(isset($_POST['submit_button'])){
    $mailserver = new btth3\btth3\MyEmailServer();
    $mailsend = new btth3\btth3\EmailSender($mailserver);
    $mailsend->Send($_POST['email'],$_POST['subject'],$_POST['mes']);

}
else {
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Form email</title>
</head>
<body>
    <h1 class="text-center">GUI MAIL</h1>
    <form class=" row" action="./index.php" method="POST" enctype="multipart/form-data">
        
        <div class="input-group m-3 ">
           
            <label class="" for="email">Email</label>
            <input class="form-control ml-3 mr-3" type="email" name="email" id="email" >
        </div>
        
        <div class="input-group m-3">
            <label for="subject">Subject</label>
            <input class="form-control ml-3 mr-3" type="text" name="subject" id="subject">
        </div>

        <div class="input-group m-3"> 
            <label for="mes">messenger</label>
            <input class="form-control ml-3 mr-3" type="text" name="mes" id="mes">
        </div>
        <!-- <div class="input-group m-3"> 
            <label for="file">File</label>
            <input class=" ml-3 mr-3" type="file" name="file"  >
        </div> -->
        <div class="m-3">
            <input class="btn btn-success float-end" type="submit" name="submit_button" value="GUI">
        </div>
    </form>
</body>
</html>
<?php }?>