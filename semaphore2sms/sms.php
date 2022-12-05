<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <form action="test.php" method="post">
        <div class=" d-flex align-items-center justify-content-center">
            <div class="bg-white col-md-4">
                <div class="p-4 rounded shadow-md">
                    <div>
                        <label for="number" class="form-label">Contact Number</label>
                        <input type="text" name="number" id="number" class="form-control" placeholder="Contact number" required>
                    </div>
                    <!-- <div class="mt-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                    </div> -->
                    <div class="mt-3 mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea name="message" id="message" cols="20" rows="6" class="form-control"
                            placeholder="message"></textarea>
                    </div>
                    <button class="btn btn-primary">
                        Submit Form
                    </button>
                </div>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>