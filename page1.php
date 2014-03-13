<!DOCTYPE html>

<html lang="eng">

    <head>

        <title>Littlejohn, Robert CS 3140</title>
        <meta charset="utf-8"/>
        <meta name="title" content="Lab 11"/>
        <meta name="author" content="Robert Littlejohn"/>
        <meta name="description" content=""/>
        <meta name="keywords" content="Lab 11 CS 3140"/>

        <link href="css/style.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>
        <div id="pageContent">
            <div id="heading">
                <h1>Robert Littlejohn, Lab#11</h1>
            </div>
            <nav class="navigation">
                <ul>
                    <li class="active"><a href="page1.php">Page 1</a></li>
                    <li><a href="page2.php">Page 2</a></li>
                    <li><a href="page3.php">Page 3</a></li>
                </ul>
            </nav>
            <div id="leftContent">
                <div class="centerTablePage1">
                    <?php
                    
                        echo "<table><tr><th> Number </th><th> Square </th><th> Cube </th></tr>";
                            
                        for($i = 5; $i < 16; $i++)
                        {
                            echo "<tr>";
                            echo "<td>" . $i . "</td>";
                            echo "<td>" . pow($i, 2) . "</td>";
                            echo "<td>" . pow($i, 3) . "</td>";
                            echo "</tr>";
                        }
                        
                        echo "</table>";
                    
                    ?>
                </div>
            </div>
            <div id="rightContent">
                <img src="images/ohio.jpg" alt="Ohio_Centennial_Barn" class="centerImage"/>
                <p>Ohio Barn!</p>
                <p>There is a field.</p>
                <p>The barn is white.</p>
                <p>It has some writing on it.</p>
                
            </div>
            <div id="footer">
                <p>Copywright&copy; 2013 - Robert Littlejohn</p>
            </div>
        </div>
    </body>

</html>