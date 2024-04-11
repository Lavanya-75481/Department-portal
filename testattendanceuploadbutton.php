<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Student Marks</title>
    <link rel="stylesheet" href="facuploadattendance.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            text-align: center;
            color: white;
        }
        #custom-file-input {
            display: none;
        }
        #custom-file-label {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            display: inline-block;
        }
        #custom-file-label:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="sidebar"> 
        <div>
            <ul>
                <li>
                    <div class="logo-text-container">
                        <img src="images/rmkcet1.png" alt="" class="imh1">
                        
                    </div>
                </li>
                <li>
                    <div class="logo-text-container">
                        <img src="images/homelogo1.png" alt="" class="imh">
                        <a href="web.php" class="logo-text">Home</a>
                    </div>
                </li>
                <li>
                    <div class="logo-text-container">
                        <img src="images/back.png" alt="" class="imh">
                        <a href="facultywelcome.php" class="logo-text">Back</a>
                    </div>
                </li>
                <li>
                    <div class="logo-text-container">
                        <img src="images/logout1.png" alt="" class="imh">
                        <a href="facultylogin.php" class="logo-text">Logout</a>
                    </div>
                </li>
            </ul>    
        </div>
    </div>
    <div class="container">
    <h2>Upload Student Attendance</h2>
        <form action="testattendanceupload.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="batch">Select Batch:</label><br>
            <select id="batch" name="batch">
                <option value="testmarkbatch2020_2024">2020-2024</option>
                <option value="testmarkbatch2021_2025">2021-2025</option>
                <option value="testmarkbatch2022_2026">2022-2026</option>
                <option value="testmarkbatch2022_2026">2023-2027</option>
            </select>
            <br>
        </div>
        
        
        <br>
        <div>
            <label for="sem">Select Semester:</label><br>
            <select id="sem" name="sem">
                <option value="1">Semester 1</option>
                <option value="2">Semester 2</option>
                <option value="3">Semester 3</option>
                <option value="4">Semester 4</option>
                <option value="5">Semester 5</option>
                <option value="6">Semester 6</option>
                <option value="7">Semester 7</option>
                <option value="8">Semester 8</option>
            </select>
        </div>
        
        <br>
        <div>
        <label>Enter Year:</label><br>
            <input type = "text" name = "year" required>
        </div>


        <br>

            <label for="custom-file-input" id="custom-file-label">Choose Excel File</label>
            <input type="file" id="custom-file-input" name="file" accept=".xls,.xlsx">
            <br><br>
            <input type="submit" value="Upload" name="submit">
        </form>
    </div>


    <script>
        document.getElementById("custom-file-label").addEventListener("click", function() 
        {
            document.getElementById("custom-file-input").click();
        });
    </script>
</body>
</html>