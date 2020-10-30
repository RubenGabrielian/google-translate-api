<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <style>
            .mt-2 {
                margin-top: 20px;
            }
        </style>
    </head>
    <body class="antialiased">
        <input type="text" name="text">
        <button class="translate">Translate</button>
        <div class="card mt-2"></div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".translate").click(function () {
                let _token   = $('meta[name="csrf-token"]').attr('content');
                let name = $("input[name='text']").val();

                $.ajax ({
                    url: '/translate',
                    type: 'POST',
                    data: {
                        name,
                        _token
                    },
                    success:function (response) {
                        $(".card").empty()
                        $(".card").append(response)
                    }
                })
            })
        })
    </script>
</html>
