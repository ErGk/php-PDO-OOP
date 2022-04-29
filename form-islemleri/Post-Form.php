<?php

    $_POST = array_map("PostKontrolEt", $_POST);

    function PostKontrolEt($value){
        if(is_array($value)){
            return array_map("PostKontrolEt", $value);
        }else{
            return htmlspecialchars(trim($value));
        }
    }

    function PostVarMi($post){

        if(isset($_POST[$post])){
            return $_POST[$post];
        }

    }

    if(PostVarMi("key")):
        echo PostVarMi("name");
    endif;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

        <input type="text" name="name" placeholder="Name" value="<?php if(PostVarMi("name")) echo PostVarMi("name") ?>"> <br> <br>

        <input type="text" name="surname" placeholder="Surname" value="<?php if(PostVarMi("surname")) echo PostVarMi("surname") ?>" > <br> <br> <hr>

        <textarea placeholder="About" name="about" cols="50" rows="5"><?php if(PostVarMi("about")) echo PostVarMi("about") ?></textarea> <br> <br>

        <select name="worked" id="">
            <option <?php echo PostVarMi("worked") == "--" ? "selected" : null ?> value="--">--</option>
            <option <?php echo PostVarMi("worked") == "Full-Stack" ? "selected" : null ?> value="Full-Stack">Full Stack</option>
            <option <?php echo PostVarMi("worked") == "Front-End" ? "selected" : null ?> value="Front-End">Front End</option>
        </select> 
        
        <br> <br>

        <label for="life">
            <input <?php echo PostVarMi("life") && in_array('Life', PostVarMi("life")) ? 'checked' : null ?>  id="life" type="radio" name="life[]" value="Life"> Life
        </label>

        <label for="life2">
            <input <?php echo PostVarMi("life") && in_array("Death", PostVarMi("life")) ? 'checked' : null ?> id="life2" type="radio" name="life[]" value="Death"> Death
        </label>

        <br> <br>
        
        <label>
             <input <?php echo PostVarMi("gender") && in_array('Male', PostVarMi("gender")) ? 'checked' : null ?>  type="checkbox" name="gender[]" value="Male"> Male
        </label>

        <label>
             <input <?php echo PostVarMi("gender") && in_array('Famale', PostVarMi("gender")) ? 'checked' : null ?> type="checkbox" name="gender[]" value="Famale"> FaMale
        </label>

        <br> <br>

        <input type="file">
        <br> <br>

        <select name="sectionmultiple[]" multiple size="5" >
            <option  disabled value="--seç--">--Seç--</option>
            <option <?php echo PostVarMi("sectionmultiple") && in_array("select", PostVarMi("sectionmultiple")) ? "selected" : null  ?> value="select">Select</option>
            <option <?php echo PostVarMi("sectionmultiple") && in_array("select1", PostVarMi("sectionmultiple")) ? "selected" : null  ?> value="select1">Select 1</option>
            <option <?php echo PostVarMi("sectionmultiple") && in_array("select2", PostVarMi("sectionmultiple")) ? "selected" : null  ?> value="select2">Select 2</option>
        </select>
        <input type="hidden" name="key" value="5dqw4d5sf48wf22c15sfe5sa6s321ce4as5se8871q29">

        <button type="submit">Send</button>

    </form>
</body>
</html>