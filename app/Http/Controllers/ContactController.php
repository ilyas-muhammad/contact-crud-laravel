<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Contact;
use App\Group;

class ContactController extends Controller
{
    
    public function index() {
        $contacts = Contact::paginate(5);
        
        return view('index', ['contacts' => $contacts]);
    }

    public function create() {
        $group = Group::all();
        return view('create-contact', ['group' => $group]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'address' => 'required', 
            'city' => 'required',
            'zip' => 'required',
            'country' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'note' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $image = $request->file('file');
        $imageName = time()."_".$image->getClientOriginalName();

        $image->move(public_path().'/upload', $imageName);

        Contact::create([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'address' => $request->address, 
            'city' => $request->city,
            'zip' => $request->zip,
            'country' => $request->country,
            'email' => $request->email,
            'phone' => $request->phone,
            'note' => $request->note,
            'avatar_url' => $imageName,
        ]);

        return redirect('/');
    }

    public function update($id) {
        $contact = Contact::find($id);
        $group = Group::all();

        return view('update-contact', ['contact' => $contact, 'group' => $group]);
    }


    public function put($id, Request $request) {
        $avatar = '';
        if ($request->avatarUrl) {
            $avatar = 'required|image|mimes:jpeg,png,jpg|max:2048';
        }

        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'groupId' => 'required',
            'address' => 'required', 
            'city' => 'required',
            'zip' => 'required',
            'country' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'note' => 'required',
            'avatarUrl' => $avatar
        ]);

        $contact = Contact::find($id);

        if ($request->avatarUrl) {
            // delete post image
            $dir = public_path().'/upload';
            File::delete('upload/' . $contact->avatar_url);

            $image = $request->file('avatarUrl');
            $imageName = time()."_".$image->getClientOriginalName();

            $image->move($dir, $imageName);
        } else {
            $imageName = $contact->avatar_url;
        }
        

        $contact->first_name = $request->firstName;
        $contact->last_name = $request->lastName;
        $contact->group_id = $request->groupId;
        $contact->address = $request->address;
        $contact->city = $request->city;
        $contact->country = $request->country;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->note = $request->note;
        $contact->avatar_url = $imageName;
        $contact->updated_at = time();
        $contact->save();

        return redirect('/');
    }

    public function delete($id) {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/');
    }

    public function detail($id) {
        $contact = Contact::find($id);

        return view('detail-contact', ['contact' => $contact]);
    }
}
