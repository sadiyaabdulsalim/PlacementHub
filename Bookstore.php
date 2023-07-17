<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/6.0.0/css/all.min.css">
 <title>Placement Hub</title>
 <style>
 /* Reset default styles */
 * {
 margin: 0;
 padding: 0;
 box-sizing: border-box;
 }
 body {
 font-family: Arial, sans-serif;
 }
 /* Navigation Bar */
 .navbar {
 background-color: #8fbc8f;
 color:  #8fbc8f;
 display: flex;
 justify-content: space-between;
 align-items: center;
 padding: 10px;
 }
 .navbar a {
 color: #2f4f4f;
 text-decoration: none;
 margin-right: 10px;
 }
 .navbar a.logo {
 font-size: 30px;
 font-weight: bold;
 }
 /* Main Body */
 .main-container {
 display: flex;
 flex
-direction: column;
 align
-items: center;
 gap: 20px;
 padding: 20px;
 
}
 .main {  
 display: flex;
 flex
-wrap: wrap;
 justify
-content: center;
 gap: 20px;
 
}
 .book {
 width: 200px;
 border: 1px solid #ccc;
 padding: 10px;
 text-align: center;
 
}
 .book img {
 width: 150px;
 height: 200px;
 object-fit: cover;
 }
 .main {
 display: flex;
 flex-wrap: wrap;
 justify-content: center;
 gap: 20px;
 padding: 20px;
 height: 50vh;
 width: 50vw;
 /* max
-width: 1200px; 
 max
-height: 500px;Increase the size of the flexbox container */
 margin: 0 auto; /* Center the flexbox container */
 
}
 .book {
 width: 200px;
 border: 1px solid #556b2f;
 padding: 10px;
 text
-align: center;
 flex: 1 1 200px; /* Adjust the flex item properties */
 
}
 .book img {
 width: 175px;
 height: 200px;
 object
-fit: cover;
107
 
}
 /* Search Results */
 .search
-results {
 display: none;
 
}
 .search
-container {
 display: flex;
 align
-items: center;
 margin
-top: 5px;
 padding: 10px;
 /* border: 1px solid #ccc; */
 border
-radius: 40px;
 
}
 .search
-container input[type="text"] {
 flex: 1;
 padding: 5px;
 
}
 .search
-container i {
 margin
-left: 10px;
 cursor: pointer;
 
}
 </style>
</head>
<body>
  <!-- Navigation Bar  -->
 <div class="navbar">
 <div>
 <a href="#" class="logo"><i>Placement Hub<br></i></a><br>
 <a href="loginsuccessful.php"><b>Home</b></a>
 <a href="https://www.gcoea.ac.in/?dept=12&name=Faculty"><b>Faculty</b></a>
 <a href="index.php"><b>Login</b></a>
 <a href="check.php"><b>Check </b></a>
 <a href="Search_book.php"><b>Search </b></a>
 </div>
 </div>

<div class="main">
 <div class="book">
 <img src="https://media.licdn.com/dms/image/C5603AQFinvHOXjFWkA/profile-displayphoto-shrink_800_800/0/1628011788206?e=2147483647&v=beta&t=aQVSp2LEisWRFmGhs1TrAlrJgfx6SSOliOyho6Kc8O0" alt="Abhay">
 </div>
 <div class="book">
 <img src="https://i1.rgstatic.net/ii/profile.image/1126210495090696-1645520914844_Q512/Archana-Bhade.jpg" alt="Yash">
 
</div>
 <div class="book">
 <img src="https://i1.rgstatic.net/ii/profile.image/1061784857366528-1630160645043_Q512/Kishor-Wagh-3.jpg" alt="Kunal">
 </div>
 <div class="book">
 <img src="https://i1.rgstatic.net/ii/profile.image/892863076388864-1589886554309_Q512/Kishor-Tayade.jpg" alt="Aditya">
 </div>
 <div class="book">
 <img src="data:image/jpeg;base64,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" alt="Sajeed">
 </div>
 <div class="book">
 <img src="data:image/jpeg;base64,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" alt="Sajeed">
 </div>
 <div class="book">
 <img src="https://yt3.googleusercontent.com/5kG7CieL4QfzAC4oNC7EiIkHYLUSzQaNpyu4CKNxbnknu0oSrzuyco2_GY6_-c1D2NgMv3WvvA=s900-c-k-c0x00ffffff-no-rj" alt="Tanvi">
 </div>
 </div>
</body>
</html>