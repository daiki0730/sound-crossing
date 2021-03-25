<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\User\UserServiceInterface;

class AdminController extends Controller
{
    /**
    * @var UserServiceInterface
    */
    private $userService;

    /**
     * AdminController constructor.
     *
     * @param UserServiceInterface $userService
     */
    public function __construct(
        UserServiceInterface $userService
    ) {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->getAllUsers();

        return view('backend.admin.index')->with([
            'users' => $users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        try {
            $this->userService->create($request->all());
        } catch (\Exception $e) {
            Log::error($e->getMessage(), ['class' => __CLASS__, 'method' => __METHOD__]);
            Log::error($e, ['class' => __CLASS__, 'method' => __METHOD__]);
            return redirect()->route('backend.admin.index')
                ->with('error_msg', "作成に失敗しました");
        }

        return redirect()->route('backend.admin')->with('success_msg', "ユーザー作成に成功しました");
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
