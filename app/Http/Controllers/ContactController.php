<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContactRequest $request)
    {
        try {
            $req = $request->validated();
            
            $contact = new Contact();
            $contact->full_name = $req['full_name'];
            $contact->email = $req['email'];
            $contact->phone = $req['phone'];
            $contact->message = $req['message'];
            
            $contact->save();

            return redirect()->route('contact')->with('success', 'Submit contact successfully.');
        } catch (\Exception $e) {
            Log::error('Error submitting contact: ' . $e->getMessage());
            // Tangani kesalahan di sini
            // Misalnya, Anda dapat menyimpan pesan kesalahan ke dalam log atau mengirimkan respons error ke pengguna
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Contact::findOrFail($id);
        $product->delete();
        return redirect()->route('list_contact')->with('success', 'Contact deleted successfully.');
    }
}
