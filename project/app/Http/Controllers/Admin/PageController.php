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

/**
 * Class PageController
 *
 * @package App\Http\Controllers\Admin\Content
 */
class PageController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $model = Page::orderBy('position')->paginate(10);

        return view('admin.page.index', compact('model'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('admin.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateRequest  $request
     * @param  Page  $model
     *
     * @return Application|RedirectResponse|Redirector
     */
    public function store(CreateRequest $request, Page $model)
    {
        $model->create($request->all());

        return redirect(urlToAction('index'))->with('success', __('app.created'));;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Page  $model
     *
     * @return Application|Factory|View
     */
    public function edit(Page $model)
    {
        return view('admin.page.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateRequest  $request
     * @param  Page  $model
     *
     * @return Application|RedirectResponse|Redirector
     */
    public function update(UpdateRequest $request, Page $model)
    {
        $model->update($request->all());

        return redirect(urlToAction('index'))->with('success', __('app.edited'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Page  $model
     * @return Redirector|RedirectResponse|Application
     */
    public function destroy(Page $model)
    {
        $model->delete();

        return redirect(urlToAction('index'))->with('success', __('app.deleted'));
    }
}
