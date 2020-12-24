<?php

namespace App\Http\Controllers\adminPanel;

use App\HomeImage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allimage = HomeImage::all();
        return view('adminPanel.homeImage.index' , compact('allimage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminPanel.homeImage.create');
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
            'image_location' => ['required', 'min:3', 'max:255'],
            'image' => ['required'],
        ],[
            'image_location.required' => 'تعیین محل تصویر الزامی است',
            'image_location.min' => 'محل تصویر نمیتواند کمتر از سه کارکتر باشد',
            'image_location.max' => 'محل تصویر نمیتواند بیشتر از 255 کارکتر باشد',
            'image.required' => 'تصویر محل الزامی است',
        ]);
        if ($request->hasFile('image')) {
            $image = '';
            $destination = public_path() . '/home_images';
            if (!is_dir($destination)) {
                mkdir($destination, '0777', true);
            }
            $destination = $destination . '/';
            $file = $request->file('image');
            $filename = time() . $file->getClientOriginalName();
            $file->move($destination, $filename);
            $image = '/home_images' . '/' . $filename;

            HomeImage::create([
                'image_location' => $request->get('image_location'),
                'image_name' => $request->get('image_name'),
                'image' => $image,
            ]);
            return redirect(route('admin.homeImage.index'))->with('message', 'تصویر صفحه اصلی شما با موفقیت ثبت شد');
        } else
            return redirect(route('admin.homeImage.index'))->with('error', 'مشکلی در ثبت تصویر صفحه اصلی وجود دارد');
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
        $homeImage = HomeImage::findOrFail($id);
        return view('adminPanel.homeImage.edit', compact('homeImage'));
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
            'image' => ['required'],
        ],[
            'image.required' => 'تصویر محل الزامی است',
        ]);
        $homeImage = HomeImage::findOrFail($id);
        if ($request->hasFile('image')){
        $image = '';
        $destination = public_path() . '/home_images';
        if (!is_dir($destination)) {
            mkdir($destination, '0777', true);
        }
        $destination = $destination . '/';
        $file = $request->file('image');
        $filename = time() . $file->getClientOriginalName();
        $file->move($destination, $filename);
        $image = '/home_images' . '/' . $filename;
        }
        else{
            $image = $homeImage->image;
        }
        $homeImage->update([
            'image_location' => $homeImage->image_location,
            'image_name' => $request->get('image_name'),
            'image' => $image,
        ]);
        $homeImage->save();
        return redirect(route('admin.homeImage.index'))->with('message', 'تصویر ' . $homeImage->image_name . ' با موفقیت ویرایش شد');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $homeImage = HomeImage::findOrFail($id);
        if(!$homeImage){
            return redirect(route('admin.homeImage.index'))->with('error', 'تصویر مورد نظر یافت نشد ');
        }
        else{
            $homeImage->delete();
            return redirect(route('admin.homeImage.index'))->with('warning', 'تصویر ' . $homeImage->image_name . ' با موفقیت حذف شد');

        }
    }
}
