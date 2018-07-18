<?php
header('Content-type: application/json');

class Response
{
    public static function json($status, $message, $data = null)
    {
        return json_encode(array(
            "status" => $status,
            "msg" => $message,
            "data" => $data
        ));
    }

    public static function data($data)
    {
        return  self::json(200, 'success', $data);
    }
    
    public static function success($message)
    {
        return  self::json(200, $message);
    }

    public static function notFound($message)
    {
        return  self::json(404, $message);
    }
}
