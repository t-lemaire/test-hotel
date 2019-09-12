<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\DestroyUser;
use App\Http\Requests\Admin\User\IndexUser;
use App\Http\Requests\Admin\User\StoreUser;
use App\Http\Requests\Admin\User\UpdateUser;
use App\User;
use Spatie\Permission\Models\Role;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Config;

class UsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  IndexUser $request
     * @return Response|array
     */
    public function index(IndexUser $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(User::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name', 'email', 'email_verified_at'],

            // set columns to searchIn
            ['id', 'name', 'email']
        );

        if ($request->ajax()) {
            return ['data' => $data, 'activation' => Config::get('admin-auth.activation_enabled')];
        }

        return view('admin.user.index', ['data' => $data, 'activation' => Config::get('admin-auth.activation_enabled')]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     * @throws AuthorizationException
     */
    public function create()
    {
        $this->authorize('admin.user.create');

        return view('admin.user.create',[
            'activation' => Config::get('admin-auth.activation_enabled'),
            'roles' => Role::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreUser $request
     * @return Response|array
     */
    public function store(StoreUser $request)
    {
        // Sanitize input
        $sanitized = $request->getModifiedData();

        // Store the User
        $user = User::create($sanitized);

        // But we do have a roles, so we need to attach the roles to the user
        $user->roles()->sync(collect($request->input('roles', []))->map->id->toArray());

        if ($request->ajax()) {
            return ['redirect' => url('admin/users'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  User $user
     * @return void
     * @throws AuthorizationException
     */
    public function show(User $user)
    {
        $this->authorize('admin.user.show', $user);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  User $user
     * @return Response
     * @throws AuthorizationException
     */
    public function edit(User $user)
    {
        $this->authorize('admin.user.edit', $user);

        $user->load('roles');

        return view('admin.user.edit', [
            'user' => $user,
            'activation' => Config::get('admin-auth.activation_enabled'),
            'roles' => Role::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateUser $request
     * @param  User $user
     * @return Response|array
     */
    public function update(UpdateUser $request, User $user)
    {
        // Sanitize input
        $sanitized = $request->getModifiedData();

        // Update changed values User
        $user->update($sanitized);

        // But we do have a roles, so we need to attach the roles to the user
        if($request->input('roles')) {
            $user->roles()->sync(collect($request->input('roles', []))->map->id->toArray());
        }

        if ($request->ajax()) {
            return ['redirect' => url('admin/users'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  DestroyUser $request
     * @param  User $user
     * @return Response|bool
     * @throws Exception
     */
    public function destroy(DestroyUser $request, User $user)
    {
        $user->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    }
