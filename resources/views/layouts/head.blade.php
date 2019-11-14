<head>
    <title>Site du BDE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <style>
        .navbar-inverse{
            top: 0;

        }

        .logofooter{
            position: fixed;
            bottom: 2px;
            left: 2px;
            z-index: 100;
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
            width: 100%;
            height: 100%;
        }
        .texte {
            padding-top: 10px;
            font-family: 'Lato', sans-serif;
        }
        a, a:hover{
            text-decoration: none;
            color: inherit;
        }
        .btn{
            padding: 5px;
        }
        .col-12, .col-md-6, .col-lg-4 {
            padding: 1%;

        }
        body{
            margin-bottom: 25%;
        }

        </style>
    <main class="py-4">
        @yield('content')
    </main>
</head>
