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

    $token1 = generate($user);

    // echo "token 1 " . $token1 . "\n";
   
   function verifikasi_token($user, $token)
   {
    $tokens = isset($_SESSION['tokens']) ? $_SESSION['tokens'] : [];
    $usertokens = isset($tokens[$user]) ? $tokens [$user] : [];
    $key = array_search($token, $usertokens);
    if ($key !== false)
    {
        unset($usertokens[$key]);
        $tokens[$user] = $usertokens;
        $_SESSION['tokens'] = $tokens;
        return true;
    } 
    return false;
   }
   $user = "septian";
   $tokenverify = $token1;
   $result = verifikasi_token($user, $tokenverify);
   if ($result)
   {
       echo "token valid. token telah dihapus.";
   }else {
       echo " token tidak valid atau tidak terdaftar.";
   }
?>