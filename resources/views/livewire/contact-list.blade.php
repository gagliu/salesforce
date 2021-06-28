<div class="grid gid-cols-3 gap-8 mt-5 mb-1 ml-1 px-5">
    <table class="border-separate border border-green-800 table-auto">
        <thead class="thead-dark">
            <tr>
                <th class="border border-green-600">Fist Name</th>
                <th class="border border-green-600">Last Name</th>
                <th class="border border-green-600">Company</th>
                <th class="border border-green-600">Email</th>
                <th class="border border-green-600">Details</th>
            </tr>
        </thead>
        <tbody>
            @if($contacts)
                @foreach($contacts as $contact)
                <tr>
                    <td class="border border-green-600">{{ $contact->FirstName }}</td>
                    <td class="border border-green-600">{{ $contact->LastName }}</td>
                    <td class="border border-green-600">{{ $contact->Department }}</td>
                    <td class="border border-green-600">{{ $contact->Email }}</td>
                    <td class="border border-green-600 text-center">
                        <a href="{{ route('contact', $contact->Id) }}">View Details</a>
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    @if($contacts)
    {{ $contacts->links() }}
    @endif
    
</div>