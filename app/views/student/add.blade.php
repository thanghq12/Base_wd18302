@extends("layout.main")
@section('content')
    <form action="{{route('post-student')}}" method="POST">
        Name <input type="text" name="name"><br>
        Date of birth <input type="text" name="year_of_birth"><br>
        Phone number <input type="text" name="phone_number"><br>
        <input type="submit" name="add" value="Them">
    </form>
@endsection