<!-- # control structures(if /else /elseif /else if) -->
<!-- $score=95;
        if ($score>90){
            echo '<strong>excellent</strong>';
            if ($score>=95){
                echo '<pre>';
                echo 'near 100';
            }
        }elseif ($score>80){
        echo 'good';
            if ($score>=85){
                echo '<pre>';
                echo 'near 90';
            }
        }elseif ($score>60){
            echo 'you can better';
            if ($score>=65){
                echo '<pre>';
                echo 'near 70';
            }
        }else{
            echo 'not good';
        }
        ?> -->
<html>
    <head>
    </head>
    <body>
        <?php
        $score=5;
        if ($score>90): ?>
            <strong>excellent</strong>
        <?php elseif ($score>80):?>
            <strong>good</strong>
        <?php elseif ($score>60):?>
            <strong style="color:red">you can better</strong>
        <?php else: ?>
            <strong style="color:green">not good</strong>
        
        <?php endif ?>
    </body>
</html>

