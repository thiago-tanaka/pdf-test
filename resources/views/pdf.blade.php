<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pdf Test</title>
    <style>
        .page {
            width: 100%;
            height: 100%;
        }

        .float-left {
            float: left;
        }

        .float-right {
            float: right;
        }

        .box {
            border: 2px solid red;
            width: 49%;
            height: 47%;
        }
    </style>
</head>
<body>
@foreach ($itemChunks as $index => $chunk)
    <div class="page">
        <div class="box float-left">{{ $chunk[0]?? ''}}</div>
        <div class="box float-right">{{ $chunk[1] ?? '' }}</div>
        <div style="clear: both"></div>
        <div class="box float-left">{{ $chunk[2] ?? '' }}</div>
        <div class="box float-right">{{ $chunk[3] ?? '' }}</div>
    </div>
@endforeach
</body>
</html>
