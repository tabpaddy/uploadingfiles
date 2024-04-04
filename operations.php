<?php

function inputfields($placeholder,$name,$value,$type,$id, $for, $label){
    $ele = "<div class=\"mb-3\">
    <label for=$for class=\"form-label\"> $label</label>
    <input type='$type' class=\"form-control\" id=$id name='$name' placeholder='$placeholder' value='$value' autocomplete=\"off\">      
</div>
    ";
    echo $ele;
}

?>