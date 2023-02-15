<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,500&display=swap" rel="stylesheet">

    <style>

      
*{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            font-family: 'Roboto', sans-serif;
            font-size: 16px;
        }

        section#email-content-section {
            padding: 100px 0px;
        }
        .container {
            max-width: 900px;
            width: 60%;
            margin: 0px auto;
        }
        .email-content-block h1 {
            font-size: 2rem;
            font-weight: 400;
            margin-bottom: 20px;
            color: #2a2a2a;
        }


        @media (max-width: 768px){
            .container {
                max-width: 1250px;
                width: 98%;
                padding: 0 20px;
            }
             .email-content-block h1 {
                font-size: 1.8rem;
                
            }
        }

        .logo-block {
            width: 180px;
            margin-bottom: 60px;
        }
           
        .email-content-block p {
            font-size: 18px;
            line-height: 1.5;
            margin-bottom: 30px;
            color: #2a2a2a;
        }
        button.email-btn {
            border: 0;
            margin-top: 40px;
        }

        button.email-btn a {
            border: 0;
            padding: 10px 16px;
            background-color: #2a2a2a;
            color: #fff;
            font-size: 16px;
            border-radius: 5px;
            text-decoration: none;
        }
        
        .email-table td {
            font-size: 16px !important;
        }
        
        .email-table td a{
            color: #222 !important;
        }
        .email-table tr{
            height: 30px;
            margin-bottom: 10px;
        }
        
         @media (max-width: 576px){
             .email-content-block p {
                font-size: 16px;
                margin-bottom: 40px;
            }
        }

        @media (max-width: 400px){
            .email-content-block h1 {
                font-size: 1.4rem;
            }
        }
    </style>
</head>
<body>
    <section id="email-content-section">
        <div class="container">
            <div class="email-content-block">

                <div class="logo-block">
                    <img src="{{asset($common_settings['logo'])}}" width="100%">
                </div>
				@section('content')
				@show
                
            </div>
        </div>
    </section>
    
</body>
</html>