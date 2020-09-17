<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Search</title>
    <style>
        p {
            border: 1px solid black;
        }

        .container {
            margin-top: 50px;
        }
    </style>
</head>

<body>

    <div class="container">
        <form>
            <div class="form-group">
                <label for="List">List</label>
                <input type="text" pattern="[0-9,]+" name="List" id="List" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Key">ค้นหา</label>
                <input type="text" pattern="[0-9]+" name="Key" id="Key" class="form-control" required>
                <button name="submit" type="submit" value="submit" class="btn btn-primary btn-block">ค้นหา</button>
            </div>
            <div class="form-group">
                <label for="SearchSelect">ประเภทค้นหา</label>
                <select class="form-control" name="SearchSelect" id="SearchSelect">
                    <option value="Linear">Linear Search</option>
                    <option value="Binary">Binary Search</option>
                    <option value="Bubble">Bubble Search</option>
                </select>
            </div>

            <?php
            if (isset($_GET["submit"])) {
                echo "
                <label>ผลลัพธ์</label>
                <p class=\"text-center text-break\">";



                $list = $_GET['List'];
                $arr = explode(",", $list);
                $key = $_GET['Key'];
                $search = $_GET['SearchSelect'];
                $j = 0;
                $notfound = true;
                echo "List : [ $list ]<br>";
                // print_r($arr);
                echo "Search : $key<br>";
                echo "Result :::<br>";



                switch ($search) {



                    case "Linear":
                        // echo "Linear";
                        for ($i = 0; $i < count($arr) and $notfound; $i++) {
                            $j++;
                            if ($arr[$i] == $key) {
                                print "Round : $j ===> $key == $arr[$i] found !!<br>";
                                $notfound = false;
                            } else {
                                print "Round : $j ===> $key != $arr[$i]<br>";
                            }
                        }
                        if ($notfound) {
                            print "Notfound !!<br>";
                        }
                        break;



                    case "Binary":
                        // echo "Binary";
                        sort($arr);
                        $high = count($arr) - 1;
                        $low = 0;
                        $j = 0;
                        $notfound = true;
                        while ($low <= $high and $notfound) {
                            $j++;
                            // compute middle index 
                            $mid = floor(($low + $high) / 2);

                            // element found at mid 
                            if ($arr[$mid] == $key) {
                                print "Round : $j ===> $key == $arr[$mid] found !!<br>";
                                $notfound = false;
                            } else {
                                print "Round : $j ===> $key != $arr[$mid]<br>";
                            }
                            if ($key < $arr[$mid]) {
                                // search the left side of the array 
                                $high = $mid - 1;
                            } else {
                                // search the right side of the array 
                                $low = $mid + 1;
                            }
                        }
                        if ($notfound) {
                            print "Notfound !!<br>";
                        }
                        break;



                    case "Bubble":
                        echo "Bubble Search";
                        break;



                    default:
                        break;
                }
                echo "</p>";
            }
            ?>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>