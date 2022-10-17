<?php

namespace App\Repositories\Auth;

use App\Http\Resources\Auth\UserCollection;
use App\Http\Resources\Auth\UserResource;
use App\Interfaces\Auth\UserRepositoryInterface;
use App\Models\Auth\User;
use App\Repositories\BaseEloquentRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class UserRepository extends BaseEloquentRepository implements UserRepositoryInterface
{

    /**
     * @param User $user
     */
    public function __construct(User $user)
    {
        parent::__construct($user);
    }

    public function getUsersByRole(){
        $items = $this->model::latest();
        $role = \request()->input('role');
        $status_id = \request()->input('status_id');
        if ($role) {
            $items = $items->whereHas('roles',function ($q) use ($role) {
                $q->where('slug',$role);
            });
        }
        if ($status_id && $status_id != 'null') {
            $items = $items->where('status_id',$status_id);
        }
        if (isset(request()->page)){ // paginate if request has page query
            $items = $items->paginate(config('settings.pagination.per_page'));
        } else{
            $items = $items->take(20)->get();
        }
        return $items;
    }

    public function updateProfile(Request $request, $user): User
    {
        $this->update($request,$user);
        if ($request->hasFile('avatar_file')) {
            $destinationPath = '/uploads/user/';
            $file = $request->file('avatar_file');
            $filename = time().'_'.Str::of($file->getClientOriginalName())->lower()->kebab();
            $file->move(public_path() . $destinationPath, $filename);
            $filename_path = $destinationPath . $filename;
            $user->avatar = $filename_path;
        }
        Cache::flush();
        $user->save();
        return $user;
    }

    /**
     * @param $user
     * @param array $roles
     * @param array $permissions
     * @return void
     */
    public function saveAcl($user, array $roles, array $permissions): void
    {
        $user->roles()->sync($roles);
        $user->permissions()->sync($roles);
    }

    public function updateStatus(User $user,$status): mixed
    {
        $statuses = [1,2,3,4,5,6];
        if (!in_array($status,$statuses)){
            return false;
        }
        $user->status_id = $status;
        $user->save();
        return $user;

    }
}
