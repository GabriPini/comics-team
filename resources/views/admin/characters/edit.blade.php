@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="my-4">Edit {{ $character->name }}</h1>
        {{-- Pop-up per la visualizzazione di errori --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- Form per editare un record nel database --}}
        <form action="{{ route('characters.update', $character) }}" method="post">
            @csrf
            @method('PUT')
            {{-- Title input --}}
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelper"
                    placeholder="" value="{{ $character->name }}" class="@error('name') is-invalid @enderror">
                {{-- Pop-up di errore --}}
                @error('name')
                    <div class="alert alert-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                        </svg> {{ $message }}</div>
                @enderror
                <small id="titleHelper" class="form-text text-muted">Edit character name</small>
            </div>
            {{-- Thumb input --}}
            <div class="mb-3">
                <label for="img" class="form-label">Image</label>
                <input type="text" class="form-control" name="img" id="img" aria-describedby="imgHelper"
                    placeholder="" value="{{ $character->img }}" class="@error('img') is-invalid @enderror">
                {{-- Pop-up di errore --}}
                @error('img')
                    <div class="alert alert-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                        </svg> {{ $message }}</div>
                @enderror
                <small id="thumbHelper" class="form-text text-muted">Edit image</small>
            </div>
            {{-- Price input --}}
            <div class="mb-3">
                <label for="cover_img" class="form-label">cover_img</label>
                <input type="text" class="form-control" name="cover_img" id="cover_img" aria-describedby="cover_imgHelper"
                    placeholder="" value="{{ $character->cover_img }}" class="@error('cover_img') is-invalid @enderror">
                {{-- Pop-up di errore --}}
                @error('cover_img')
                    <div class="alert alert-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                        </svg> {{ $message }}</div>
                @enderror
                <small id="priceHelper" class="form-text text-muted">Edit cover image</small>
            </div>
            {{-- Series input --}}
            <div class="mb-3">
                <label for="powers" class="form-label">powers</label>
                <input type="text" class="form-control" name="powers" id="powers" aria-describedby="powersHelper"
                    placeholder="" value="{{ $character->powers }}">
                <small id="powersHelper" class="form-text text-muted">Edit character powers</small>
            </div>
            {{-- Sale input --}}
            <div class="mb-3">
                <label for="first_apparance" class="form-label">First appearence</label>
                <input type="date" class="form-control" name="first_apparance" id="first_apparance" aria-describedby="saleDateHelper"
                    placeholder="" value="{{ $character->first_apparance }}" class="@error('first_apparance') is-invalid @enderror">
                {{-- Pop-up di errore --}}
                @error('first_apparance')
                    <div class="alert alert-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                        </svg> {{ $message }}</div>
                @enderror
                <small id="saleDateHelper" class="form-text text-muted">Edit character first appearence</small>
            </div>
            {{-- Description input --}}
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="5">{{ $character->description }}</textarea>
            </div>
            {{-- Submit button --}}
            <button type="submit" class="btn btn-primary">Edit Comic</button>
        </form>
    </div>
@endsection
