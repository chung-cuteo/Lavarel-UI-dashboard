<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public $contentData = [];

    public function index()
    {
        $this->contentData['title'] = 'Top';
        return view('admin.dashboard.top', $this->contentData);
    }
}
