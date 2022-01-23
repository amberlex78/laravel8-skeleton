<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Http\Requests\Page\CreateRequest;
use App\Http\Requests\Page\UpdateRequest;
use App\Models\Page;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class PageController extends AdminController
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Factory|View|Application
    {
        $model = Page::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.page.index', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Factory|View|Application
    {
        return view('admin.page.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $model): Factory|View|Application
    {
        return view('admin.page.show', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request, Page $model): Redirector|RedirectResponse|Application
    {
        $model->create($request->all());

        return redirect(urlToAction('index'))->with('success', __('page.created'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $model): Factory|View|Application
    {
        return view('admin.page.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Page $model): Redirector|RedirectResponse|Application
    {
        $model->update($request->all());

        return redirect(urlToAction('index'))->with('success', __('page.updated'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $model): Redirector|Application|RedirectResponse
    {
        $model->delete();

        return redirect(urlToAction('index'))->with('success', __('page.deleted'));
    }
}
