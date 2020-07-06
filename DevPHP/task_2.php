<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header class="text-center">
            <div class="jumbotron">
                <div class="container">
                    <h1 class="display-4">PHP task #2</h1>
                    <p class="lead">Write a PHP script, which will return the name of the file from string like 'xyz://www.example.com/public_html/index.php?x=45&r=mmm'</p>
                </div>
            </div>
        </header>   
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">String to explode</th>
                    <th scope="col">URL parts</th>
                    <th scope="col" style="min-width: 200px;">Result</th>
                    <th scope="col">Expected result</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <?php                                                 
                            $string_1 = 'xyz://www.example.com/public_html/index.php?x=45&r=mmm';
                            echo $string_1;
                            function explodeURL($urlToHandle, bool $dataToReturn = true){
                                $arrResultParts = [];
                                $arrResult = explode('://', $urlToHandle);
                                $arrResultParts[] = $arrResult[0];
                                while($arrResult[1]){
                                    $arrResult = explode('/', $arrResult[1] ,2);
                                    $arrResultParts[] = explode('?', $arrResult[0], 2)[0];
                                }   
                                $arrResult = explode('?', $arrResult[0], 2);
                                $resultString = $arrResult[0];
                                if($arrResult[1]){
                                    $arrResultParts[] = $arrResult[1];
                                }
                                
                                if($dataToReturn){
                                    echo $resultString;
                                } else {
                                    foreach($arrResultParts as $partNumber => $urlPart){
                                        echo $partNumber. ') ' .$urlPart;
                                        echo '<br>';
                                    }
                                }                                
                            }
                        ?>
                    </td>
                    <td>
                        <?php
                            explodeURL($string_1, 0);
                        ?>
                    </td>
                    <td style="color: red">
                        <?php
                            explodeURL($string_1);
                        ?>
                    </td>
                    <td>index.php</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>
                        <?php                            
                            $string_2 = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                            echo $string_2;
                        ?>
                    </td>
                    <td>
                        <?php 
                            explodeURL($string_2, 0);
                        ?>
                    </td>
                    <td style="color: red">
                        <?php 
                            explodeURL($string_2);
                        ?>
                    </td>
                    <td>task_2.php</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>
                        <?php
                            $string_3 = 'https://github.com/bahir24/PHPDevTasks/tree/master/DevPHP';
                            echo $string_3;
                        ?>
                    </td>
                    <td>
                        <?php
                                 explodeURL($string_3, 0);                 
                        ?>
                    </td>
                    <td style="color: red">
                        <?php
                            explodeURL($string_3);                 
                        ?>
                    </td>
                    <td>DevPHP</td>
                </tr>         
            </tbody>
        </table>        
    </div>
    <script src="scripts/task_1.js"></script>
</body>

</html>