<?php 

namespace App\Controllers;
use App\Models\NewsModels;
use CodeIgniter\Exceptions\PageNotFoundException;

class News extends BaseController
{
    public function index()
    {
        $model = model(NewsModels::class);
        $data = [
            'news_list' => $model->getNews(),
            'title' => 'news archive',
        ];

        return view('templates/header', $data)
            . view('news/index')
            . view('templates/footer');
    }

    public function show(?string $slug = null)
    {
        $model = model(NewsModels::class);
        $data['news'] = $model->getNews($slug);
        if($data['news'] === null) {
            throw new PageNotFoundException('sa tak bisa mencari item news: ' . $slug);
        }
        $data['title'] = $data['news']['title'];
        return view('templates/header', $data)
            . view('news/view')
            . view('templates/footer');
    }
}