<?php
    
    function greeting($word1, $word2){
        $word = $word1.$word2;
        return $word;
    }

    echo greeting(hello, world);

?>