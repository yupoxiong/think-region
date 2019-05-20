<?php
/**
 * @author yupoxiong<i@yufuping.com>
 */

namespace yupoxiong\region\traits;

trait Result
{
    public function success($data = [], $code = 200, $msg = 'success'): \think\response\Json
    {
        return json([
            'code' => $code,
            'msg'  => $msg,
            'data' => $data,
        ], $code);
    }

    public function error($msg = 'success', $code = 500, $data = []): \think\response\Json
    {
        return json([
            'code' => $code,
            'msg'  => $msg,
            'data' => $data,
        ], $code);
    }
}
