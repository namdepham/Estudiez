<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ResourceRequest;
use App\Models\Resource;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;

class ResourceController extends Controller
{
    /**
     * List resource.
     *
     * @return Renderable
     */
    public function index() : Renderable
    {
        $data = Resource::query()->orderBy('id','desc')->paginate(5);

        return view('admin.resource.list')->with(compact('data'));
    }
    /**
     * Create resource.
     *
     * @return void
     */
    public function create(): Renderable
    {
        return view('admin.resource.create');
    }

    /**
     * Store a resource.
     *
     * @param ResourceRequest $request
     * @return RedirectResponse
     */
    public function store(ResourceRequest $request): RedirectResponse
    {
        $resource = new Resource();
        $resource->type = $request->get('type');
        $resource->content = $request->get('content');
        $resource->save();

        return redirect()->route('resource.index');
    }

    /**
     * Show detail resource.
     *
     * @param int $id
     * @return Renderable
     */
    public function show(int $id)
    {
        $data = Resource::findOrFail($id);

        return view('admin.resource.edit')->with(compact('data'));
    }

    /**
     * @param ResourceRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(ResourceRequest $request, int $id): RedirectResponse
    {
        $data = Resource::findOrFail($id);
        $data->type = $request->input('type');
        $data->content = $request->input('content');
        $data->save();

        return redirect()->route('resource.index');
    }

    /**
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $data = Resource::findOrFail($id);
        $data->delete();

        return redirect()->route('resource.index');
    }

}
