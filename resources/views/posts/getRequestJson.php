<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container">
        <h1>GET Dummy Employee</h1>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Employee Name</th>
                    <th>Employee Salary</th>
                    <th>Employee Age</th>
                    <th>Profile Image</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if (isset($results)){
                        foreach ($results as $result) {
                            echo "<tr>";
                            echo "<td>" . $result['id'] . "</td>";
                            echo "<td>" . $result['employee_name'] . "</td>";
                            echo "<td>" . $result['employee_salary'] . "</td>";
                            echo "<td>" . $result['employee_age'] . "</td>";
                            echo "<td>" . $result['profile_image'] . "</td>";
                            echo "</tr>";
                        }
                    }else if(isset($result)) {
                        echo "<tr>";
                        echo "<td>" . $result['id'] . "</td>";
                        echo "<td>" . $result['employee_name'] . "</td>";
                        echo "<td>" . $result['employee_salary'] . "</td>";
                        echo "<td>" . $result['employee_age'] . "</td>";
                        echo "<td>" . $result['profile_image'] . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
