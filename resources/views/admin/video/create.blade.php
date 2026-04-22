@extends('layouts.app')

@section('content')

<h2>Add Video</h2>

<form action="{{ route('video.store') }}" method="POST">
    @csrf

    <input type="text" name="title" placeholder="Title" required><br><br>

    <select name="category">
        <option value="training">Training</option>
        <option value="event">Event</option>
        <option value="health">Health</option>
        <option value="success">Success</option>
    </select><br><br>

    <input type="text" name="url" placeholder="YouTube URL" required><br><br>

    <textarea name="description" placeholder="Description"></textarea><br><br>

    <label>
        <input type="checkbox" name="is_live"> Live Stream
    </label><br><br>

    <button type="submit">Upload</button>

</form>

@endsection