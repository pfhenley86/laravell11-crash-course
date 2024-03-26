<x-layout>
   <div class="note-container">
        <a href="{{ route('note.create') }}" class="new-note-btn">
            New Note
        </a>
        <div class="notes">
            @foreach ( $notes as $note )
            <div class="note">
                <div class="note-body">
                    {{ $note->note }}
                </div>
                <div class="note-buttons">
                    <a href="{{ route('note.show') }}" class="note-edit-button">View</a>
                    <a href="{{ route('note.edit') }}" class="note-edit-button">Edit</a>
                    <button class="note-delete-button">Delete</button>
                </div>
            </div>  
            @endforeach 
        </div>
   </div>
</x-layout>
