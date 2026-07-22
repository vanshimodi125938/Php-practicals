<?php
// creating cookie
//setcookie("user","vanshi",time() + 300);

// edit cookie
//setcookie("user","developer",time() + 300);

//deleting 
setcookie("user","vanshi",time() - 300);

//encrypt the cookie
//orgstring + ltrs/num/sym = encstring
//vanshi + encryptionmethod = #v@n$hi
//


//evaluate /  creating


function enc_cookie($data)
{
    $data = $data . "72727*/";
    setcookie("user", "$data", time() + 300);
    echo $_COOKIE['user'];
}

enc_cookie("vanshi");






?>