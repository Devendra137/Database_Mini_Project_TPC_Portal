<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h3>Form Example</h3>
        <form id="myForm" action="submit.php" method="post" target="_blank">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <button type="submit" class="btn btn-primary" id="submitBtn">Submit</button>
        </form>
        <!-- <button type="button" class="btn btn-secondary mt-3" id="disableBtn">Disable Button</button> -->
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Disable button when form is submitted
        document.getElementById('myForm').addEventListener('submit', function() {
            document.getElementById('submitBtn').disabled = true;
        });

        // Disable button when clicked
        // document.getElementById('disableBtn').addEventListener('click', function() {
        //     document.getElementById('submitBtn').disabled = true;
        // });
    </script>
</body>
</html>
