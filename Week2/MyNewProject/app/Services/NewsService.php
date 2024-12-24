<?php
namespace App\Services;

use App\Models\News;
use Illuminate\Http\Request;
//use App\Services\Interfaces\NewsServiceInterface;
class NewsService
    {
    //    public function __construct(private NewsRepository)
//    {
//
//    }

//    public function getAll()
//    {
//        return $this->newsRepository -> All();
//    }

    public function getById($id)
    {
        return News::find($id);
    }

    public function update(int $id,Request $request): News
    {
        $news=News::find($id);

        $news->title = $request->title;
        $news->author_name = $request->author_name;
        $news->image_url = $request->image_url;
        $news->text = $request->text;

        $news->save();

        return $news;
    }

    public function create(array $data)
    {
        $news = new News();
        $news->title= $data['title'];
        $news->author_name= $data['author_name'];
        $news->image_url= $data['image_url'];
        $news->text= $data['text'];
        $news->save();
    }

    public function getAll()
    {
        return News::all();
    }

    public function delete(int $id)
    {
       return News::destroy($id);
    }
}

