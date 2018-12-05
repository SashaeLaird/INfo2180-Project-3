<?php
session_start();
if(!$_SESSION["userID"]))
{
    header("Location:login.html")
}
?>

<-- <!DOCTYPE html>-->
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+SC" rel="stylesheet">   

        <!-- CSS link -->
        <link rel="stylesheet" type="text/css" href="style.css">

        <!-- JSCRIPT/JQUERY -->
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"    type="text/javascript"></script>
        <script src="" type="text/javascript"></script>

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

        <title>HireMe</title>

    </head>
    <body>
    <!-- HEADER -->
    <header class="header">
        <h1>HireMe</h1>
    </header>

    <section>
        <!-- NAVBAR -->
        <nav class="nav ">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <i class="fas fa-home icon"></i>
                    <a href="#">Home</a>
                </li>
                <li class="nav-item">
                    <i class="fas fa-user-plus icon"></i>
                    <a href="#">Add User</a>
                </li>
                <li class="nav-item">
                    <i class="fas fa-edit icon"></i>
                    <a href="#">New Job</a>
                </li>
                <li class="nav-item">
                    <i class="fas fa-power-off icon"></i>
                    <a href="#">Logout</a>
                </li>
            </ul>
        </nav>

        <!-- MAIN CONTENT -->
        <div class="main">
            <div class="heading">
                <h1 class="title">DashBoard</h1> 
                <a href="#" type="submit" class="green-btn btn">Post a Job</a>
            </div>

            <div>
                <h2 class="heading2"><strong>Avaliable Jobs</strong></h2>
                <table>
                    <tr class="table-heading">
                        <th><strong>Company</strong></th>
                        <th><strong>Job Title</strong></th>
                        <th><strong>Category</strong></th>
                        <th><strong>Date</strong></th>
                    </tr>
                    <tr>
                        <td><strong>Jamaica Gleaner</strong></td>
                        <td class="blue">Product Marketing Manager</td>
                        <td>Sales and Marketing</td>
                        <td>
                            <h5 class="date">November 3, 2018</h5>
                            <h5 class="new"> New</h5>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>UWI - MITS</strong></td>
                        <td class="blue">Software Engineer</td>
                        <td>Programming</td>
                        <td> 
                            <h5 class="date">November 2, 2018</h5>
                            <h5 class="new"> New</h5>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>NCB</strong></td>
                        <td class="blue">Business Analyst - Scrum Master</td>
                        <td>Business and Management</td>
                        <td>November 1, 2018</td>
                    </tr>
                    <tr>
                        <td><strong>Jamaica Yellow Pages</strong></td>
                        <td class="blue">UX/UI Designer</td>
                        <td>Design</td>
                        <td>October 20, 2018</td>
                    </tr>
                    <tr>
                        <td><strong>UWI - Bursary</strong></td>
                        <td class="blue"> Director Customer Support</td>
                        <td>Customer Support</td>
                        <td>October 20, 2018</td>
                    </tr>
                    <tr>
                        <td><strong>Sagicor Bank</strong></td>
                        <td class="blue">Senior Systems Engineer</td>
                        <td>DevOps and System </td>
                        <td>October 20, 2018</td>
                    </tr>
                </table>

                <table>
                    <tr class="table-heading">
                        <th><strong>Company</strong></th>
                        <th><strong>Job Title</strong></th>
                        <th><strong>Category</strong></th>
                        <th><strong>Date Applied</strong></th>
                    </tr>

                    <tr>
                        <td><strong>Jamaica Yellow Pages</strong></td>
                        <td class="blue">UX/UI Designer</td>
                        <td>Design</td>
                        <td>October 21, 2018</td>
                    </tr>
                    <tr>
                        <td><strong>Basecamp</strong></td>
                        <td class="blue">Software Engineer</td>
                        <td>Programming</td>
                        <td>May 5, 2018</td>
                    </tr>
                </table>
            </div>
        </section>
    </body>
</html>