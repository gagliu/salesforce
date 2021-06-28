<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Lead;
use App\Models\Contact;

class ContactList extends Component
{
    public function render()
    {
        //Get contacts from SalesForce paginated by 15 and ordered by name
        $contacts = Contact::select(['Id', 'FirstName', 'LastName', 'Department', 'Email'])->orderBy('Name')->paginate(15);

        return view('livewire.contact-list', compact('contacts'));
    }
}
