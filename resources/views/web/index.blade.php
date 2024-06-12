<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>API Developemnt</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        p {
            text-align: justify;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark text-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/logo.png') }}" class="rounded-circle" style="height: 45px; width:45px;"
                    alt="" srcset="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page"
                            href="#">{{ __('messages.Home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page"
                            href="#">{{ __('messages.About') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page"
                            href="#">{{ __('messages.Blog') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page"
                            href="#">{{ __('messages.Contact') }}</a>
                    </li>
                </ul>
                <div class="d-flex text-dark">


                    @if (isset(auth()->user()->id))
                        <a href="{{ route('dashboard')}}" title="Dashboard" class="btn btn-outline-secondary"><i class="bi bi-ui-checks-grid"></i></a>
                        <a onclick="document.getElementById('logout').submit();" title="logout"  class="btn btn-danger ms-2"><i class="bi bi-box-arrow-right"></i></a>
                        <form id="logout" action="{{ route('logout') }}" method="post">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login')}}" class="btn btn-secondary">Login</a>
                    @endif

                    <select class="form-control changeLang ms-2">
                        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                        <option value="sp" {{ session()->get('locale') == 'sp' ? 'selected' : '' }}>Spanish</option>
                        <option value="bn" {{ session()->get('locale') == 'bn' ? 'selected' : '' }}>Bangla</option>
                    </select>
                </div>
            </div>
        </div>
    </nav>

    <section class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <p style="text-align:justify;">
                    Laravel is a web application framework with expressive, elegant syntax. A web framework provides a
                    structure and starting point for creating your application, allowing you to focus on creating
                    something
                    amazing while we sweat the details. Laravel strives to provide an amazing developer experience while
                    providing powerful features such as
                    thorough dependency injection, an expressive database abstraction layer, queues and scheduled jobs,
                    unit
                    and integration testing, and more.
                </p>
                <p style="text-align:justify;">
                    Whether you are new to PHP web frameworks or have years of experience, Laravel is a framework that
                    can
                    grow with you. We'll help you take your first steps as a web developer or give you a boost as you
                    take
                    your expertise to the next level. We can't wait to see what you build.
                </p>
            </div>

            <div class="col-md-4">
                <img src="{{ asset('img/swe.jpg') }}" class="w-100 h-100" alt="" srcset="">
            </div>
        </div>
    </section>


    {{-- Whai is API  --}}
    <section class="container mt-5">
        <h1 class="text-center mb-3">What is API</h1>

        <p>Many people ask themselves, “What is an API?” API is the acronym for application programming interface — a
            software intermediary that allows two applications to talk to each other. APIs are an accessible way to
            extract and share data within and across organizations.</p>

        <p>APIs are all around us. Every time you use a rideshare app, send a mobile payment, or change the thermostat
            temperature from your phone, you’re using an API.</p>

        <div class="text-center">

            <img src="{{ asset('img/api_exm.png') }}" style="width: 40%;" alt="" srcset="">
        </div>
    </section>


    <footer class="bg-dark text-light text-center">
        <p class="py-3 mb-0 text-center">&copy; 2024 Nurul. All rights reserved.</p>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
        var url = "{{ route('changeLang') }}";

        $(".changeLang").change(function() {
            window.location.href = url + "?lang=" + $(this).val();
        });
    </script>
</body>

</html>
