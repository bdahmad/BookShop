<html>

<head>
    <title>Home</title>
    <meta name="viewpost" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
</head>

<body>


    <!-- show Reviews -->
    <div class="container-fluid mt-5">
            <div class="row">
            <div class="container col-2">
            <p style="font-size: 50px;">Input Form</p>
            <th class="col-1">Comment</th><br>
            <input type="text" name="commet" class="btn btn-outline-info mr-2" />
            <input type="submit" name="submit" class="btn btn-outline-info mr-2 mt-3" />
            </div>
            <div class="container col-8">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th class="col-1">ID</th>
                            <th class="col-1">Comment</th>
                            <th class="col-1">Sentiment</th>
                        </tr>
                    </thead>
                </table>
            </div>
            </div>
    </div>
</body>

</html>