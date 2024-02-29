<?php

function generate($user)
    {
        $token = isset($_SESSION['tokens']) ? $_SESSION['tokens'] : [];
        $usertokens = isset($tokens[$user]) ? $tokens [$user] : [];
        $newtoken = generaterandomstring();
        $usertokens[] = $newtoken;
        if (count($usertokens)>10)
        {
            array_shift($usertokens);
        }
        $token[$user] = $usertokens;
        $_SESSION['token'] = $token;
        return $newtoken;
    }
    function generaterandomstring($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomstring = '';
        for ($i = 0; $i < $length; $i++)
        {
            $randomstring .= $characters[rand(0,strlen($characters) - 1)];
        }
        return $randomstring;
    }
    $user = "septian";
    $user1 = "nugraha";

    $token1 = generate($user);
    $token2 = generate($user1);
   

    echo "token 1 " . $token1 . "\n";
    echo "token 2 " . $token2 . "\n";
   
?>