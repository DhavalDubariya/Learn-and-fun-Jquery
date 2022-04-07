<!-- <?php

        // Function to Upload file and auto-increment if file already
        function tc_file_upload($file_info)
        {

            // Get file/image name (with extension)
            $file_name_complete =  $file_info['name'];

            // Extract file extension
            $extension = pathinfo($file_name_complete, PATHINFO_EXTENSION);

            // Extract file name without extension
            $file_name = pathinfo($file_name_complete, PATHINFO_FILENAME);

            // Temp file location
            $file_temp_location =  $file_info['tmp_name'];

            // Save an original file name variable to track while renaming if file already exists
            $file_name_original = $file_name;

            // Increment file name by 1
            $num = 1;

            /**
             * Check if the same file name already exists in the upload folder,
             * append increment number to the original filename
             **/
            while (file_exists("files/" . $file_name . "." . $extension)) {
                $file_name = (string) $file_name_original . $num;
                $file_name_complete = $file_name . "." . $extension;
                $num++;
            }

            // Upload file in upload folder
            $file_target_location = "files/" . $file_name_complete;
            $file_upload_status = move_uploaded_file($file_temp_location, $file_target_location);

            // if ($file_upload_status == true) {
            //     //echo "Congratulations. File has been uploaded to: $file_target_location";
            //     return $file_name_complete;
            // } else {
            //     // echo "Error. File uploading failed! Check if 'upload' folder exists with proper permission and Try again.";
            //     // print_r(error_get_last());
            //     return false;
            // }
        }

        if (isset($_POST['submit'])) {

            // Check if file is selected to upload, else show error
            if (!empty($_FILES['user_file']['name'])) {
                $file_path = tc_file_upload($_FILES['user_file']);
                echo "<p>File uploaded: $file_path <p>";
            } else {
                echo "<p>No file found! Please upload a file<p>";
            }
        }
        ?>

<!DOCTYPE html>
<html>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        Upload File: <input type="file" name="user_file" required />
        <input type="submit" name="submit">
    </form>
</body>

</html> -->
<!-- 
<!DOCTYPE html>
<html>

<head>
    <style type="text/css">
        .context-menu {
            position: absolute;
            text-align: center;
            background: lightgray;
            border: 1px solid black;
        }

        .context-menu ul {
            padding: 0px;
            margin: 0px;
            min-width: 150px;
            list-style: none;
        }

        .context-menu ul li {
            padding-bottom: 7px;
            padding-top: 7px;
            border: 1px solid black;
        }

        .context-menu ul li a {
            text-decoration: none;
            color: black;
        }

        .context-menu ul li:hover {
            background: darkgray;
        }
    </style>

</head>

<body>
    <h1 style="text-align: center;">
        Welcome to GeeksforGeeks.
    </h1>
    <h1 style="text-align: center;">
        Hi, We are creating a
        custom context menu here.
    </h1>

    <div id="contextMenu" class="context-menu" style="display:none">
        <ul>
            <li><a href="#">Element-1</a></li>
            <li><a href="#">Element-2</a></li>
            <li><a href="#">Element-3</a></li>
            <li><a href="#">Element-4</a></li>
            <li><a href="#">Element-5</a></li>
            <li><a href="#">Element-6</a></li>
            <li><a href="#">Element-7</a></li>
        </ul>
    </div>

    <script>
        document.onclick = hideMenu;
        document.oncontextmenu = rightClick;

        function hideMenu() {
            document.getElementById(
                "contextMenu").style.display = "none"
        }

        function rightClick(e) {
            e.preventDefault();

            if (document.getElementById(
                    "contextMenu").style.display == "block")
                hideMenu();
            else {
                var menu = document
                    .getElementById("contextMenu")

                menu.style.display = 'block';
                menu.style.left = e.pageX + "px";
                menu.style.top = e.pageY + "px";
            }
        }
    </script>
</body>

</html> -->



<?php

echo copy("test.php", "test_1.php");
?>