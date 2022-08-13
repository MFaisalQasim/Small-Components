<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
</head>

<body>


    <div id="notification">

        @foreach ($data as $item)
            @if ($item->start >= date('Y-m-d'))
                {{ $item->start }}

                <p>
                    <a>{{ $item->title }}</a>
                    <a>{{ $item->start }}</a>
                    <a>{{ $item->end }}</a>
                </p>
            @endif
        @endforeach

    </div>
</body>
<script src="http://code.jquery.com/jquery-3.1.1.js"></script>
<script>
    
 // window.setInterval('refresh()', 10000);
        // // Call a function every 10000 milliseconds 
        // // (OR 10 seconds).

        // // Refresh or reload page.
        // function refresh() {
        //     window.location.reload('#notification');
        // }
        // setTimeout(function() {
        //     location.reload('#notification');
        // }, 30000);



    var dt = new Date();
        var setDt = dt.setDate(dt.getDate() + 3);
    //     console.log(setDt);
        var sec = 50000;


    function loadlink() {
        $('#notification').load(location.href, function() {
            $(this).unwrap();
        });
    }

    // loadlink(); // This will run on page load
    setInterval(function() {
        loadlink()
        console.log('refreshs')
        // console.log({{ date('Y,m,d') }})
        dt.getMinutes();
        // displayMessage("Event Deleted Successfully");
        // this will run after every 5 seconds
    }, sec);
    // function displayMessage(message) {
    //     toastr.success(message, 'Event');
    // }
</script>





</html>
