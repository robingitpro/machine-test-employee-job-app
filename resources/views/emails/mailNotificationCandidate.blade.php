<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Email Notification</h2>
        <p>You have a recived a notifcation</p>
        <table class="table">

            <tbody>
                <tr>
                    <td>Name:-&nbsp;&nbsp;{{ $candidate->name }}</td>
                    <td>Phone:-&nbsp;&nbsp;{{ $candidate->phone }}</td>
                    <td>Email:-&nbsp;&nbsp;{{ $candidate->email }}</td>
                    <td>Resume:-&nbsp;&nbsp;<a href="{{ asset('uploads') }}/{{ $candidate->resume }}">Download</a></td>
                </tr>

            </tbody>
        </table>
    </div>

</body>

</html>
