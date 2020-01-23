<?php

namespace App\Http\Controllers;

use App\Billing;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use Illuminate\Support\Facades\Config;

class BillingController extends Controller
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
    * Fetch views of the billing
    * @return Illuminate\Http\Response
    */
    public function views()
    {
        return view('billing');
    }

    public function views_exist(Request $request, $billings)
    {
       $session = $request->session();
       $session->put('user_id', $billings);

       $billings = Billing::findOrFail($billings);

       return view('billing_exist', [
           'billing' => $billings,
       ]);
    }

    /**
    * BACK END
    * Return the list of billings
    * @return Illuminate\Http\Response
    */
    public function index()
    {
        $billing = Billing::all();

        $username = Config::get('constants.USERNAME');

        return $this->successResponse($billing);
    }

    /**
    * Create one new billing
    * @return Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $rules = [
            'card_type' => 'required|max:11',
            'name' => 'required|max:255',
            'number_16' => 'required|max:16|min:16',
            'number_3' => 'required|max:3|min:3',
        ];

        $this->validate($request, $rules);

        $billing = Billing::create($request->all());

        return $this->successResponse($billing, Response::HTTP_CREATED);
    }

    /**
    * Update with POST one new billing
    * @return Illuminate\Http\Response
    */
    public function storeupdate(Request $request, $billings)
    {
        //$session = $request->session();
        //$billings = $session->get('user_id');

        $rules = [
            'card_type' => 'required|max:11',
            'name' => 'required|max:255',
            'number_16' => 'required|max:16|min:16',
            'number_3' => 'required|max:3|min:3',
        ];

        $this->validate($request, $rules);

        $billings = Billing::findOrFail($billings);

        $billings->fill($request->all());

        if ($billings->isClean())
        {
          return $this->errorResponse('At least one value must change',
                        Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $billings->save();

        return $this->successResponse($billings);
    }

    /**
    * Obtains and show one billing
    * @return Illuminate\Http\Response
    */
    public function show($billing)
    {
        $billing = Billing::findOrFail($billing);

        $username = Config::get('constants.USERNAME');

        return $this->successResponse($billing);
    }

    /**
    * Update an existing billing
    * @return Illuminate\Http\Response
    */
    public function update(Request $request, $billing)
    {
        $rules = [
           'card_type' => 'max:11',
           'name' => 'max:255',
           'number_16' => 'max:16|min:16',
           'number_3' => 'max:3|min:3',
        ];

        $this->validate($request, $rules);

        $billing = Billing::find($billing);
      //  dd($request->all());

        $billing->fill($request->all());

        if ($billing->isClean())
        {
          return $this->errorResponse('At least one value must change',
                        Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $billing->save();

        return $this->successResponse($billing);
    }

    /**
    * Remove an existing billing
    * @return Illuminate\Http\Response
    */
    public function destroy($billing)
    {
        $billing = Billing::findOrFail($billing);

        $billing->delete();

        return $this->successResponse($billing);
    }
}
