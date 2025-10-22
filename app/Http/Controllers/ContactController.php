<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; 

class ContactController extends Controller
{
    public function index(Request $request){
        return view("contact");
    }

    public function store(Request $request){
        $request->validate([
            "name"   => "required",
            "email"  => ["required", "email"], 
            "contact"=> ["required", "string"], 
            "object" => "required",
            "message"=> "required",
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->contact = $request->contact;
        $contact->message = $request->message;
        $contact->object = $request->object;
        $contact->save();

        return redirect('liste_contact')->with('success', 'Message envoyé avec succès !');
    }

    public function liste_contact(Request $request){
        $contacts = Contact::all();
        return view('liste', compact('contacts'));
    }
    public function destroy($id){
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back()->with('success', 'Message supprimé avec succès !');
    }
    public function edit($id)
    {
            $contact = Contact::findOrFail($id);
            return view('edit', compact('contact'));
    }

      public function update(Request $request, $id)
    {
        $request->validate([
            "name"    => "required",
            "email"   => ["required", "email"],
            "contact" => ["required", "string"],
            "object"  => "required",
            "message" => "required",
        ]);

        $contact = Contact::findOrFail($id);
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->contact = $request->contact;
        $contact->object = $request->object;
        $contact->message = $request->message;
        $contact->save();

        return redirect('/liste_contact')->with('success', 'Message modifié avec succès !');
    }
}
