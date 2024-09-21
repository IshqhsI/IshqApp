<div class="">

    <div class="bg-gray-900" style="min-height: calc(100vh - 68px);">
        <!-- Tab Menu -->
        <div class="bg-slate-950 shadow-sm py-2">
            <div class="container mx-auto px-4">
                <div class="flex justify-center">
                    <a class="px-6 py-4 text-gray-500 hover:text-indigo-600 font-medium transition duration-300"
                        href="{{ route('notes') }}">Notes</a>
                    <a class="px-6 py-4 text-indigo-600 border-b-2 border-indigo-600 font-medium"
                        href="{{ route('todos') }}">Todolist</a>
                    <a class="px-6 py-4 text-gray-500 hover:text-indigo-600 transition duration-300"
                        href="{{ route('schedules') }}">Schedules</a>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <main class="container mx-auto px-4 py-8 w-full lg:w-3/4">
            <div class="flex justify-between items-center mb-8">
                <button
                    class="btn btn-primary bg-indigo-600 hover:bg-indigo-700 border-none shadow-lg transition duration-300 transform hover:scale-105"
                    onclick="my_modal_1.showModal()">
                    Add Todo
                </button>

                <div class="form-control">
                    <input type="text" placeholder="Search todos..." id="search"
                        class="input input-bordered w-full max-w-xs focus:ring-2 focus:ring-indigo-600 transition duration-300" />
                </div>
            </div>

            <!-- Todos List -->
            <div class="space-y-4" id="todos">
                @if (count($todos) === 0)
                    {{-- make a good looking not found --}}
                    <div class="bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform mx-auto todo"
                        data-todo-id="">
                        <div
                            class="flex flex-col sm:flex-row items-start sm:items-center justify-between space-y-3 sm:space-y-0 sm:space-x-3">
                            <!-- Left side: Title, description, and checkbox -->
                            <div class="flex items-center space-x-3 w-full sm:w-auto">
                                <p class="text-base font-semibold text-white">✨ No todos found ✨</p>
                            </div>
                        </div>
                    </div>
                @else
                    @foreach ($todos as $todo)
                        <div class="bg-gray-800 p-4 rounded-lg shadow-md hover:shadow-lg transition duration-300 transform mx-auto todo"
                            data-todo-id="{{ $todo->id }}">
                            <div
                                class="flex flex-col sm:flex-row items-start sm:items-center justify-between space-y-3 sm:space-y-0 sm:space-x-3">
                                <!-- Left side: Title, description, and checkbox -->
                                <div class="flex items-center space-x-3 w-full sm:w-auto">
                                    <!-- Checkbox and title in one line on small screens -->
                                    <input type="checkbox" class="checkbox checkbox-primary"
                                        {{ $todo->status === 'completed' ? 'checked' : '' }}
                                        wire:click="updateTodoStatus({{ $todo->id }})">
                                    <div>
                                        <h3
                                            class="text-lg font-semibold text-white {{ $todo->status === 'completed' ? 'line-through' : '' }}">
                                            {{ $todo->title }}
                                        </h3>
                                        @if ($todo->description)
                                            <p class="text-gray-400 text-sm mt-1">{{ $todo->description }}</p>
                                        @endif
                                    </div>
                                </div>
                                <!-- Right side: Priority, actions, and due date -->
                                <div class="flex flex-col sm:flex-row sm:items-center justify-end w-full sm:w-auto">
                                    <div class="flex space-x-2 mb-2 sm:mb-0">
                                        <span
                                            class="badge badge-{{ $todo->priority }} capitalize">{{ $todo->priority }}</span>
                                        <button class="btn btn-sm btn-ghost text-indigo-400 hover:bg-indigo-900"
                                            onclick="showUpdateTodo(this, {{ $todo->id }}, '{{ $todo->title }}')"
                                            data-due-date="{{ $todo->due_date }}">Edit</button>
                                        <form action="{{ route('todos.destroy', $todo->id) }}" method="post"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                class="btn btn-sm btn-ghost text-red-400 hover:bg-red-900">Delete</button>
                                        </form>
                                    </div>
                                    <p class="text-gray-400 text-sm mt-2 sm:mt-0 sm:ml-3">Due: {{ $todo->due_date }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

        </main>
    </div>

    <!-- Add Todo Modal -->
    <dialog id="my_modal_1" class="modal">
        <div class="modal-box bg-gray-800">
            <h3 class="font-bold text-lg text-white">Add New Todo</h3>
            <form action="{{ route('todos.store') }}" method="post" class="mt-4">
                @csrf
                <div class="form-control">
                    <label class="label">
                        <span class="label-text text-gray-300">Title</span>
                    </label>
                    <input type="text" placeholder="Todo title" name="title" required
                        class="input input-bordered w-full bg-gray-700 text-white focus:ring-2 focus:ring-indigo-600" />
                </div>
                <div class="form-control mt-4">
                    <label class="label">
                        <span class="label-text text-gray-300">Description</span>
                    </label>
                    <textarea name="description" placeholder="Todo description"
                        class="textarea textarea-bordered w-full bg-gray-700 text-white focus:ring-2 focus:ring-indigo-600"></textarea>
                </div>
                <div class="form-control mt-4">
                    <label class="label">
                        <span class="label-text text-gray-300">Priority</span>
                    </label>
                    <select name="priority"
                        class="select select-bordered w-full bg-gray-700 text-white focus:ring-2 focus:ring-indigo-600">
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                    </select>
                </div>
                <div class="form-control mt-4">
                    <label class="label">
                        <span class="label-text text-gray-300">Due Date</span>
                    </label>
                    <input type="date" name="due_date" required
                        class="input input-bordered w-full bg-gray-700 text-white focus:ring-2 focus:ring-indigo-600" />
                </div>
                <div class="modal-action">
                    <button type="submit"
                        class="btn btn-primary bg-indigo-600 hover:bg-indigo-700 border-none">Save</button>
                    <button type="button" class="btn btn-ghost text-gray-300"
                        onclick="my_modal_1.close()">Cancel</button>
                </div>
            </form>
        </div>
    </dialog>

    <!-- Update Todo Modal -->
    <dialog id="my_modal_2" class="modal">
        <div class="modal-box bg-gray-800">
            <h3 class="font-bold text-lg text-white">Update Todo</h3>
            <form action="{{ route('todos.update') }}" method="post" class="mt-4">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id="update_todo_id">
                <div class="form-control">
                    <label class="label">
                        <span class="label-text text-gray-300">Title</span>
                    </label>
                    <input type="text" placeholder="Todo title" name="title" id="update_todo_title" required
                        class="input input-bordered w-full bg-gray-700 text-white focus:ring-2 focus:ring-indigo-600" />
                </div>
                <div class="form-control mt-4">
                    <label class="label">
                        <span class="label-text text-gray-300">Description</span>
                    </label>
                    <textarea name="description" id="update_todo_description" placeholder="Todo description"
                        class="textarea textarea-bordered w-full bg-gray-700 text-white focus:ring-2 focus:ring-indigo-600"></textarea>
                </div>
                <div class="form-control mt-4">
                    <label class="label">
                        <span class="label-text text-gray-300">Priority</span>
                    </label>
                    <select name="priority" id="update_todo_priority"
                        class="select select-bordered w-full bg-gray-700 text-white focus:ring-2 focus:ring-indigo-600">
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                    </select>
                </div>
                <div class="form-control mt-4">
                    <label class="label">
                        <span class="label-text text-gray-300">Due Date</span>
                    </label>
                    <input type="date" name="due_date" id="update_todo_due_date" required
                        class="input input-bordered w-full bg-gray-700 text-white focus:ring-2 focus:ring-indigo-600" />
                </div>
                <div class="modal-action">
                    <button type="submit"
                        class="btn btn-primary bg-indigo-600 hover:bg-indigo-700 border-none">Update</button>
                    <button type="button" class="btn btn-ghost text-gray-300"
                        onclick="my_modal_2.close()">Cancel</button>
                </div>
            </form>
        </div>
    </dialog>

</div>
