<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information Form</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            margin-bottom: 20px;
        }
        .form-container .form-control {
            border-radius: 10px;
        }
        .form-container .btn {
            border-radius: 10px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="form-container">
               {{--  @if ($errors->any())
                    @foreach ($errors->all() as $error  )
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>      
                    @endforeach                  
                @endif --}}
                <div class=" container d-flex justify-content-between align-items-center mb-4">
                    <h1 class="mb-4">Information List</h1>
                <a href="{{ route('admin.index') }}" class="btn btn-primary d-flex align-items-center justify-content-center"  style="height: 40px; width: 100px;"> back</a>
                </div>
                <form method="POST" action="{{ route('admin.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <!-- Job -->
                    <div class="mb-3">
                        <label for="job" class="form-label">Job</label>
                        <input type="text" class="form-control" id="job" name="job" required>
                    </div>

                    <!-- Birthday -->
                    <div class="mb-3">
                        <label for="birthday" class="form-label">Birthday</label>
                        <input type="date" class="form-control" id="birthday" name="birthday" required>
                    </div>

                    <!-- Phone -->
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <!-- Address -->
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                    </div>

                    <!-- About Me -->
                    <div class="mb-3">
                        <label for="about_me" class="form-label">About Me</label>
                        <textarea class="form-control" id="about_me" name="abt_me" rows="4" required></textarea>
                    </div>

                    <!-- Social Media Links -->
                    <div class="mb-3">
                        <label for="fb_link" class="form-label">Facebook Link</label>
                        <input type="url" class="form-control" id="fb_link" name="fb">
                    </div>

                    <div class="mb-3">
                        <label for="ig_link" class="form-label">Instagram Link</label>
                        <input type="url" class="form-control" id="ig_link" name="ig">
                    </div>

                    <div class="mb-3">
                        <label for="linkedin_link" class="form-label">LinkedIn Link</label>
                        <input type="url" class="form-control" id="linkedin_link" name="linkedin">
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>