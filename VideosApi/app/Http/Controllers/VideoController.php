<?php

namespace App\Http\Controllers;

use App\Video;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class VideoController extends Controller
{
     use ApiResponser;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
    * FRONT END
    * Fetch views of the videos
    * @return Illuminate\Http\Response
    */
    public function views($videos)
    {
      $video = Video::findOrFail($videos);

      $videos = Video::all();

      //dd($videos->where('category', 'Documentary'));

      return view('video', [
          'video' => $video,
          'videos' => $videos,
      ]);
    }

    /**
    * BACK END
    * Return the list of videos
    * @return Illuminate\Http\Response
    */
    public function index()
    {
      $video = Video::all();

      return $this->successResponse($video);
       //return view('app');
    }

    /**
    * Create one new video
    * @return Illuminate\Http\Response
    */
    public function store(Request $request)
    {
      $rules = [
             'name' => 'required|max:255',
             'category'=> 'required|max:255',
             'image' => 'required',
             'url' => 'required|url',
         ];

         $this->validate($request, $rules);

         $video = Video::create($request->all());

         return $this->successResponse($video, Response::HTTP_CREATED);
    }

    /**
    * Obtains and show one video
    * @return Illuminate\Http\Response
    */
    public function show($video)
    {
       $video = Video::findOrFail($video);

       return $this->successResponse($video);
    }

    /**
    * Update existing video script
    * @return Illuminate\Http\Response
    */
    public function update(Request $request, $video)
    {
        $rules = [
           'name' => 'max:255',
           'category'=> 'max:255',
           'image' => '',
           'url' => 'url',
        ];

        $this->validate($request, $rules);

        $video = Video::findOrFail($video);

        $video->fill($request->all());

        if($video->isClean()){
            return $this->errorResponse('At least one value must change',
               Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $video->save();

        return $this->successResponse($video);
    }

    /**
    * Remove an existing video script
    * @return Illuminate\Http\Response
    */
    public function destroy($video)
    {
        $video = Video::findOrFail($video);

        $video->delete();

        return $this->successResponse($video);

    }
}
