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
                    <li><a href="page1.php">Page 1</a></li>
                    <li class="active"><a href="page2.php">Page 2</a></li>
                    <li><a href="page3.php">Page 3</a></li>
                </ul>
            </nav>
            <div id="leftContent">
                <?php
                    $fibonacci = array();
                    
                    for($i = 0; $i < 20; $i++)
                    {
                        if($i == 0)
                        {
                            $fibonacci[$i] = 1;
                        }
                        else if($i == 1)
                        {
                            $fibonacci[$i] = $fibonacci[$i - 1] + 0;
                        }
                        else
                        {
                            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
                        }
                    }
                    
                    echo implode("<br />", $fibonacci);
                
                ?>
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