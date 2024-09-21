@extends('layouts.main')
@section('content')
    <livewire:todos />

    <script>
        function showUpdateTodo(button, id, title) {
            const todoElement = document.querySelector(`[data-todo-id="${id}"]`);

            if (todoElement) {
                const titleElement = todoElement.querySelector('h3');
                const descriptionElement = todoElement.querySelector('p');
                const priorityElement = todoElement.querySelector('span');

                const description = descriptionElement ? descriptionElement.textContent : ''; // handle jika null
                const priority = priorityElement.textContent;
                const dueDate = button.getAttribute('data-due-date');

                const updateTodoModal = document.getElementById('my_modal_2');
                updateTodoModal.showModal();

                document.getElementById('update_todo_id').value = id;
                document.getElementById('update_todo_title').value = title;
                document.getElementById('update_todo_description').value = description;
                document.getElementById('update_todo_priority').value = priority;
                document.getElementById('update_todo_due_date').value = dueDate; // Set value ke input date
            }
        }


        function toggleTodoStatus(id, completed) {
            fetch(`/todos/${id}/toggle`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    status: completed ? 'completed' : 'pending'
                })
            }).then(response => {
                if (response.ok) {
                    const todoElement = document.querySelector(`[data-todo-id="${id}"]`);
                    if (todoElement) {
                        const titleElement = todoElement.querySelector('h3');
                        if (completed) {
                            titleElement.classList.add('line-through');
                        } else {
                            titleElement.classList.remove('line-through');
                        }
                    }
                }
            });
        }

        // Search functionality
        document.getElementById('search').addEventListener('keyup', function() {
            const searchValue = this.value.toLowerCase();
            const todos = document.querySelectorAll('#todos .todo');
            todos.forEach(todo => {
                const title = todo.querySelector('h3').textContent.toLowerCase();
                const description = todo.querySelector('p') ? todo.querySelector('p').textContent
                    .toLowerCase() : '';
                if (title.includes(searchValue) || description.includes(searchValue)) {
                    todo.style.display = '';
                } else {
                    todo.style.display = 'none';
                }
            });
        });
    </script>
@endsection
