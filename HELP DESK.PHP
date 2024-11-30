<?php
if (isset($_POST['submit-feedback'])) {
    $applicantid = $_POST['applicantid'];
    $rate = $_POST['rate'];
    $message = $_POST['message'];
    require_once './constants/feedback.func.php';
    require_once './constants/db.php';
    if (empty($applicantid)) {
        echo "<script>alert('Applicant ID is required!')</script>";
    } else if (empty($rate)) {
        echo "<script>alert('Rating is required!')</script>";
    } else if (empty($message)) {
        echo "<script>alert('Message is required!')</script>";
    } else {
        $res = insertFeedback($conn, $applicantid, $rate, $message);
        if ($res) {
            header("Location: ./feedback.php");
        } else {
            echo "<script>alert('Failed to submit feedback!')</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
     <link rel ="stylesheet"  href="stylesf.css?v=1">
    <link rel="stylesheet" href="stylesf.css?v=1">
</head>

<body>
    <div class="container">
        <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
            <div >
                <label style="font-size:40px; text-align:center; padding-top:15px ;" for="feedback">Feed Back</label>

            <div>
                <label style="font-size:40px; text-align:center; padding-top:15px ;"> Feed Back</label>
                <label for="applicantid">Applicant ID</label>
                <input type="text" class="form-control" id="applicantid" name="applicantid"
                    placeholder="Enter applicant ID">
            </div>
            <div id="rating"
                style="display:flex; flex-direction: row; justify-content: space-evenly;"></div>
            <label>Rating</label>
            <div id="rating" class="star">
            </div>
            <input type="number" id="rate" name="rate" hidden>
            <div>
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="10" name="message"
                <textarea class="form-control" id="message" rows="5" name="message"
                    placeholder="Enter message"></textarea>
            </div>
            <button   type="submit" class="btn btn-primary" name="submit-feedback">Submit</button>
            <button type="submit" class="btn btn-primary" name="submit-feedback">Submit</button>
        </form>
          <!--click star javascript-->
        <!--click star javascript-->
        <script>
            var ele = document.getElementById("rating");
            var rateval = document.getElementById("rate");
            for (i = 1; i <= 5; i++) {
                ele.innerHTML += `<label for=\"rate${i}\" onclick=\"onRateSet(${i})\"> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-star\" viewBox=\"0 0 576 512\">${getStar(true)}</svg></label>`;
                ele.innerHTML += `<label for=\"rate${i}\" onclick=\"onRateSet(${i})\"> <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" fill=\"currentColor\" class=\"bi bi-star\" viewBox=\"0 0 576 512\">${getStar(true)}</svg></label>`;
            }

            function getStar(dark) {
@@ -69,7 +69,7 @@ function onRateSet(v) {
                console.log(v);
                ele.innerHTML = "";
                for (i = 1; i <= 5; i++) {
                    ele.innerHTML += `<label for=\"rate${i}\" onclick=\"onRateSet(${i})\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-star\" viewBox=\"0 0 576 512\">${getStar(v < i)}</svg></label>`;
                    ele.innerHTML += `<label for=\"rate${i}\" onclick=\"onRateSet(${i})\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"25\" height=\"25\" fill=\"currentColor\" class=\"bi bi-star\" viewBox=\"0 0 576 512\">${getStar(v < i)}</svg></label>`;
                }
            }