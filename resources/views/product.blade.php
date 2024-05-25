<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/menu.css">
    <link rel="stylesheet" href="/css/productshow.css">
</head>
<body>
<x-menu page="product"/>
<div id="s-menu">
    <a id="001"><h3 class="sec-h">ALL</h3></a>
    <a id="001" class="s-active"><h3 class="sec-h">Cat Food</h3></a>
    
    <a id="001"><h3 class="sec-h">Dog Food</h3></a>
    
    <a id="001"><h3 class="sec-h">Clothes</h3></a>
    
    <a id="001"><h3 class="sec-h">Clothes</h3></a>
    
    <a id="001"><h3 class="sec-h">Clothes</h3></a>
    <a id="001"><h3 class="sec-h">Clothes</h3></a>
</div>
<div id="main">
    <x-product id="123" image="abc" title="Cat food" description="great" price="1000" longdescription="eat-fast eat-fat"/>
    <x-product id="123" image="abc" title="Cat food" description="great" price="1000" longdescription="eat-fast eat-fat"/>
    <x-product id="123" image="abc" title="Cat food" description="great" price="1000" longdescription="eat-fast eat-fat"/>

</div>

<style>
    #main{
        background: #D9D9D9;
        display: flex;   
        flex-direction: column;
        justify-content: flex-start;
        align-items: center; 
        padding: 1em;
        margin-top:0.5em;
    }

    p{
        margin-top : 0.5em;
        margin-bottom : 0em;
        font-size: 60px;
    }

    .product{
        /* Rectangle 43 */
        padding: 0.5em;
        background: #817474;
        margin: 1em;
    }

    .f-desc{
        display: none;
    }

    #s-menu{
        display: flex;   
        flex-direction: row;
        justify-content: flex-start;
        align-items: center;
        background-color:#817474;
        overflow: auto;
        width: 100%;
    }
    .sec-h{
        padding: 0.2em;
        font-size: 50px;
    }
    .s-active{
        background: #D9D9D9;
    }
</style>
</body>
</html>