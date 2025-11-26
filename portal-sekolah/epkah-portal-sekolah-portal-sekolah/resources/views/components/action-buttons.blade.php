@props([
    'id',
    'view' => null,
    'edit' => null,
    'delete' => null,
])

<div class="flex gap-2">

    {{-- VIEW --}}
    @if ($view)
        <a href="{{ route($view, $id) }}"
            class="action-btn bg-blue-500 hover:bg-blue-600">
            <i class="fa fa-eye"></i>
        </a>
    @endif

    {{-- EDIT --}}
    @if ($edit)
        <a href="{{ route($edit, $id) }}"
            class="action-btn bg-yellow-500 hover:bg-yellow-600">
            <i class="fa fa-pen"></i>
        </a>
    @endif

    {{-- DELETE --}}
    @if ($delete)
        <form action="{{ route($delete, $id) }}"
              method="POST"
              onsubmit="return confirm('Adakah anda pasti ingin memadam rekod ini?')">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="action-btn bg-red-500 hover:bg-red-600">
                <i class="fa fa-trash"></i>
            </button>
        </form>
    @endif

</div>
