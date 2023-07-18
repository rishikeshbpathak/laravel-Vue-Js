<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VitalAire Kontakt Notification</title>
    <meta name="description" content="Kontakt Notification">
    <meta name="keywords" content="Vital-aire, Kontakt, Notification">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('/assets/png/frontend/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{url('/assets/png/frontend/apple-touch-icon.png')}}">
</head>

<body>
    <div>
        <p>{{ $title }}</p>
    </div>
    <div>
        <table>
            <tbody>
                <tr>
                    <td>Vorname </td>
                    <td> {{ $firstname }}</td>
                </tr>
                <tr>
                    <td>Nachname </td>
                    <td> {{ $surname }}</td>
                </tr>
                <tr>
                    <td>E-Mail </td>
                    <td> {{ $email }}</td>
                </tr>
                <tr>
                    <td>Nachricht </td>
                    <td> {{ $message }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>