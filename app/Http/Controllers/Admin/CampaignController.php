<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DataTables;
use App\Campaign;
use App\Category;
class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 
        if ($request->ajax()) {
            
            $data = Campaign::orderBy('id','desc')->get();
            return DataTables::of($data)
              ->addIndexColumn()
            
              ->addColumn('action', function ($row) {
      
                return view('admin.pages.components.crudPannelButtons')->with(['data' => $row, 'model' => 'category']);
              })
              ->escapeColumns([])
              ->rawColumns(['action'])
              ->make(true);
          }
          $breadcrumbs = [
            ['link' => "/admin", 'name' => "Dashboard"],
            ['link' => route('campaign.index'), 'name' => "Campaign"],
            ['name' => "Campaign list"]
          ];
          return view('admin.pages.campaign.index', compact('breadcrumbs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Categories = Category::where('active',1)->get();
        $breadcrumbs = [
            ['link' => "/admin", 'name' => "Dashboard"],
            ['link' => route('campaign.index'), 'name' => "Campaign"],
            ['name' => "Campaign list"]
        ];

        return view('admin.pages.campaign.create-form', compact('breadcrumbs','Categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if ($request->hasFile('logo')) {
            if ($request->file('logo')->isValid()) {
                $category = ($request->category_id)? $request->category_id:0;
                $validator = Validator::make($request->all(),[
                    'name' => 'required',
                    'slug' => 'required',
                    'logo' => 'mimes:jpeg,png|max:1014',
                    'price_start' => 'required|integer',
                    'price_end' => 'required|integer',
                    'start_date' => 'required',
                    'end_date' => 'required'
                ]);

                if($validator->fails()){
                    return redirect()->back()->withError($validator);
                }
                else{

                    $id =Campaign::insertGetId([
                        'name' => $request->name,
                        'slug' => $request->slug,
                        'product_price_start' => $request->price_start,
                        'product_price_end' => $request->price_end,
                        'starting_date' => $request->start_date,
                        'ending_date' => $request->end_date,
                        'active' => 1
                    ]);
                    $logo =  "campaign_".$id.".".$request->logo->extension();
                    $request->logo->move(public_path('uploads/campaign_image'), $logo);

                    return redirect()->back()->with('success','Campaign inserted successfully');
                }
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
