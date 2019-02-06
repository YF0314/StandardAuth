<?php
namespace StandardAuth\Auth;

class RandomString {

    /**
     * get
     * @author ito
     */
    public function get()
    {
        return rtrim(base64_encode(bin2hex(openssl_random_pseudo_bytes(32))), '==');
    }
}
