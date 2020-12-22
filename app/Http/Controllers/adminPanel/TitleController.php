<?php

namespace App\Http\Controllers\adminPanel;

use App\Http\Controllers\Controller;
use App\Title;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allTitle = Title::all();
        return view('adminPanel.titles.index' , compact('allTitle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPanel.titles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'titleLocation' => ['required', 'min:3', 'max:255'],
            'firstTitle' => ['required', 'min:3', 'max:255'],
            'secondTitle' => ['required', 'min:3', 'max:255'],
        ],
            [
                'titleLocation.required' => 'محل تیتر در سایت الزامی است',
                'titleLocation.min' => 'محل تیتر در سایت نمیتواند کمتر از سه کارکتر باشد',
                'titleLocation.max' => 'محل تیتر در سایت نمیتواند بیشتر از 255 کارکتر باشد',
                'firstTitle.required' => 'تیتر اول الزامی است',
                'firstTitle.min' => 'تیتر اول نمیتواند کمتر از سه کارکتر باشد',
                'firstTitle.max' => 'تیتر اول نمیتواند بیشتر از 255 کارکتر باشد',
                'secondTitle.required' => 'تیتر دوم الزامی است',
                'secondTitle.min' => 'تیتر دوم نمیتواند کمتر از سه کارکتر باشد',
                'secondTitle.max' => 'تیتر دوم نمیتواند بیشتر از 255 کارکتر باشد',
            ]);

        Title::create([
            'titleLocation' => $request->get('titleLocation'),
            'firstTitle' => $request->get('firstTitle'),
            'secondTitle' => $request->get('secondTitle'),
            'description' => $request->get('description'),
        ]);
        return redirect(route('admin.title.index'))->with('message', 'تیتر شما با موفقیت ثبت شد');
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
        $title = Title::findorfail($id);
        return view('adminpanel.titles.edit' , compact('title'));
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
        $this->validate($request, [
//            'titleLocation' => ['required', 'min:3', 'max:255'],
            'firstTitle' => ['required', 'min:3', 'max:255'],
            'secondTitle' => ['required', 'min:3', 'max:255'],
        ],
            [
//                'titleLocation.required' => 'محل تیتر در سایت الزامی است',
//                'titleLocation.min' => 'محل تیتر در سایت نمیتواند کمتر از سه کارکتر باشد',
//                'titleLocation.max' => 'محل تیتر در سایت نمیتواند بیشتر از 255 کارکتر باشد',
                'firstTitle.required' => 'تیتر اول الزامی است',
                'firstTitle.min' => 'تیتر اول نمیتواند کمتر از سه کارکتر باشد',
                'firstTitle.max' => 'تیتر اول نمیتواند بیشتر از 255 کارکتر باشد',
                'secondTitle.required' => 'تیتر دوم الزامی است',
                'secondTitle.min' => 'تیتر دوم نمیتواند کمتر از سه کارکتر باشد',
                'secondTitle.max' => 'تیتر دوم نمیتواند بیشتر از 255 کارکتر باشد',
            ]);
        $title = Title::findorfail($id);
        $title->update([
            'titleLocation' =>$title->titleLocation,
            'firstTitle' => $request->get('firstTitle'),
            'secondTitle' => $request->get('secondTitle'),
            'description' => $request->get('description'),
        ]);
        $title->save();
        return redirect(route('admin.title.index'))->with('message', 'تیتر ' . $title->titleLocation . ' با موفقیت ویرایش شد');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $title = Title::findOrFail($id);

        if (!$title) {
            return redirect(route('admin.title.index'))->with('error', 'تیتر مورد نظر موجود نمی باشد');
        } else {
            $title->delete();
            return redirect(route('admin.title.index'))->with('warning', 'تیتر ' . $title->titleLocation . ' با موفقیت حذف شد');
        }
    }
    public function uploadImage()
    {
        $this->validate(request(), [
            'upload' => 'required'
        ]);
        $image = '';

        $imagePath = "/upload/images/2020/";
        $file = request()->file('upload');
        $filename = $file->getClientOriginalName();
        if (file_exists(public_path($imagePath) . $filename)) {
            $filename = Carbon::now()->timestamp . $filename;
        }
        $file->move(public_path($imagePath), $filename);
        $url = $imagePath . $filename;
        $function_number = $_GET['CKEditorFuncNum'];
        $message = '';
        return "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction( '$function_number' , '$url' , '$message' );</script>";

    }
}
