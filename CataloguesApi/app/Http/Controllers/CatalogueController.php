<?php

namespace App\Http\Controllers;

use App\Catalogue;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class CatalogueController extends Controller
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
    * Fetch views of the catalogue
    * @return Illuminate\Http\Response
    */
    public function views($catalogues)
    {
      $user_username = $catalogues;

      $catalogues = '1';

      $catalogues = Catalogue::findOrFail($catalogues);

      return view('catalogue', [
          'catalogue' => $catalogues,
          'user' => $user_username,
      ]);
    }

    /**
    * BACK END
    * Return the list of catalague
    * @return Illuminate\Http\Response
    */
    public function index()
    {
         $catalogue = Catalogue::all();

         return $this->successResponse($catalogue);
    }

    /**
    * Create a new name in catalague
    * @return Illuminate\Http\Response
    */
    public function store(Request $request)
    {
         $rules =[
           'name' => 'required|max:255',
           'thumbnail' =>'required',
         ];

         $this->validate($request, $rules);

         $catalogue = Catalogue::create($request->all());

         return $this->successResponse($catalogue,
         Response::HTTP_CREATED);
    }

    /**
    * Obtain and show a name of catalague
    * @return Illuminate\Http\Response
    */
    public function show($catalogues)
    {
        $catalogues = Catalogue::findOrFail($catalogues);

        return $this->successResponse($catalogues);
    }

    /**
    * Update a name in catalague
    * @return Illuminate\Http\Response
    */
    public function update(Request $request, $catalogue)
    {
        $rules =[
         'name' => 'max:255',
         'thumbnail' => '',
        ];

        $this->validate($request, $rules);

        $catalogue = Catalogue::findOrFail($catalogue);

        $catalogue->fill($request->all());

        if ($catalogue->isClean())
        {
           return $this->errorResponse('Name must be changed',
               Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $catalogue->save();

        return $this->successResponse($catalogue);
    }

    /**
    * Update the thumbnail
    * @return Illuminate\Http\Response
    */
    public function update_thumb(Request $request, $thumb, $catalogues)
    {
        $user_username = $catalogues;

        $catalogues = $thumb;

        $catalogues = Catalogue::findOrFail($catalogues);

        if ($catalogues->thumbnail == false){

              $catalogues->thumbnail = true;
        } else{

              $catalogues->thumbnail = false;
        }

        $catalogues->save();

         return view('catalogue', [
              'catalogue' => $catalogues,
              'user' => $user_username,
         ]);
    }

    /**
    * Delete a name in catalague
    * @return Illuminate\Http\Response
    */
    public function destroy($catalogue)
    {
       $catalogue = Catalogue::findOrFail($catalogue);

       $catalogue->delete();

       return $this->successResponse($catalogue);
    }
}
