@extends('layouts.main')
@section('content')
    <div class="bg-gray-900" style="min-height: calc(100vh - 68px);">
        <!-- Tab Menu -->
        <div class="bg-slate-950 shadow-sm py-2">
            <div class="container mx-auto px-4">
                <div class="flex justify-center">
                    <a class="px-6 py-4 text-gray-500 hover:text-indigo-600 font-medium" href="{{ route('notes') }}">Notes</a>
                    <a class="px-6 py-4 text-gray-500 hover:text-indigo-600 transition duration-300"
                        href="{{ route('todos') }}">Todolist</a>
                    <a class="px-6 py-4 text-indigo-600 border-b-2 border-indigo-600 font-medium transition duration-300"
                        href="{{ route('schedules') }}">Schedules</a>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <main class="container lg:w-3/4 mx-auto px-4 py-8">
            <div class="bg-gray-900 shadow-lg rounded-lg overflow-hidden">
                <!-- Header -->
                <div class="bg-gray-800 border-b border-gray-700 px-6 py-4">
                    <div class="flex flex-wrap items-center justify-between">
                        <h1 class="text-2xl font-semibold text-white">Schedules</h1>
                        <div class="flex items-center space-x-4">
                            <div class="relative">
                                <input type="text" placeholder="Search schedules..." id="search"
                                    class="input input-bordered w-full max-w-xs pl-10 pr-4 py-2 bg-gray-800 text-gray-300 border-gray-600 rounded-full focus:ring-2 focus:ring-blue-500 transition duration-300" />
                                <div class="absolute left-3 top-1/2 transform -translate-y-1/2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </div>
                            </div>
                            <button
                                class="btn btn-primary bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-full shadow-lg transition duration-300 transform hover:scale-105 flex items-center"
                                onclick="document.getElementById('add_schedule_modal').showModal()">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4v16m8-8H4" />
                                </svg>
                                Add Schedule
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Filters and View Options -->
                <div class="bg-gray-900 px-6 py-4 border-b border-gray-700">
                    <div class="flex flex-wrap items-center justify-between">
                        <div class="flex items-center space-x-4">
                            <select class="select select-bordered rounded-full bg-gray-800 text-gray-300 border-gray-600">
                                <option disabled selected>Filter by type</option>
                                <option>All</option>
                                <option>Meeting</option>
                                <option>Deadline</option>
                                <option>Event</option>
                            </select>
                            <select class="select select-bordered rounded-full bg-gray-800 text-gray-300 border-gray-600">
                                <option disabled selected>Filter by status</option>
                                <option>All</option>
                                <option>Pending</option>
                                <option>Confirmed</option>
                            </select>
                        </div>
                        <div class="flex items-center space-x-4">
                            <button class="btn btn-ghost btn-sm text-gray-300 hover:text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                </svg>
                                List
                            </button>
                            <button class="btn btn-ghost btn-sm text-gray-300 hover:text-blue-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                </svg>
                                Grid
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Schedules List -->
                <div class="divide-y divide-gray-700" id="schedules">
                    @foreach ($schedules as $schedule)
                        <div
                            class="flex items-center justify-between py-4 px-6 hover:bg-gray-800 transition duration-150 ease-in-out">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0">
                                    <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-700">
                                        <svg class="h-full w-full text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-white truncate">
                                        {{ $schedule['title'] }}
                                    </p>
                                    <p class="text-sm text-gray-400 truncate">
                                        {{ $schedule['type'] }}
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="flex flex-col items-end">
                                    <p class="text-sm text-white">
                                        @if ($schedule['is_all_day'])
                                            {{ date('M d, Y', strtotime($schedule['start_time'])) }} (All day)
                                        @else
                                            {{ date('M d, Y H:i A', strtotime($schedule['start_time'])) }}
                                        @endif
                                    </p>
                                    @if (!$schedule['is_all_day'] && $schedule['end_time'])
                                        <p class="text-sm text-gray-400">
                                            to {{ date('M d, Y H:i A', strtotime($schedule['end_time'])) }}
                                        </p>
                                    @endif
                                </div>
                                <span
                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $schedule['status'] == 'pending' ? 'bg-yellow-600 text-yellow-100' : 'bg-green-600 text-green-100' }}">
                                    {{ ucfirst($schedule['status']) }}
                                </span>
                                <div class="flex items-center space-x-2">
                                    <button class="text-gray-400 hover:text-blue-500"
                                        onclick="showEditModal({{ $schedule->id }}, '{{ $schedule->title }}', '{{ $schedule->description }}', '{{ $schedule->start_time }}', '{{ $schedule->end_time !== null ? $schedule->end_time : '' }}',{{ $schedule->is_all_day }}, '{{ $schedule->status }}')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </button>
                                    <form action="{{ route('schedules.destroy', $schedule->id) }}" method="post"
                                        class="inline mt-1">
                                        @csrf
                                        @method('DELETE')
                                        <button class="text-gray-400 hover:text-red-500" type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </main>

    </div>

    <!-- Add Schedule Modal -->
    <dialog id="add_schedule_modal" class="modal">
        <div class="modal-box relative bg-gray-800 text-gray-200">
            <button class="btn btn-sm btn-circle absolute right-2 top-2 text-gray-400 hover:text-white hover:bg-gray-700"
                onclick="add_schedule_modal.close()">✕</button>
            <h3 class="text-lg font-semibold mb-4">Add New Schedule</h3>

            <form id="schedule_form" action="{{ route('schedules.store') }}" method="POST">
                @csrf
                <!-- Title -->
                <div class="form-control mb-4">
                    <label class="label" for="title">
                        <span class="label-text text-gray-300">Title</span>
                    </label>
                    <input type="text" id="title" name="title"
                        class="input input-bordered w-full bg-gray-700 text-white border-gray-600 placeholder-gray-500 focus:ring-2 focus:ring-indigo-600"
                        placeholder="Enter schedule title" required />
                </div>

                <!-- Type -->
                <div class="form-control mb-4">
                    <label class="label" for="type">
                        <span class="label-text text-gray-300">Type</span>
                    </label>
                    <select id="type" name="type"
                        class="select select-bordered w-full bg-gray-700 text-white border-gray-600 focus:ring-2 focus:ring-indigo-600"
                        required>
                        <option value="meeting">Meeting</option>
                        <option value="event">Event</option>
                        <option value="deadline">Deadline</option>
                    </select>
                </div>

                <!-- Description -->
                <div class="form-control mb-4">
                    <label class="label" for="description">
                        <span class="label-text text-gray-300">Description</span>
                    </label>
                    <textarea id="description" name="description" rows="3"
                        class="textarea textarea-bordered w-full bg-gray-700 text-white border-gray-600 placeholder-gray-500 focus:ring-2 focus:ring-indigo-600"
                        placeholder="Enter schedule description (optional)"></textarea>
                </div>

                <!-- Start Time (Updated for All-Day event) -->
                <div class="form-control mb-4">
                    <label class="label" for="start_time">
                        <span class="label-text text-gray-300">Start Time</span>
                    </label>
                    <input type="datetime-local" id="start_time" name="start_time"
                        class="input input-bordered w-full bg-gray-700 text-white border-gray-600 focus:ring-2 focus:ring-indigo-600"
                        required />
                </div>

                <!-- End Time (optional, hidden if All-Day) -->
                <div class="form-control mb-4" id="end_time_container" style="display: none;">
                    <label class="label" for="end_time">
                        <span class="label-text text-gray-300">End Time</span>
                    </label>
                    <input type="datetime-local" id="end_time" name="end_time"
                        class="input input-bordered w-full bg-gray-700 text-white border-gray-600 focus:ring-2 focus:ring-indigo-600" />
                </div>

                <!-- All Day Checkbox -->
                <div class="form-control mb-4">
                    <label class="label cursor-pointer">
                        <span class="label-text text-gray-300">All Day Event</span>
                        <input type="checkbox" id="is_all_day" name="is_all_day" class="checkbox checkbox-primary"
                            onchange="toggleEndTime()" />
                    </label>
                </div>

                <!-- Status -->
                <div class="form-control mb-4">
                    <label class="label" for="status">
                        <span class="label-text text-gray-300">Status</span>
                    </label>
                    <select id="status" name="status"
                        class="select select-bordered w-full bg-gray-700 text-white border-gray-600 focus:ring-2 focus:ring-indigo-600">
                        <option value="pending">Pending</option>
                        <option value="confirmed">Confirmed</option>
                    </select>
                </div>

                <!-- Buttons -->
                <div class="modal-action">
                    <button type="submit"
                        class="btn bg-indigo-600 hover:bg-indigo-700 text-white font-semibold shadow-lg transition duration-300">
                        Save Schedule
                    </button>
                    <button type="button" class="btn btn-ghost text-gray-400 hover:text-white"
                        onclick="add_schedule_modal.close()">Cancel</button>
                </div>
            </form>
        </div>
    </dialog>

    <!-- Edit Schedule Modal -->
    <dialog id="edit_schedule_modal" class="modal">
        <div class="modal-box relative bg-gray-800 text-gray-200">
            <button class="btn btn-sm btn-circle absolute right-2 top-2 text-gray-400 hover:text-white hover:bg-gray-700"
                onclick="edit_schedule_modal.close()">✕</button>
            <h3 class="text-lg font-semibold mb-4">Edit Schedule</h3>

            <form id="schedule_form" action="{{ route('schedules.update') }}" method="POST">
                @csrf
                @method('PUT')
                <!-- Title -->
                <div class="form-control mb-4">
                    <label class="label" for="title">
                        <span class="label-text text-gray-300">Title</span>
                    </label>
                    <input type="text" id="title" name="title"
                        class="input input-bordered w-full bg-gray-700 text-white border-gray-600 placeholder-gray-500 focus:ring-2 focus:ring-indigo-600"
                        placeholder="Enter schedule title" required />
                </div>

                <!-- Type -->
                <div class="form-control mb-4">
                    <label class="label" for="type">
                        <span class="label-text text-gray-300">Type</span>
                    </label>
                    <select id="type" name="type"
                        class="select select-bordered w-full bg-gray-700 text-white border-gray-600 focus:ring-2 focus:ring-indigo-600"
                        required>
                        <option value="meeting">Meeting</option>
                        <option value="event">Event</option>
                        <option value="deadline">Deadline</option>
                    </select>
                </div>

                <!-- Description -->
                <div class="form-control mb-4">
                    <label class="label" for="description">
                        <span class="label-text text-gray-300">Description</span>
                    </label>
                    <textarea id="description" name="description" rows="3"
                        class="textarea textarea-bordered w-full bg-gray-700 text-white border-gray-600 placeholder-gray-500 focus:ring-2 focus:ring-indigo-600"
                        placeholder="Enter schedule description (optional)"></textarea>
                </div>

                <!-- Start Time (Updated for All-Day event) -->
                <div class="form-control mb-4">
                    <label class="label" for="start_time">
                        <span class="label-text text-gray-300">Start Time</span>
                    </label>
                    <input type="datetime-local" id="start_time" name="start_time"
                        class="input input-bordered w-full bg-gray-700 text-white border-gray-600 focus:ring-2 focus:ring-indigo-600"
                        required />
                </div>

                <!-- End Time (optional, hidden if All-Day) -->
                <div class="form-control mb-4" id="end_time_container" style="display: none;">
                    <label class="label" for="end_time">
                        <span class="label-text text-gray-300">End Time</span>
                    </label>
                    <input type="datetime-local" id="end_time" name="end_time"
                        class="input input-bordered w-full bg-gray-700 text-white border-gray-600 focus:ring-2 focus:ring-indigo-600" />
                </div>

                <!-- All Day Checkbox -->
                <div class="form-control mb-4">
                    <label class="label cursor-pointer">
                        <span class="label-text text-gray-300">All Day Event</span>
                        <input type="checkbox" id="is_all_day" name="is_all_day" class="checkbox checkbox-primary"
                            onchange="toggleEndTime()" />
                    </label>
                </div>

                <!-- Status -->
                <div class="form-control mb-4">
                    <label class="label" for="status">
                        <span class="label-text text-gray-300">Status</span>
                    </label>
                    <select id="status" name="status"
                        class="select select-bordered w-full bg-gray-700 text-white border-gray-600 focus:ring-2 focus:ring-indigo-600">
                        <option value="pending">Pending</option>
                        <option value="confirmed">Confirmed</option>
                    </select>
                </div>

                <!-- Buttons -->
                <div class="modal-action">
                    <button type="submit"
                        class="btn bg-indigo-600 hover:bg-indigo-700 text-white font-semibold shadow-lg transition duration-300">
                        Save Schedule
                    </button>
                    <button type="button" class="btn btn-ghost text-gray-400 hover:text-white"
                        onclick="edit_schedule_modal.close()">Cancel</button>
                </div>
            </form>
        </div>
    </dialog>

    <script>
        // $(document).ready(function() {

        // Toggle visibility of end_time input based on all-day event status
        function toggleEndTime() {
            const isAllDay = document.getElementById('is_all_day').checked;
            const endTimeContainer = document.getElementById('end_time_container');
            const startTimeInput = document.getElementById('start_time');
            const endTimeInput = document.getElementById('end_time');

            if (isAllDay) {
                // If all-day event, remove time from start_time and hide end_time
                startTimeInput.type = 'date';
                endTimeContainer.style.display = 'none';
                endTimeInput.value = ''; // Clear end_time value
            } else {
                // If not an all-day event, use datetime-local for start_time and show end_time
                startTimeInput.type = 'datetime-local';
                endTimeContainer.style.display = 'block';
            }
        }

        function showEditModal(id, title, description, start_time, end_time = '', isAllday, status) {
            edit_schedule_modal.showModal();

            // Select the modal element
            const modal = document.getElementById('edit_schedule_modal');

            // Set values of the fields using Vanilla JavaScript
            modal.querySelector('#title').value = title;
            modal.querySelector('#description').value = description;
            modal.querySelector('#start_time').value = start_time;
            modal.querySelector('#end_time').value = end_time;
            modal.querySelector('#status').value = status;

            if(end_time){
                modal.querySelector('#end_time_container').style.display = 'block';
            }

            if(isAllday){
                modal.querySelector('#is_all_day').checked = true;
            }
        }
        // });
    </script>
@endsection
