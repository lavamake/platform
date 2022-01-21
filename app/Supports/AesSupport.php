<?php

namespace App\Supports;

use App\Constracts\AesInterface;

class AesSupport implements AesInterface
{
    const METHOD = "AES-256-CBC";

    public static function encode($data)
    {
        $key = env('APP_AES_KEY', '123456');
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length(self::METHOD));

        $encrypted = openssl_encrypt($data, self::METHOD, $key, OPENSSL_RAW_DATA, $iv);
        return base64_encode(base64_encode($encrypted) . '::' . base64_encode($iv));
    }


    public static function decode($data)
    {
        if (!$data) {
            return false;
        }
        $key = env('APP_AES_KEY', '123456');
        list($encrypted_data, $iv) = explode('::', base64_decode($data), 2);
        return openssl_decrypt(base64_decode($encrypted_data), self::METHOD, $key, OPENSSL_RAW_DATA, base64_decode($iv));
    }

}
