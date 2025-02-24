<?php 
namespace App\Models;

use CodeIgniter\Model;

class NewsModels extends Model {
    protected $table = 'news';
    public function getNews($slug = false): array|object|null
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}