<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight pt-2">
            {{ __('Admin Dashboard') }}
            <a href="{{ route('admin.create') }}" class="btn btn-danger float-md-end float-sm-center">Register New Admin</a>
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link rel="stylesheet" href="./assets/CSS/style.css">
                        <link rel="shortcut icon" href="./assets/Images/yellowlogo.png" type="image/x-icon">
                        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
                    </head>
                    <body>
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        <div class="custom-bg">
                            <div class="poster-overlay"></div>
                            <div class="centered-text">
                                Create a new blog Post
                            </div>
                        </div>
                        <div class="container">
                            <form method="POST" action="{{ route('store-post') }}">
                                @csrf
                                <div class="mb-3 mt-3">
                                    <input type="text" style="border: 0px;" name="title" class="form-control inputtitle" id="exampleFormControlInput1" placeholder="Enter title of post" required>
                                </div>
                                <div class="mb-3 mt-3">

                                </div>
                                <div class="form-group">
                                    <textarea class="form-control inputdata" name="content" style="height: 100vh !important; " placeholder="Enter post data here" id="exampleFormControlTextarea3" rows="7" required></textarea>
                                </div>
                                <div class="pt-3">
                                    <button type="submit" class="bg-danger px-5 py-3" style="font-weight: bold;">Submit</button>
                                </div>
                            </form>
                        </div>
                    </body>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
