<?php

namespace App\Repositories\Blog;

use App\Http\Resources\AppResource;
use App\Interfaces\Blog\BlogRepositoryInterface;
use App\Models\Auth\User;
use App\Models\Blog\Blog;
use App\Repositories\BaseEloquentRepository;
use Carbon\Carbon;
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

    public function getAllItems(): AnonymousResourceCollection|AppResource
    {

        if (isset(request()->page)){ // paginate if request has page query
            $items = Cache::remember('paginate_'.$this->model->getTable().'_'.request()->page,config('settings.cache_ttl'), function (){
                return $this->model::active()->latest()->paginate(config('settings.pagination.per_page'));
            });
        } else{
            $items = Cache::remember($this->model->getTable(),config('settings.cache_ttl'), function (){
                return $this->model::active()->latest()->take(20)->get();
            });
        }
        return new AppResource($items);
    }

    public function getItem(Blog $blog){
        return $blog->formatResponse();
    }
    public function saveBlog(Request $request){
        $blog = new Blog();
        $blog->user_id = Auth::id();
        $blog->title = $request->title;
        $blog->body = $request->body;
        $thumbnail = $this->saveThumbnail($request);
        $banner = $this->saveBanner($request);
        $blog->thumbnail = $thumbnail;
        $blog->banner = $banner;
        $blog->save();
        Cache::flush();
    }
    public function updateBlog(Request $request, Blog $blog){
        $blog->title = $request->title;
        $blog->body = $request->body;
        $thumbnail = $this->saveThumbnail($request);
        $banner = $this->saveBanner($request);
        if ($thumbnail){
            $blog->thumbnail = $thumbnail;
        }
        if ($banner){
            $blog->banner = $banner;
        }
        $blog->save();
        Cache::flush();
    }

    public function saveThumbnail(Request $request): ?string
    {
        $filename_path = null;
        if ($request->hasFile('thumbnail_file')) {
            $destinationPath = '/uploads/blogs/'.Carbon::now()->month.'/';
            $file = $request->file('thumbnail_file');
            $filename = time().'_'.Str::of($file->getClientOriginalName())->lower()->kebab();
            $file->move(public_path() . $destinationPath, $filename);
            $filename_path = $destinationPath . $filename;
        }
        return $filename_path;
    }

    public function saveBanner(Request $request): ?string
    {
        $filename_path = null;
        if ($request->hasFile('banner_file')) {
            $destinationPath = '/uploads/blogs/'.Carbon::now()->month.'/';
            $file = $request->file('banner_file');
            $filename = time().'_'.Str::of($file->getClientOriginalName())->lower()->kebab();
            $file->move(public_path() . $destinationPath, $filename);
            $filename_path = $destinationPath . $filename;
        }
        return $filename_path;
    }


}
