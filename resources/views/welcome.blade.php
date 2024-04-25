<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Your First Service</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        .form-container {
          
            max-width: 500px;
            margin: auto;
        }
        .form-container h2 {
            margin-bottom: 30px;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-group input[type="text"],
        .form-group input[type="number"],
        .form-group input[type="date"],
        .form-group input[type="text"] {
            border-radius: 5px;
        }
        .error-message {
            color: red;
            font-size: 0.9rem;
        }
        .container {
            background-color: rgb(246, 255, 206);
            padding: 25px;
            border-radius: 10px;
            opacity: 0.9;
            margin-bottom: 20px;
        
        }
        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 180px
        }
        .btn:hover {
            background-color: #45a049;
        }
    
    </style>
</head>
<body>
    

<div class="container mt-5 form-container">
    <h2>Add you Service :</h2>
    <form id="service-form" action="" method="POST">
        @csrf
        <div class="form-group">
            <label for="job">Job:</label>
            <input type="text" class="form-control" id="job" name="job" required>
        </div>
        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" class="form-control" id="city" name="city" required>
        </div>
        <div class="form-group">
            <label for="experience">Years of Experience:</label>
            <input type="number" class="form-control" id="experience" name="experience" required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="from">From:</label>
                <input type="date" class="form-control" id="from" name="from" required>
            </div>
            <div class="form-group col-md-6">
                <label for="to">To:</label>
                <input type="date" class="form-control" id="to" name="to" required>
            </div>
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>
        <div class="form-group">
            <label for="duration">Duration:</label>
            <input type="text" class="form-control" id="duration" name="duration" required>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Custom JavaScript -->
<script>
    $(document).ready(function() {
        // Custom form validation
        $('#service-form').submit(function(event) {
            var from = $('#from').val();
            var to = $('#to').val();
            if (from >= to) {
                $('.error-message').remove();
                $('<div class="error-message">Invalid date range. "To" date should be after "From" date.</div>').insertAfter('#to');
                event.preventDefault();
            }
        });
    });
</script>
</body>
</html>
