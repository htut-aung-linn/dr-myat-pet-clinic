<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/productshow.css">
    <title>Home</title>
</head>
<body>
<x-menu page="Home"/>

<h1 id="dr-m">Pet Products</h1>
<div class="new-p-g">
    <div class="f-w">
        <svg class="d-ic" width="163" height="124" viewBox="0 0 163 124" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <rect width="163" height="124" rx="62" fill="url(#pattern0_2_32)"/>
        <defs>
        <pattern id="pattern0_2_32" patternContentUnits="objectBoundingBox" width="1" height="1">
        <use xlink:href="#image0_2_32" transform="matrix(0.00444444 0 0 0.00584229 0 -0.157258)"/>
        </pattern>
        <image id="image0_2_32" width="225" height="225" xlink:href="data:image/png;base64,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"/>
        </defs>
        </svg>
        <h2>New Products Arrival</h2>
    </div>
    <div class="wrp-gp">
    <x-product id="123" image="abc" title="Cat food" description="great" price="1000" longdescription="eat-fast eat-fat"/>
    <x-product id="123" image="abc" title="Cat food" description="great" price="1000" longdescription="eat-fast eat-fat"/>
    <x-product id="123" image="abc" title="Cat food" description="great" price="1000" longdescription="eat-fast eat-fat"/>
    <x-product id="123" image="abc" title="Cat food" description="great" price="1000" longdescription="eat-fast eat-fat"/>
    </div>
</div>
</body>

</html>