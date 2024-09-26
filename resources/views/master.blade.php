<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @stack('before-styles')
    <link href="{{ asset('output.css') }}" rel="stylesheet" />
    <link href="{{ asset('main.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .about-section {
            background-color: #fff;
            padding: 50px 20px;
            margin: 20px 0;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .about-section h1 {
            font-size: 36px;
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .about-content {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .about-content img {
            max-width: 100%;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .about-text {
            font-size: 18px;
            color: #555;
        }

        @media(min-width: 768px) {
            .about-content {
                flex-direction: row;
            }

            .about-text {
                flex: 1;
                padding-right: 20px;
            }

            .about-content img {
                flex: 1;
            }
        }
    </style>
    @stack('after-styles')
</head>

@yield('content')

@stack('before-scripts')
@stack('after-scripts')

</html>
