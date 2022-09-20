<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Http\Resources\EloquentResource;
use App\Interfaces\Blog\BlogRepositoryInterface;
use App\Models\Blog\Blog;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BlogController extends ApiController
{
    protected BlogRepositoryInterface $blogRepository;

    /**
     * @param BlogRepositoryInterface $blogRepository
     */
    public function __construct(BlogRepositoryInterface $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return $this->success('Blog list',[
            'blogs'=> new EloquentResource($this->blogRepository->getActiveItems())
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return JsonResponse
     */
    public function store(BlogRequest $request)
    {
        $this->blogRepository->store($request);
        return $this->success('Blog saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param Blog $blog
     * @return JsonResponse
     */
    public function show(Blog $blog)
    {
        return $this->success('Blog info',[
            'blog'=> $blog->formatResponse(true)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Blog $blog
     * @return JsonResponse
     */
    public function update(Request $request, Blog $blog): JsonResponse
    {
        $this->blogRepository->update($request,$blog);
        return $this->success('Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Blog $blog
     * @return JsonResponse
     */
    public function destroy(Blog $blog): JsonResponse
    {
        $this->blogRepository->delete($blog);
        return $this->success('Blog deleted');
    }
}
