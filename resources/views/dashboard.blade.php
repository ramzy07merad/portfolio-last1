<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Information Table</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-4">
            <div class=" container d-flex justify-content-between  mb-4">
                <h1 class="mb-4">Information List</h1>
            <a href="{{ route('admin.create') }}" class="btn btn-primary " > create informations</a>
            </div>
            
    
            <!-- Bootstrap Table -->
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Job</th>
                        <th>Birthday</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>About Me</th>
                        <th>Facebook</th>
                        <th>Instagram</th>
                        <th>LinkedIn</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $infos as $info)      
                        <tr>
                            <td>{{ $info->name }}</td>
                            <td>{{ $info->job }}</td>
                            <td>{{ $info->birthday }}</td>
                            <td>{{ $info->phone }}</td>
                            <td>{{ $info->email }}</td>
                            <td>{{ $info->address }}</td>
                            <td>{{ $info->abt_me }}</td>
                            <td><a href="{{ $info->fb_link }}" target="_blank">Facebook</a></td>
                            <td><a href="{{ $info->ig_link }}" target="_blank">Instagram</a></td>
                            <td><a href="{{ $info->linkedin_link }}" target="_blank">LinkedIn</a></td>
                            <td>
                                <!-- Add Edit and Delete Buttons -->
                                <a href="{{ route('admin.edit', $info->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.destroy', $info->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr> 
                        @endforeach
                    
                </tbody>
            </table>
    
        </div>
    
        <!-- Bootstrap JS (Optional) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
    
  
    
 
</x-app-layout>
