<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Projects extends Controller
{
    public $contentData = [];

    public function requestQuotation()
    {
        $getjson = file_get_contents(public_path() . '/fakeJson/fake-request-quotation.json');
        $decodeJson = json_decode(stripslashes($getjson), true, 5);

        $this->contentData['title'] = '見積依頼一覧';
        $this->contentData['requestQuotationList'] = $decodeJson;
        return view('admin.projects.request-quotation', $this->contentData);
    }


    public function detaiRequestQuotation($id)
    {
        $getjson = file_get_contents(public_path() . '/fakeJson/fake-request-quotation.json');
        $decodeJson = json_decode(stripslashes($getjson), true, 5);

        foreach ($decodeJson as $value) {
            if ($value['project_id'] == $id) {
                $this->contentData['detail'] = $value['detail'];
            }
        }
        $this->contentData['title'] = '編集';
        return view('admin.projects.detail-request-quotation', $this->contentData);
    }


    public function wordMouth()
    {
        $this->contentData['title'] = '口コミ';
        return view('admin.projects.word-mouth', $this->contentData);
    }
    public function occupation()
    {
        $this->contentData['title'] = '士業';
        return view('admin.projects.occupation', $this->contentData);
    }
}
