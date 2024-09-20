@extends('layouts.main')
@section('content')
    <div class="bg-gray-900" style="min-height: calc(100vh - 68px);">
        <!-- Tab Menu -->
        <div class="bg-slate-950 shadow-sm py-2">
            <div class="container mx-auto px-4">
                <div class="flex">
                    <a class="px-6 py-4 text-indigo-600 border-b-2 border-indigo-600 font-medium"
                        href="{{ route('notes') }}">Notes</a>
                    <a class="px-6 py-4 text-gray-500 hover:text-indigo-600 transition duration-300"
                        href="{{ route('todos') }}">Todolist</a>
                    <a class="px-6 py-4 text-gray-500 hover:text-indigo-600 transition duration-300"
                        href="{{ route('schedules') }}">Schedules</a>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <main class="container mx-auto px-4 py-8 ">
            <div class="flex justify-between items-center mb-8">
                <button
                    class="btn btn-primary bg-indigo-600 hover:bg-indigo-700 border-none shadow-lg transition duration-300 transform hover:scale-105"
                    onclick="my_modal_1.showModal()">
                    Add Notes
                </button>

                <div class="form-control">
                    <input type="text" placeholder="Search notes..." id="search"
                        class="input input-bordered w-full max-w-xs focus:ring-2 focus:ring-indigo-600 transition duration-300" />
                </div>
            </div>

            <!-- Notes Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8" id="notes">
                @php
                    $colors = ['bg-pink-100', 'bg-yellow-100', 'bg-green-100', 'bg-blue-100', 'bg-purple-100'];
                @endphp
                @if ($notes->count() == 0)
                    <div class=" card bg-pink-100 shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                        <div class="card-body">
                            <h2 class="card-title text-gray-800">No notes found, create one?</h2>
                            <p class="text-gray-600">
                                Click the button below to create a new note
                            </p>
                            <div class="card-actions justify-end mt-4">
                                <button class="btn btn-sm btn-ghost text-indigo-600 hover:bg-indigo-100"
                                    onclick="my_modal_1.showModal()">Create Note</button>
                            </div>
                        </div>
                    </div>
                @else
                    @foreach ($notes as $note)
                        <div
                            class="card {{ $colors[array_rand($colors)] }} shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1 note">
                            <div class="card-body">
                                <h2 class="card-title text-gray-800">{{ $note['title'] }}</h2>
                                <p class="text-gray-600">
                                    {{ $note['content'] }}
                                </p>
                                <div class="card-actions justify-end mt-4">
                                    <button class="btn btn-sm btn-ghost text-indigo-600 hover:bg-indigo-100" id="update_btn"
                                        data-id="{{ $note['id'] }}" data-title="{{ $note['title'] }}"
                                        data-content="{{ $note['content'] }}" onclick="showupdate(this)">Edit</button>
                                    <form action="{{ route('notes.destroy', $note['id']) }}" method="post" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-ghost text-red-600 hover:bg-red-100">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </main>
    </div>

    <!-- Open the modal using ID.showModal() method -->
    <dialog id="my_modal_1" class="modal">
        <div class="modal-box">
            <h3 class="font-bold text-lg">Add New Note</h3>
            <p class="py-4">Please fill in the form below to add a new note.</p>
            <form action="{{ route('notes.store') }}" method="post">
                @csrf

                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Title</span>
                    </label>
                    <input type="text" placeholder="Title" name="title"
                        class="input input-bordered w-full focus:ring-2 focus:ring-indigo-600 transition duration-300" />
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Content</span>
                    </label>
                    <textarea placeholder="Content" name="content"
                        class="textarea textarea-bordered w-full focus:ring-2 focus:ring-indigo-600 transition duration-300"></textarea>
                </div>

                <div class="modal-action">
                    <button type="submit"
                        class="btn btn-primary bg-indigo-600 hover:bg-indigo-700 border-none shadow-lg transition duration-300 transform hover:scale-105 px-4">Save</button>
                    <button class="btn btn-ghost" type="button" onclick="my_modal_1.close()">Cancel</button>
                </div>
            </form>
        </div>
    </dialog>

    <!-- Open the modal using ID.showModal() method -->
    <dialog id="my_modal_2" class="modal">
        <div class="modal-box">
            <h3 class="font-bold text-lg">Update Note</h3>
            <p class="py-4">Please fill in the form below to update a note.</p>
            <form action="{{ route('notes.update') }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Title</span>
                    </label>
                    <input type="text" placeholder="Title" name="title" id="title"
                        class="input input-bordered w-full focus:ring-2 focus:ring-indigo-600 transition duration-300" />
                </div>
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Content</span>
                    </label>
                    <textarea placeholder="Content" name="content" id="content"
                        class="textarea textarea-bordered w-full focus:ring-2 focus:ring-indigo-600 transition duration-300"></textarea>
                </div>

                <input type="hidden" name="id" id="id">

                <div class="modal-action">
                    <button type="submit"
                        class="btn btn-primary bg-indigo-600 hover:bg-indigo-700 border-none shadow-lg transition duration-300 transform hover:scale-105 px-4">Save</button>
                    <button class="btn btn-ghost" type="button" onclick="my_modal_2.close()">Cancel</button>
                </div>

            </form>
        </div>
    </dialog>

    <script>
        function showupdate(button) {
            my_modal_2.showModal();

            const title = document.getElementById('title');
            const content = document.getElementById('content');
            const id = document.getElementById('id');

            title.value = button.getAttribute('data-title');
            content.value = button.getAttribute('data-content');
            id.value = button.getAttribute('data-id');

        }

        // Search with jquery
        $(document).ready(function() {
            $("#search").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#notes .note").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection
