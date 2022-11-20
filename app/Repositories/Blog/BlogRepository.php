<?php

namespace App\Repositories\Blog;

use App\Http\Resources\EloquentResource;
use App\Interfaces\Blog\BlogRepositoryInterface;
use App\Models\Auth\User;
use App\Models\Blog\Blog;
use App\Repositories\BaseEloquentRepository;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class BlogRepository extends BaseEloquentRepository implements BlogRepositoryInterface
{
    protected Blog $blog;

    /**
     * @param Blog $blog
     */
    public function __construct(Blog $blog)
    {
        parent::__construct($blog);
    }

    /**
     * @param Request $request
     * @return Model|null
     */
    public function store(Request $request): ?Model
    {
        $blog = new Blog();
        $blog->user_id = Auth::guard('api')->id();
        $blog->title = $request->title;
        $blog->body = $request->body;
//        $thumbnail = $this->saveThumbnail($request);
//        $banner = $this->saveBanner($request);
        $thumbnail = upload_file($request,'thumbnail_file','/blogs/');
        $banner = upload_file($request,'banner_file','/blogs/');
        $blog->thumbnail = $thumbnail;
        $blog->banner = $banner;
        $blog->save();
        return $blog;
    }

    /**
     * @param Request $request
     */
    public function update(Request $request, Model $model): ?Model
    {
        $model->title = $request->title;
        $model->body = $request->body;
//        $thumbnail = $this->saveThumbnail($request);
//        $banner = $this->saveBanner($request);
        $thumbnail = upload_file($request,'thumbnail_file','/blogs/');
        $banner = upload_file($request,'banner_file','/blogs/');
        if ($thumbnail){
            $model->thumbnail = $thumbnail;
        }
        if ($banner){
            $model->banner = $banner;
        }
        $model->save();
        return $model;
    }

//    public function saveThumbnail(Request $request): ?string
//    {
//        $filename_path = null;
//        if ($request->hasFile('thumbnail_file')) {
//            $destinationPath = '/uploads/blogs/'.Carbon::now()->month.'/';
//            $file = $request->file('thumbnail_file');
//            $filename = time().'_'.Str::of($file->getClientOriginalName())->lower()->kebab();
//            $file->move(public_path() . $destinationPath, $filename);
//            $filename_path = $destinationPath . $filename;
//        }
//        return $filename_path;
//    }
//
//    public function saveBanner(Request $request): ?string
//    {
//        $filename_path = null;
//        if ($request->hasFile('banner_file')) {
//            $destinationPath = '/uploads/blogs/'.Carbon::now()->month.'/';
//            $file = $request->file('banner_file');
//            $filename = time().'_'.Str::of($file->getClientOriginalName())->lower()->kebab();
//            $file->move(public_path() . $destinationPath, $filename);
//            $filename_path = $destinationPath . $filename;
//        }
//        return $filename_path;
//    }


}
