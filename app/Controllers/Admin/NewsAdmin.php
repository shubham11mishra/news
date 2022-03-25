<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class NewsAdmin extends BaseController
{
    public function index()
    {
        $newsModel = new \App\Models\NewsModel();
        $data = $newsModel->findAll();

        return view('Admin/News/allnews', ['news' => $data]);
    }

    public function show($id)
    {
        $newsModel = new \App\Models\NewsModel();
    }
    public function new()
    {
        return view('Admin/News/new');
    }
    public function create()
    {

        $newsModel = new \App\Models\NewsModel();
        $news = $this->request->getPost('description');
        $tagsArr = $this->request->getPost('tags');
        $tags = implode(",", $tagsArr);
        $data = [
            'news' => esc($news),
            'tags' => esc($tags)
        ];
        $newsModel->insert($data);
        dd($tags);
    }
    public function test()
    {
        $news = $this->request->getPost('description');
        $tagsArr = $this->request->getPost('tags');
        $data = [
            'news' => esc($news),
            'tags' => esc($tagsArr)
        ];
        echo "a";
    }
}
