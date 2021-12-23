<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Media;

class MediaController extends Controller
{
    public function index()
    {
        $medias = Media::all();
        return view('admin.media.index', compact('medias'));
    }

    public function create()
    {
        return view('admin.media.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'           => 'required',
            'url'          => 'required',
            'category'       => 'required',
        ]);

        $media = new Media;

        $media->name      = $request->name;
        $media->url     = $request->url;
        $media->category  = $request->category;

        $media->save();

        return redirect()->route('admin.media.index');

    }

       public function delete(Request $request)
    {
        $media = Media::findOrFail($request->id);

        if($media->delete())
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
        return redirect()->route('admin.media.index');
    }
}
