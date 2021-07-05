<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Include CDN JavaScript -->
    <script src="https://unpkg.com/tailwindcss-jit-cdn"></script>

    <!-- Specify a custom TailwindCSS configuration -->
    <script type="module" >
    import forms from 'https://cdn.skypack.dev/@tailwindcss/forms';

    window.tailwindConfig = {
        plugins: [
            forms,
        ]
    };

    window.tailwindCSS.refresh();
    </script>
    <script type="tailwind-config">
    window.tailwindConfig
    </script>

    <title>{{ $title }} - {{ config('app.name') }}</title>
</head>
<body class="antialiased font-sans">
    {{ $slot }}
</body>
</html>
