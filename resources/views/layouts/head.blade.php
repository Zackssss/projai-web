<head>
    <title>Site du BDE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        .navbar-inverse{
            top: 0;

        }
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #101010;
            color: white;
            text-align: center;
            z-index: 99;
        }
        #boxombre {
            border: 1px solid;
            padding: 10px;
            box-shadow: 5px 10px 8px #888888;
        }
        </style>
    <main class="py-4">
        @yield('content')
    </main>
</head>
