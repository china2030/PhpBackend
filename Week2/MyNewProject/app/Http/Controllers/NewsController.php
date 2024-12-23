<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsCreateRequest;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news=News::all();
        return view('homepage', compact(['news']));
    }

    public function create(NewsCreateRequest $request)
    {
        $data=$request->validated();

        $news = new News();
        $news->title= $data['title'];
        $news->author_name= $data['author_name'];
        $news->image_url= $data['image_url'];
        $news->text= $data['text'];
        $news->save();

        return redirect(route('homepage'))->with('success','News Created Successfully');
    }

    public function detail($id)
    {
    //dd($id);
      $news=News::find($id);
      return view('detailed-news', compact(['news']));
    }

    public function  getUpdatePage(int $id)
    {
        $news=News::find($id);
        return view('update-news', compact(['news']));
    }

    public function update(Request $request, $id)
    {
        $news=News::find($id);

        //dd($news);
        $news->title = $request->title;
        $news->author_name = $request->author_name;
        $news->image_url = $request->image_url;
        $news->text = $request->text;

        $news->save();

        return redirect(route('one-news', $news->id));
    }

    public function delete(int $id)
    {
        $deleted = News::destroy($id);

        if($deleted){
            return redirect(route('homepage'));
        }

        return response()->json(['error'=>'Wrong'],500);
    }
}
