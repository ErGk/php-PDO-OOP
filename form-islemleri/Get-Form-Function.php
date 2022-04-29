<?php

    $_GET = array_map("GetKontrolEt", $_GET);

   Function GetKontrolEt($get){

        if(is_array($get)){
          return array_map("GetKontrolEt", $get);
        }else{
          return htmlspecialchars(trim($get));
        }

    }

   Function  GetVarmi($get){
        if(isset($_GET[$get])){
            return $_GET[$get];
        }
   }

?>

<?php echo GetVarmi("name"); ?>

<form action="" method="GET">
    <input type="text" name="name" value= "<?php echo GetVarmi('name'); ?>">
    <button>dww</button>
</form>
