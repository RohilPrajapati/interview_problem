<?php

namespace App\Http\Controllers;

use App\Http\Requests\MutliStoreContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class MultipleContactController extends Controller
{
    function store(MutliStoreContactRequest $request)
    {
        $data = $request->validated();


        foreach ($data['list_contacts'] as $item) {
            $contact = new Contact($item);
            $contact->created_at = now();
            $contact->updated_at = now();
            $contact->save();
        }


        return response()->json([
            "message"=> "Create Contact successfully"
        ],201);
    }
}
