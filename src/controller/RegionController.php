<?php
/**
 * @author yupoxiong<i@yufuping.com>
 */

namespace yupoxiong\region\controller;

use think\Request;
use yupoxiong\region\model\Region;

class RegionController extends Controller
{
    public function index()
    {
        $data = (new Region)->getDataList(request());
        return $this->success($data);
    }

    public function save(Request $request)
    {
        $result = Region::create($request->param());
        return $result ? $this->success($result) : $this->error();
    }

    public function read($id)
    {
        $result = Region::find($id);
        return $result ? $this->success($result) : $this->error();
    }

    public function update(Request $request, $id)
    {
        $result = Region::update($request->param(), ['id' => $id]);
        return $result ? $this->success() : $this->error();
    }

    public function delete($id)
    {
        $result = Region::destroy($id);
        return $result ? $this->success() : $this->error();
    }


}
