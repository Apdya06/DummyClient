<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <h1>Put Dummy Employee</h1>
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td>Employee Name</td>
                    <td><?php echo $result['name'] ?></td>
                </tr>
                <tr>
                    <td>Employee Salary</td>
                    <td><?php echo $result['salary'] ?></td>
                </tr>
                <tr>
                    <td>Employee Age</td>
                    <td><?php echo $result['age'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
