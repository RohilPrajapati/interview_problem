<?php

namespace App\Http\Controllers;

use App\Http\Requests\MutliStoreContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class MultipleContactController extends Controller
{
    public function store(MutliStoreContactRequest $request)
    {
        $data = $request->validated();

        $now = now();
        $contacts = collect($data['list_contacts'])->map(function ($item) use ($now) {
            return array_merge($item, [
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        })->toArray();

        Contact::insert($contacts);

        return response()->json([
            "message" => "Contacts created successfully",
        ], 201);
    }
}
