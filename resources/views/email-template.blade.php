
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style.css')}} ">
    <link rel="stylesheet" href=" {{asset('css/bootstrap.min.css')}} ">
    <title>Rampai Attorneys</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 email-wrapper">
                <div class="email-container">
                    <div class="header">
                        <h5>
                            <img src="logo-color.png" alt="">
                        </h5>
                    </div>
                    <div class="email-body">
                        <div class="email-user-details">
                            <span><strong>Name: </strong>  {{$data->name}} </span><br>
                            <span><strong>Phone: </strong>  {{$data->phone}} </span><br>
                            <span><strong>Subject:</strong>  {{$data->subject}} </span><br>
                            <span><strong>Email: </strong> <a href="mailto:{{$data->email}}"> {{$data->email}} </a></span>
                        </div>
                        <div class="email-message">
                            {!! $data->message !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>