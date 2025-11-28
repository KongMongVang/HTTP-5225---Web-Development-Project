@extends('template')
@section('content')
    <h1>All Students</h1>

    @foreach ($students as $student)
        {{ $student->fname }} <br>
        <form action="{{ route('students.destroy', $student -> id) }}" method="POST">
    @method('DELETE')
    {{ csrf_field() }}
    <input type="submit" value="Delete Student">
</form>
    @endforeach
@endsection