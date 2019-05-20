<?php
/**
 * @author yupoxiong<i@yufuping.com>
 */

namespace yupoxiong\region\middleware;

use yupoxiong\region\traits\Result;

class Auth
{
    use Result;
    /**
     * 检查授权
     * @param \think\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, \Closure $next)
    {

        if(!$this->check($request)){
            return $this->error('Unauthorized', 401);
        }

        return $next($request);


    }

    /**
     * @param \think\Request $request
     */
    public function check($request)
    {
        $app_key = $request->header('app_token');

        return true;

    }
}