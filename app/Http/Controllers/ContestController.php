<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContestRequest;
use App\Models\ContestsApplications;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ContestController extends Controller
{
    /**
     * Show main page
     *
     * @return View
     */
    public function show()
    {
        return view('index');
    }

    /**
     * Store a new contest entru
     *
     * @param ContestRequest $request
     * @return array
     */
    public function submit(ContestRequest $request): array
    {
        $validated = $request->validated();

        $contestApplication = new ContestsApplications();
        $contestApplication->name = $validated['name'];
        $contestApplication->email = $validated['email'];
        $contestApplication->save();

        return [
            __('Jūsu pieteikums ir nosūtīts. Mēs drīzumā sazināsimies ar Jums!')
        ];
    }
}
