<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web oder</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link type="text/css" rel="stylesheet" href="css/syle.css">
    <script language="javascript" src="javascript/script.js"></script>
</head>
<body>
    
<header>
    
    <a href="" class="logo"> <i class="fas-fa-untensils"></i>resto</a>

    <nav class="navbar">
        <a class="active" href="#home">home</a>
        <a href="#dishes">dishes</a>
        <a href="#about">about</a>      
        <a href="#menu">menu</a>
        <a href="#review">review</a>
        <a href="#order">order</a>
    </nav>
    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
    </div>
    <div><button id="login">Đăng nhập </button>  <button id="singin"> Đăng kí</button></div>
</header>











































<!--phần scrip -->
<script src="scrip.js"></script>
<script>
    var button= document.getElementById('login');
    button.onclick = function(){
        location.href="login.php";
    };
    var button= document.getElementById('singin');
    button.onclick = function(){
       location.href="singin.php";
    };
</script>
</body>
</html>