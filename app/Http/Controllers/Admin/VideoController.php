<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Video;

class VideoController extends Controller
{
     public function index()
    {
        $videos = Video::all();
        return view('admin.video.index', compact('videos'));
    }

    public function create()
    {
        return view('admin.video.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'           => 'required',
            'url'          => 'required'
        ]);

        $video = new Video;

        $video->name      = $request->name;
        $video->url     = $request->url;
        $video->save();

        return redirect()->route('admin.videos.show');

    }

       public function delete(Request $request)
    {
        $video = Video::findOrFail($request->id);

        if($video->delete())
        {
            $alert_toast = 
            [
                'title' =>  'Operation Successful : ',
                'text'  =>  'Media Successfully Deleted.',
                'type'  =>  'success',
            ];
        }
        else
        {
            $alert_toast = 
            [
                'title' => 'Operation Failed : ',
                'text'  => 'A Problem Deleting The Media.',
                'type'  => 'danger',
            ];
        }

        \Session::flash('alert_toast', $alert_toast);
        return redirect()->route('admin.videos.show');
    }
}
