<?php
namespace App\Repositories;
use App\Models\News;

class NewsRepository
{
    public function all()
    {
        return News::all();
    }
}
