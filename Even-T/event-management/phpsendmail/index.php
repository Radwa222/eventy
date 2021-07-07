<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <script> src="jquery-3.3.1.min.js" type="text/javascript"</script>!-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 <!-- load Jquery from local file not link -->
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        input, textarea {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h4 align="center">complans</h4>
    <div class="container" style="margin-top:100px;">
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3" align="center">
                <input id="name" placeholder="Name" class="form-control">
                <input id="email" placeholder="Email" class="form-control">
                <input id="subject" placeholder="Subject" class="form-control">
                <textarea class="form-control" id="body" placeholder="please wirte ur message and your email "></textarea>
                <input type="button" onclick="sendEmail()" value="Send An Email" class="btn btn-primary">
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function sendEmail() {
        
            var name = $("#name").val();
            var email = $("#email").val();
            var subject = $("#subject").val();
            var body = $("#body").val();
            debugger;
           

            if (name && email && subject && body) {
                $.ajax({
                   url: './sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name,
                       email: email,
                       subject: subject,
                       body: body
                   }, success: function (response) {
                        if (response.status == "success")
                            alert('Email Has Been Sent!');
                        else {
                            console.log(response);
                            alert('Please Try Again!');
                        }
                   }
                });
            }
        }

        // function isNotEmpty(caller) {
        //     if (caller == "") {
        //         caller.css('border', '1px solid red');
        //         return false;
        //     } else
        //         caller.css('border', '');

        //     return true;
        // }
    </script>









</body>
</html>