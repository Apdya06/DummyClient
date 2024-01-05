<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <h1>Delete Dummy Employee</h1>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td>Status</td>
                    <td><?php echo $result['status'] ?></td>
                </tr>
                <tr>
                    <td>Message</td>
                    <td><?php echo $result['message'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
