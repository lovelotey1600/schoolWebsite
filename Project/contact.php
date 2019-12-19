<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <div id="header"> 
            <div id="top-info">
                <p style="text-align: right;">Contact No.:</p>
            </div>
            <div id="logo"></div>
            <div id="nav-bar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="studentprofile.php">Student Profile</a></li>
                    <li><a href="admission.php">Admissions</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
        <div id="content-area">
            <div id="contact-col">
                <form id="contact" action="">
                    
                        <p>
                        In case you have any query reagrding admission or about school, you could post your queries or questions below, we would get to you as soon as we could.
                        </p>
                        
                            <label for="cname">Name:</label><br>
                            <input type="text" name="cname"><br>
                            <label for="cmob">Mobile No:</label><br>
                            <input type="number" name="cmob"><br>
                            <label for="cmail">Email:</label><br>
                            <input type="email" name="cmail"><br>
                            <label for="add">Enter your Question</label><br>
                            <textarea name="add" rows="20" cols="30"></textarea><br>
                            <input type="submit">
                </form>
            </div>
        </div>
        <div id="footer"></div>
    </div>
    
</body>
</html>

