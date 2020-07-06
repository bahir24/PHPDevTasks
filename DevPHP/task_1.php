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
                    <h1 class="display-4">PHP task #1</h1>
                    <p class="lead">Check whether a date in UNIX TIMESTAMP format is a weekend or not</p>
                </div>
            </div>
        </header>   
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Date to check</th>
                    <th scope="col">UNIX TIMESTAMP format</th>
                    <th scope="col" style="min-width: 300px;">Result</th>
                    <th scope="col">Expected result</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>
                        <?php                                                 
                        $dayTimestamp = 24*60*60;
                        $todayDate = time();
                        $todayNumDayWeek = date('N', $todayDate);
                        function isWeekend($dayToHandle){
                            $weekDay = date('N', $dayToHandle);
                            if($weekDay < 6){
                                echo 'WeekDay';
                            } else {
                                echo 'Weekend';
                            };
                        };
                        echo date('Y-m-d l', $todayDate);
                        ?>
                    </td>
                    <td>
                        <?php                        
                        echo $todayDate;
                        ?>
                    </td>
                    <td style="color: red">
                        <?php
                            isWeekend($todayDate);
                        ?>
                    </td>
                    <td>Today</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>
                        <?php                            
                            // $nextSaturday = $todayNumDayWeek < 6 ? $todayDate + (5 - $todayNumDayWeek)*$dayTimestamp : $todayDate + ()
                            if($todayNumDayWeek < 6){
                                $nextSaturday = $todayDate + (6 - $todayNumDayWeek)*$dayTimestamp;
                            } else {
                                $nextSaturday = $todayDate + (7 - $todayNumDayWeek)*$dayTimestamp + 6*$dayTimestamp;
                            }
                            echo date('Y-m-d l', $nextSaturday);
                        ?>
                    </td>
                    <td>
                        <?php 
                            echo $nextSaturday;
                        ?>
                    </td>
                    <td style="color: red">
                        <?php 
                            isWeekend($nextSaturday);
                        ?>
                    </td>
                    <td>Next saturday</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>
                        <?php
                            if($todayNumDayWeek == 1){
                                $lastMonday = $todayDate - $dayTimestamp * 7;
                            } else {
                                $lastMonday = $todayDate - ($todayNumDayWeek - 1)*$dayTimestamp;
                            }
                            echo date('Y-m-d l', $lastMonday);
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $lastMonday;                        
                        ?>
                    </td>
                    <td style="color: red">
                        <?php
                            isWeekend($lastMonday);
                        ?>
                    </td>
                    <td>Last monday</td>
                </tr>         
            </tbody>
        </table>        
    </div>
    <script src="scripts/task_1.js"></script>
</body>

</html>