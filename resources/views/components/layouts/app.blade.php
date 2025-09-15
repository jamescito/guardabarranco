<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
    {{ $slot }}
    @livewireScripts

    <!-- jQuery (si no está ya incluido) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: 'Seleccione una opción',
            allowClear: true
        });
    });
</script>
</body>
</html>