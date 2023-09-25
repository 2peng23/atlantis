<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Comment
        </h2>
    </x-slot>

    <div class="container">
        <div>
            <form action="{{ route('comment1-update', $data->id) }}" wire:navigate method="post" id="comment1">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment1">{{ $data->comment1 }}</textarea>
                </div>
                <div class="mb-3">
                    <input type="submit" value="Update Comment" class="btn btn-success text-dark">
                </div>
            </form>

        </div>
    </div>
</x-app-layout>
