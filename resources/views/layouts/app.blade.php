<!-- Template for all pages of this site -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Laravel Quickstart - Basic</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <!-- CSS & JavaScript-->      
    </head>

    <body>
        <div class="container">
            <div class="content">
                <nav class="navbar navbar-default"></nav>
                <!-- Navbar content -->
                <div class="title">Laravel 5</div>
            </div>
        </div>

        <!-- Child pages, extending this template, inject content here -->
        @yield('content')
    </body>
</html>
