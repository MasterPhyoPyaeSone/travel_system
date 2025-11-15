

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="">
        <div class="container" style="width: 500px;margin-left: 22%;">
            <header>
                <h1 style="text-align: center;background-color: greenyellow;padding: 10px;">VOUCHER</h1>
            </header>
            <HR></HR>
            <div class="clo" style="display: flex;;align-items: center;justify-content: space-evenly;">
                <div class="clo1" style="font-size: 20px;">
                    <p>ID</p>
                    <p>Item Name</p>
                    <p>Date</p>
                </div>
                <div class="col2" style="font-size: 20px;color: rgb(47, 255, 71);font-weight: bold;">
                    <p>Local14 ID: <span style="color: black">{{$data->id}}</span></p>
                    <p>{{$data->package_title}}</p>
                    <p>{{$data->startDate}}</p>
                </div>
            </div>
            <hr>
            <img src="https://www.seekpng.com/png/detail/230-2303331_complete-order-comments-order-icon-png.png" alt="" style="margin-left: 10%;width: 400px;height: 400px;">
            <!-- <h1 style="text-align: center;color: greenyellow;">Thank you for your order Package</h1><hr>
            <h3>If you have any question , please contact us at <span><p style="color: greenyellow;">Local14@gamil.com</p></span></h3> -->
        </div>
    </div>
</body>
</html>