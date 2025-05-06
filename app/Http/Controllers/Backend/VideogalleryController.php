<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Videogallery;
use Illuminate\Http\Request;

class VideogalleryController extends Controller
{
    public function videogallerycreate (){
        return view('Backend.videogallery.create');
    }
    public function videoGalleryStore(Request $request)
    {
        $request->validate([
            'video_url' => 'required|url|max:255',
        ]);

        try {
            // Extract video ID from the URL
            $video_url = $request->input('video_url');
            parse_str(parse_url($video_url, PHP_URL_QUERY), $query);
            $video_id = $query['v'] ?? null;

            if (!$video_id) {
                return back()->with('error', 'Invalid YouTube URL.');
            }

            // Create embed URL
            $embed_url = "https://www.youtube.com/embed/" . $video_id;

            // Save embed URL in the database
            Videogallery::create([
                'video_url' => $embed_url,
            ]);

            return back()->with('success', 'Video URL added successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to add video URL: ' . $e->getMessage());
        }
    }


public function videoGalleryindex(){
    $datashow=Videogallery::all();
  return view('Backend.videogallery.index',compact('datashow'));
}
public function videoGalleryedit($id){
    $data_edit=Videogallery::find($id);
    return view('Backend.videogallery.edit',compact('data_edit'));
}
public function videoGalleryupdate(Request $request,$id){
    Videogallery::find($id)->update([
        'video_url' => $request->input('video_url'),
    ]);
    return back()->with('success', 'Video URL update successfully!');
}
public function videoGallerydelete($id){
    $delete=Videogallery::find($id);
    $delete->delete();
    return back()->with('success', 'Video URL delete successfully!');
}
}
