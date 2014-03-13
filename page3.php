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
                    <li><a href="page2.php">Page 2</a></li>
                    <li class="active"><a href="page3.php">Page 3</a></li>
                </ul>
            </nav>
            <div id="leftContent">
            
                <?php     
                    $paragraph = "As Moor states, the technology involving computers is rapidly progressing. I agree with Moor that it seems that the best way to proceed with advancing technology is to set up ground rules before allowing certain technologies to become more advanced. I agree with this simply because of a television show called Chuck. It showed me that even though some technologies can have good intentions, once it becomes a mainstream or black marketable technology, it can lead to dire consequences such as downloading information into the brain through a computer program.";
                    
                    $pArray = array();
                    $uniqueWords = array();
                    
                    
                    
                    echo "<h2>Original Text:</h2>";
                    echo $paragraph;
                    
                    $pArray = explode(" ", $paragraph);
                    
                    for($i = 0; $i < sizeof($pArray); $i++)
                    {
                        $x = 0;
                        if($i == 0)
                        {
                            $uniqueWords[$i] = $pArray[$i];
                        }
                        else
                        {
                            for($j = 0; $j < sizeof($uniqueWords); $j++)
                            {
                                if($pArray[$i] == $uniqueWords[$j])
                                {
                                    $x = 1;
                                }
                            }
                            if($x == 0)
                            {
                                array_push($uniqueWords, $pArray[$i]);
                            }
                        }
                    }
                    asort($uniqueWords);
                    
                    
                    
                    echo "<br />";
                    echo "<h2>Unique Words:</h2>";
                    echo implode("-", $uniqueWords);
                
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