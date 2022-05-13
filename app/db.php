<?php

function connect(){
    return new mysqli(HOST, USERNAME, PASSWORD, DB);
}

?>