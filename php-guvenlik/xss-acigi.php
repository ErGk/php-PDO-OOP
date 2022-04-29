<?php

if(isset($_POST['about'])):
    echo htmlspecialchars($_POST['about']); // htmlspecialchars kodu bu sayfamıza örnek
endif;


?>


<form action="" method="POST">

    <textarea name="about" id="" cols="30" rows="10"></textarea> <br>
    <button>Gönder</button>

</form>