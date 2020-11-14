<?php
include ('head.html');
?>



<body>
<div class="container" id="bg">
    <div class="jumbotron">
        <h5> <a href="request.php"> Admin page<i class="material-icons">favorite</i></a> </h5>
        <h3 class="display-4">Welcome to my guestbook page!</h3>

    </div>
<form id="guestbookform" method="post" action="confirmation.php">

    <!-- Contact info -->
    <fieldset class="form-group border p-2">
        <legend>Contact Info</legend>

        <div class="form-group">
            <label for="fname">First Name</label>
            <input type="text" class="form-control" id="fname" name="fname">
            <span class="err" id="errFname"></span>
        </div>
        <div class="form-group">
            <label for="lname">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname">
            <span class="err" id="errLname"></span>
        </div>
        <div class="form-group">
            <label for="jtitle">Job title</label>
            <input type="text" class="form-control" id="jtitle" name="jtitle">
        </div>
        <div class="form-group">
            <label for="company">Company</label>
            <input type="text" class="form-control" id="company" name="company">
        </div>
        <div class="form-group">
            <label for="linkedin">LinkedIn URL</label>
            <input type="text" class="form-control" id="linkedin" name="linkedin">
            <span class="err" id="errLinkedin"></span>
        </div>
        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="text" class="form-control" id="email" name="email">
            <span class="err" id="errEmail"></span>
        </div>
    </fieldset>
    <!-- how we meet -->
    <fieldset class="form-group border p-2">
        <legend>How we meet</legend>
        <select class="form-control" id="meet" name="meet" >
            <option value='none'>How did we meet?</option>
            <option value='college'>Green River College</option>
            <option value='meetup'>Meet Up</option>
            <option value='jobfair'>Job Fair</option>
            <option id="other" value='other'>Other</option>


        </select>
        <span class="err" id="errMeet"></span>
        <br>
        <input type="text" class="form-control d-none" id="otherInfo" name='otherInfo'  placeholder="please specify....">

        <span class="err" id="errothers"></span>


        <div class="form-group">
            <br>
            <label for="comment">Message</label>
            <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>

    </fieldset>

    <!-- mailing -->
    <fieldset class="form-group border p-2">
        <legend>Mailing List</legend>
        <div class="checkbox" >
            <label><input type="checkbox" value="" id="checkbox">Please add me to your mailing list</label>
        </div>
        <div class ="form-group d-none" id="mailInfo">
            <br>
            <p>Please choose an email option</p>
        <label class="radio-inline">
                <input type="radio" name="optradio" checked>HTML
        </label>
        <label class="radio-inline">
                <input type="radio" name="optradio">Text
        </label>
        </div>
    </fieldset>
    <!-- button submit -->
    <button type="submit" class="btn btn-success btn-lg">Submit</button>
    </form>
    </div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src = "guest.js"></script>
</body>
</html>