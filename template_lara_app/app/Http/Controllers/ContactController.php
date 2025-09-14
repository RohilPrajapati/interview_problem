<?php

namespace App\Http\Controllers;

use App\Http\Requests\MutliStoreContactRequest;
use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function store(StoreContactRequest $request)
    {
        $validated_data = $request->validated();

        $contact = Contact::create($validated_data);

        return response()->json([
            "message"=> "Create Contact successfully",
            "data" => $contact
        ],200);
    }
}