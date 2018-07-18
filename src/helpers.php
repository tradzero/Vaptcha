<?php

use Vaptcha\Vaptcha;

if (!function_exists('vaptcha_verify')) {
    function vaptcha_verify()
    {
        list($vid, $key) = get_vaptcha_config();
        if (empty($vid) || empty($key)) {
            return false;
        }
        $v = new Vaptcha($vid, $key);
        $token = request()->get('token');
        $challenge = request()->get('challenge');

        $result = $v->validate($challenge, $token);
        return $result;

    }

    function get_vaptcha_config()
    {
        $vid = '';
        $key = '';
        $enableChannel = config('vaptcha.enable');
        if ($enableChannel[0] == 'default') {
            $vid = config('vaptcha.config.vid');
            $key = config('vaptcha.config.key');
        } else {
            $source = request()->get('source');
            if (in_array($source, $enableChannel)) {
                $vid = config("vaptcha.config.{$source}.vid");
                $key = config("vaptcha.config.{$source}.key");
            }
        }
        return [$vid, $key];
    }
}