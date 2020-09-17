<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        echo "ข้อ 1<br>";
        echo "1.1 <U>ตอบ</U><br>";
        echo "<br>";
        $count = 4;
        for ($x = 0; $x < 5; $x++) {
            for ($y = 0; $y < 5; $y++) {
                if ($y >= $count){ 
                    echo "O";
                }else{
                    echo "&nbsp","&nbsp ";
                }
                
            }
            echo "<br>";
            $count--;
        }
        echo "<br>1.2 <U>ตอบ</U><br>";
        echo "<br>";
        $count = 4;
        $count2 = 5;
        for ($x = 0; $x < 5; $x++) {
            for ($y = 0; $y < $count2; $y++) {
                if ($y >= $count){ 
                    echo "O";
                }else{
                    echo "&nbsp","&nbsp ";
                }
                
            }
            echo "<br>";
            $count--;
            $count2++;
        }
        echo "<br>";
        ?>
        <?php
        echo "<br>ข้อ 2<br>";
        echo "2.1 <U>ตอบ</U> 10200<br>";
        $bath = 100;
        echo "2.2<br>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp2.2.1 <U>ตอบ</U> 200<br>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp2.2.2 <U>ตอบ</U> Average<br>";
        /*
        $score = 9; $age = 10;
        echo "You Score is : ".$score > 10 ? ($age > 10 ? "Average" : "Exceptinoal") : ($age > 10 ? "Horrible " : "Average");
        */
        ?>

        <?php
        echo "<br>ข้อ 3";
        echo "<br>3.1 <U>ตอบ</U> ";
        $data = array(
            10000 => 15000,
            15000 => 20000,
            "salary" => 30000
        );

        foreach ($data as $value) {
            if ($value < 15000){
                $value = $value +200;
            }elseif ($value  < 11000){
                $value += 200;
            }elseif ($value  < 12000){
                $value += 300;
            }
            echo "$value ";
        }
        echo "<br>3.2";
            $marks = array(
        "mohammad"=>array(
                "physics"=>35,
                "maths"=>30,

                "chemistry"=>39
            ),
            "qadir"=>array(
                "physics"=>30,
                "maths"=>32,
                "chemistry"=>29
            ),
            "zara"=>array(
                "physics"=>31,
                "maths"=>22,
                "chemistry"=>39
            )
        );
        echo "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp3.2.1 <U>ตอบ</U> ". "echo $". "marks['mohammad']['physics'];" ;
        /*echo $marks['mohammad']['physics'];*/
        echo "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp3.2.2 <U>ตอบ</U> ".
        'foreach($marks as $mark) {
            echo $mark[\'physics\']. " ".$mark[\'maths\']." ".$mark[\'chemistry\']." ";
        }';
        echo "<br>";
        ?>
        <p>ข้อ 4 <U>ตอบ</U></p>
        <style>
        .square {
        height: 200px;
        width: 240px;
        border: 2px solid;
        border-color : black;
        border-radius: 5px;
        margin: 5px;
        }
        </style>
        <table>
        <tr>
            <td><div class="square"></div></td>
            <td><div class="square"></div></td>
            <td><div class="square"></div></td>
        </tr>
        </table>
       <p>ข้อ 5</p>
        <pre>
            5.1 <U>ตอบ</U>
             <img src="Master-programmer.jpg" alt="Master-programmer" width="700" height="600">

            5.2 <U>ตอบ</U>     INSERT INTO สาขา (ชื่อสาขา, จังหวัด)
                        VALUES ('สาขาเชียงใหม่','เชียงใหม่'),('สาขาเชียงราย','เชียงราย'),('สาขาภูเก็ต','ภูเก็ต');

            5.3 <U>ตอบ</U>     DELETE FROM พนักงาน WHERE ตำแหน่ง='sale';

            5.4 <U>ตอบ</U>     UPDATE สาขา
                        SET จังหวัด='นาราธิวาส'
                        WHERE   จังหวัด='ปัตตานี';

            5.5 <U>ตอบ</U>     SELECT * FROM [พนักงาน];

            5.6 <U>ตอบ</U>     SELECT * FROM พนักงาน
                        WHERE ชื่อสาขา='สาขาระยอง' OR ชื่อสาขา='สาขากรุงเทพ';

            5.7 <U>ตอบ</U>     SELECT * FROM พนักงาน
                        WHERE ชื่อสาขา='สาขาเลย' AND ตำแหน่ง='programmer';

            5.8 <U>ตอบ</U>     SELECT ชื่อสาขา,ตำแหน่ง FROM พนักงาน;
        </pre>

            ข้อ 6 <U>ตอบ</U> มีความอยากรู้และสงสัยในการทำงานต่างๆของคอมพิวเตอร์และโปรแกรมตั้งแต่เด็กๆในสมัยก่อนชอบเล่นเกม computer<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แล้วรู้จักการ mod เกมทำให้อยากรู้คำสั่งต่างๆที่ทำให้เกมแสดงผลตามที่เราต้องการซึ่งเป็นจุดเริ่มต้นในการอยากเป็นโปรแกรมเมอร์<br> 
                           
            <br>ข้อ 7 <U>ตอบ</U> ค้นหาใน google ส่วนใหญ่จะเจอวิธีการหรือตัวอย่างปัญหาที่คล้ายๆกับที่เราเจอในเว็ป stack overflow<br> 
            <br>ข้อ 8 <U>ตอบ</U> MVC เป็น frame work ที่จะแบ่งการทำงานออกเป็น3ส่วน คือ model view controller ซึ่งแต่ละส่วนจะมีความสัมพันธ์กัน<br> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อธิบายการทำงานของแต่ละส่วน<br> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-model เป็นส่วนที่เก็บข้อมูลจากฐานข้อมูล และเตรียมข้อมูลให้เหมาะสมเพื่อรอการเรียกข้อมูลจาก controller<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-view เป็นส่วน User inerface รับข้อมูล controller เพื่อแสดงผลบางอย่างและรับข้อมูลจาก user เพื่อส่งต่อไปยัง controller<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-controller เป็นตัวกลางระหว่าง model กับ view เพื่อให้ารทำงานร่วมกันอย่างมีประสิทธิภาพ<br>

            <br>ข้อ 9 <U>ตอบ</U> จัดเก็บการเปลี่ยนแปลงของไฟล์ที่เราทำในโปรเจค มีการbackup code สามารถย้อนกลับไปดูโปรเจคเวอร์ชั่นเก่าๆได้<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;และสามารถระบุได้ว่าใครเป็นคนเพิ่มหรือแก้ไขไฟล์นั้นๆซึ่งเหมาะสำหรับการทำงานเป้นทีม<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตัวอย่างเว็ป git <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;github.com<br>  
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gitea.io<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bitbucket.org<br>
        
            <br>ข้อ 10 <U>ตอบ</U> เป็นการใช้ container จำลองสภาพแวดล้อมขึ้นมาให้สามารถรัน service ต่างๆได้โดยไม่ต้องมี host OS<br>
            <br>ข้อ 11 <U>ตอบ</U> Composer เป็นเครื่องมือ ของ PHP ใช้จัดการ library ที่ต้องการใช้ในโปรเจ็ค ลักษณะการใช้งานคือ <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ให้เราระบุ library ที่โปรเจ็คของเราต้องการไว้ในไฟล์ composer.json จากนั้น composer จะทำการติดตั้ง<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หรืออัพเดท library ที่เราต้องการให้เลย ช่วยให้เราจัดการกับ library ได้ง่ายขึ้น<br>
        <br>ข้อ 12 <U>ตอบ</U> คือการเขียน css ในรูปแบบหนึ่งโดยจะต้องเอา code ไปประมวลผลก่อนทำให้รู้จุดผิดพลาดก่อนนำไฟล์ไปใช้จริง<br>
        <br>ข้อ 13 <U>ตอบ</U> 2คน<br>
        <br>ข้อ 14 <U>ตอบ</U> ไม่เคยทำ<br>
        <br>ข้อ 15 <U>ตอบ</U> MVC framework เพราะมีการแบ่งประเภทการทำงานเป็นส่วนชัดเจนง่ายต่อการแก้ไขและยังช่วยลดการซ้ำซ้อนในการเขียนcode<br>
        <br>ข้อ 16 <U>ตอบ</U> ไม่เคยใช้ คือความเร็วในการแสดงผลข้อมูลต่างๆบนหน้าเว็ปไซต์ เป็นคุณสมบัติพื้นฐานที่ google ใช้วัดความเร็วเว็ปไซต์<br>
        <br>ข้อ 17 <U>ตอบ</U> การทำ OnPage SEO คือการทำ Search Engine Optimization บนเว็บไซต์ของเราให้ติดอันดับที่สูงขึ้นบน Google <br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เมื่อทำการค้นหาด้วยคีย์เวิร์ดที่เราต้องการ ทำได้โดยการใส่ Keyword เป้าหมายและ Keyword ที่เกี่ยวข้อง และ การเพิ่ม Backlink<br>
</body>
</html>