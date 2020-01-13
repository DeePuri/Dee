

@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <br />
        <table class="table table-bordered">
            <tr>
                <th>First Name</th><th>
                <th>Last Name</th><th>
                 <th>Email</th><th>
                <th>Loyalty Level</th><th>
                <th>Edit</th><th>
                <th>Delete</th><th>

                </tr>

                @foreach ($errors as $row)
                 <tr>
                     <td>{{$row['first_name']}}</td>
                     <td>{{$row['last_name']}}</td>
                     <td>{{$row['first_name']}}</td>
                     <td>{{$row['email']}}</td>
                     <td>{{$row['loyalty_level']}}</td>
                     <td></td>
                     <td></td>






                 </tr>   
                @endforeach
            </table>
    </div>
</div>
@endsection

