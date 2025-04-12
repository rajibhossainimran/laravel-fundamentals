@extends('customer')
@section('content')
<div class="container">
    <h1>User Information</h1>
    
    <div class="user-info">
        <!-- Accessing the main user data -->
        <p><strong>Name:</strong> {{ $info->name }}</p>
        <p><strong>Email:</strong> {{ $info->email }}</p>
        
        <!-- Accessing related 'info' data -->
        <h3>Additional Information</h3>
        <p><strong>Age:</strong> {{ $info->info->age }}</p>
        <p><strong>Gender:</strong> {{ $info->info->gender }}</p>
        <p><strong>Phone:</strong> {{ $info->info->phone }}</p>
        <p><strong>Address:</strong> {{ $info->info->address }}</p>
    </div>
</div>
@endsection