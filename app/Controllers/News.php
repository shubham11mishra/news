<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class News extends BaseController
{
    public function index()
    {
        $newsModel = new \App\Models\NewsModel();
        $data = $newsModel->findAll();
       
        return view('News/allnews', ['news' => $data]);
    }

    public function show($id)
    {
        $newsModel = new \App\Models\NewsModel();
    }
    public function new()
    {
        return view('News/new');
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
}
