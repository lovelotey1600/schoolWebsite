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
            <div id="std-profile">
                <form action="">
                    <fieldset>
                        <legend>Serach by particulars</legend>
                        <table>
                            <tr>
                                <td>
                                    <label for="sclass">Select Class :</label>
                                    <select name="sclass" id="s_class">
                                        <option value="n">Nursery</option>
                                        <option value="lkg">L.K.G.</option>
                                        <option value="ukg">U.K.G.</option>
                                        <option value="1">1st</option>
                                        <option value="2">2nd</option>
                                        <option value="3">3rd</option>
                                        <option value="4">4th</option>
                                        <option value="5">5th</option>
                                        <option value="6">6th</option>
                                        <option value="7">7th</option>
                                        <option value="8">8th</option>
                                        <option value="9">9th</option>
                                        <option value="10">10th</option>
                                    </select>
                                </td>
                                <td>
                                    
                                    <input type="text" name="sroll" id="s_roll" placeholder="Enter Student Roll No.">
                                </td>
                                <td>
                                    <input type="button" value="Search">
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </div>
        </div>
        <div id="footer"></div>
    </div>
    
</body>
</html>

