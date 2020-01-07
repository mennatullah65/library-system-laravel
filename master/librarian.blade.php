<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Librarian Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=ABeeZee' rel='stylesheet'>
    <link rel="stylesheet" href="fontawesome-free-5.11.2-web/css/all.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>
<style>
.sm1 , .sm2 , .sm3 , .sm4{
    color:white; 
    font-size:30px;
    width:50px;
    cursor:pointer;
}
.sm1:hover{
    color:rgb(214, 39, 39); 
}
.sm2:hover{
    color:rgb(75, 78, 116); 
}
.sm3:hover{
    color:rgb(197, 83, 159); 
}
.sm4:hover{
    color:rgb(92, 186, 202); 
}
.tmp{
    font-size:20px;
    background-color: blanchedalmond;
    width:180px;
    display:inline-block;
    margin-right:10px;
    margin-top:5px;
}
.contactus{
    margin-top:50px;
    margin-left:35%;
    background-color: rgb(255, 245, 158);
    width:400px;
    height:500px;
}
.contactusForm{
    margin-top:10px;
    position:absolute;
}
.pContactus{
    font-size:20px;
    color:black;
    text-decoration: underline;
    margin-left: 130px;
    font-family:'Aclonica';
}
::-webkit-input-placeholder {
    text-align: center;
    font-size:15px;
    color:gray;
}
.inputtext{
    margin-bottom:20px;
    float:left;
    display:block;
    margin-left:20px;
    width:350px;
    height:30px;
    font-family:'ABeeZee';
}
.text_area{
    margin-left:20px;
    width:350px;
    overflow:auto;
    height:200px;
    font-family:'ABeeZee';
}

#btn-send{
    margin-top:15px;
    margin-left:170px;
    color:white;
    background-color: cadetblue;
    font-size:18px;
    padding:5px;
    font-family:'ABeeZee';
}
body{
    margin:0;
    padding:0;
}
html{
    margin:0;
    padding:0;
}
</style>
</head>
<body>
<!-- header -->
<header>
@include ('master.headerLibrarian')
</header>

@if(count($errors)>0)
@foreach($errors->all() as $err)
<div style="width:300px" class="alert alert-danger">
{{$err}}
</div>
@endforeach
@endif

@yield('content')

<!-- footer -->
<footer>
@include ('master.footer')
</footer>
    
</body>
</html>