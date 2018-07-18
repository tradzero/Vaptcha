<?php

namespace Newone\Vaptcha\Controller;

use App\Http\Controllers\Controller;
use Vaptcha\Vaptcha;

class VaptchaController extends Controller
{
    public function vaptcha()
    {
        list($vid, $key) = get_vaptcha_config();
        if (empty($vid) || empty($key)) {
            return $this->responseError('not support');
        }
        $v = new Vaptcha($vid, $key);
        $result = $v->getChallenge();
        return $this->responseItem([
            'vid' => $result['vid'],
            'challenge' => $result['challenge'],
        ]);
    }

    public function vaptchaDown()
    {
        list($vid, $key) = get_vaptcha_config();
        if (empty($vid) || empty($key)) {
            return $this->responseError('not support');
        }
        $v = new Vaptcha($vid, $key);
        $data = request()->get('data');
        $result = $v->downTime($data);
        return $result;
    }

    public function responseItem($item)
    {
        $data = [];
        $data['code'] = 0;
        $data['errmsg'] = '';
        $data['data'] = $item;
        return response()->json($data);
    }

    public function responseError($msg, $code = -1)
    {
        $data = [];
        $data['code'] = $code;
        $data['errmsg'] = $msg;
        $data['data'] = [];
        return response()->json($data);
    }
}
