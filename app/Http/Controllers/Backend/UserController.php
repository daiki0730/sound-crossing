<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\User\UserServiceInterface;
use Illuminate\Support\Facades\Log;
use App\Http\Requests\Backend\UserRequest;


class UserController extends Controller
{
    /**
     * @var UserServiceInterface
     */
    private $userService;

    /**
     * UserController constructor.
     * @param UserServiceInterface $userService
     */
    public function __construct(
        UserServiceInterface $userService
    ) {
        $this->userService = $userService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = $this->userService->getAllUsers();
        return view('backend.admin.user.index')->with([
            'users' => $users,
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('backend.admin.user.create');
    }

    /**
     * @param UserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request)
    {
        try {
            $this->userService->create($request->validated());
        } catch (\Exception $e) {
            Log::error($e->getMessage(), ['class' => __CLASS__, 'method' => __METHOD__]);
            Log::error($e, ['class' => __CLASS__, 'method' => __METHOD__]);
            return redirect()->route('backend.admin.users.index')
                ->with('error_msg', "作成に失敗しました");
        }

        return redirect()->route('backend.admin.users.index')->with('success_msg', "ユーザー作成に成功しました");
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $users = $this->userService->getUserById($id);
        return view('backend.admin.user.show');
    }

    /**
     * @param $id
     */
    public function edit($id)
    {
        //
    }

    /**
     * @param Request $request
     * @param $id
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * @param $id
     */
    public function destroy($id)
    {
        //
    }
}
