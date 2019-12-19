<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Admission Form</title>
</head>
<body>
    <div id="content-area">
        <h2 style="text-align:center;">Admission Form</h2>
        <div id="form-areaadm">
            <form>
                <fieldset>
                    <legend>General Profile</legend> 
                    <table id="adf">
                        <tr>
                            <td>
                                <Label for="s_name">Student Name:</Label>
                                <input type="text" name="s_name" id="sname">
                            </td>
                            <td>
                                <Label for="f_name">Father Name:</Label>
                                <input type="text" name="f_name" id="sfname">
                            </td>
                            <td>
                                <Label for="m_name">Mother Name:</Label>
                                <input type="text" name="m_name" id="sfname">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <Label for="s_dob">Date of Birth:</Label>
                                <input type="date" name="s_dob" id="dob">
                            </td>
                            <td>
                                <Label for="s_UID">Aadhar No.:</Label>
                                <input type="text" maxlength="12" name="s_UID" id="sUID">
                            </td>
                            <td>
                                <Label for="s_w">Weight(in KG.) .:</Label>
                                <input type="number" name="s_w" id="swght">    
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <Label for="s_h">Height(in cm.):</Label>
                                <input type="number" name="s_h" id="shgt">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="s_caste">Caste:</label>
                                <select name="s_caste" id="scaste">
                                    <option value = "g">General</option>
                                    <option value = "bc">BC</option>
                                    <option value = "obc">OBC</option>
                                    <option value = "sct">SC/ST</option>
                                </select>
                            </td>
                            <td>
                                <label for="s_rel">Religion:</label>
                                <select name="s_rel" id="srel">
                                    <option value = "s">Sikh</option>
                                    <option value = "h">Hindu</option>
                                    <option value = "m">Muslim</option>
                                    <option value = "ch">Christian</option>
                                </select>    
                            
                            </td>
                            <td>
                                <label for="sclass">Class in which admission is sought:</label>
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
                        </tr>
                    </table>
                </fieldset>
                <br>
                <br>
                <fieldset>
                    <legend>Parents Profile:</legend>
                    <table id="adf">
                        <tr>
                            <td>
                                <label for="f_ocp">Father`s Occupation:</label>
                                <input type="text" name="f_ocp" id="focp">
                            </td>
                            <td>
                                <label for="f_mob">Father`s Mobile No:</label>
                                <input type="number" name="f_ocp" id="fnum">
                            </td>
                            <td>
                                <label for="f_icm">Father`s Income (Monthly):</label>
                                <input type="number" name="f_icm" id="ficm">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="m_ocp">Mother`s Occupation:</label>
                                <input type="text" name="m_ocp" id="mocp">
                            </td>
                            <td>
                                <label for="m_mob">Father`s Mobile No:</label>
                                <input type="number" name="m_ocp" id="mnum">
                            </td>
                            <td>
                                <label for="m_icm">Mother`s Income (Monthly):</label>
                                <input type="number" name="m_icm" id="micm">
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <br>
                <br>
                <fieldset>
                    <legend>Address Particulars:</legend>
                    <table id="adf">
                        <tr>
                            <td>
                                <label for="s_add">Address:</label>
                                <input type="text" name="s_add" id="sadd">
                            </td>
                            <td>
                                <label for="a_ward">Ward No.:</label>
                                <input type="text" name="a_ward" id="award">
                            </td>
                            <td>
                                <label for="a_pin">Pin Code:</label>
                                <input type="text" name="a_pin" id="apin">
                            </td>
                        </tr>
                        
                    </table>
                </fieldset>
                <br>
                <br>
                <input type="button" value="Enroll Now">
            </form>
        </div>
    </div>
</body>
</html>