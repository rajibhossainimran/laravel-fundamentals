@extends('layout.master')
@section('content')
    <section>

        <a href="{{url('student/create')}}">create</a>
        <table>
            <thead>
                <tr>
                    <td>id</td>
                    <td>name</td>
                    <td>email</td>
                    <td>contact</td>
                    <td>action</td>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->contact}}</td>
                    <td>
                        <a href="{{route('student.edit',$student->id)}}">edit</a>


                        <form action="{{route('student.destroy',$student->id)}}" method="post">

                            @csrf
                            @method('delete')

                            <button type="submit">Del</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
    @endsection