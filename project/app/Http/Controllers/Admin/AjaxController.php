<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public const FIELD_IS_ACTIVE = 'enabled';

    /**
     * @param int $id
     * @param Request $request
     * @return JsonResponse|RedirectResponse
     */
    public function booleanChange(int $id, Request $request): JsonResponse|RedirectResponse
    {
        if ($request->ajax()) {
            $field = $request->input('field') ?: self::FIELD_IS_ACTIVE;
            $model = $request->input('model');

            $item = $model::findOrFail($id);
            $item->$field = !$item->$field;
            $item->save();

            return response()->json([
                'success' => true,
                'massage' => $item->$field
            ]);
        }

        return redirect()->route('admin.dashboard');
    }
}
