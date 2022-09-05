<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class User extends Controller
{
    public $contentData = [];

    public function index() {
        $this->contentData['title'] = 'User';
        return view('admin.user.index', $this->contentData);
    }
}
