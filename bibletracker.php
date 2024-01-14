<?php
    session_start();

    // Check if the user is logged in
    if (!isset($_SESSION['user_id'])) {
        // Redirect to the login page or show a login form
        header('Location: login.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <nav>
    <a id="logo">
    <div class="logo">
        <img src="./flat-color-icons_reading.png">
    </div>
    </a>


    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Select the logo element by its id
            const logo = document.getElementById("logo");

            // Add a click event listener
            logo.addEventListener("click", function () {
                // Reload the page
                location.reload();
            });

            // Call the fetchUserProgressAndSetButtons function on page load
            fetchUserProgressAndSetButtons();
        });
    
      </script>
      

    <div class="navbar">
        <a href="./logout.php">
            <p>Log Out</p>
        </a>

    </div>
    </nav>
<section id="home-section" class="">
        
        <header class="header">
            <?php
            // Connect to the database
            $pdo = new PDO('mysql:host=localhost;dbname=bible_tracker_account', 'root', '');

            // Prepare and execute the query to get the user's information
            $stmt = $pdo->prepare('SELECT * FROM users WHERE id = :id');
            $stmt->execute(['id' => $_SESSION['user_id']]);

            // Fetch the user's information
            $user = $stmt->fetch();

            // Capitalize the first letter of the user's first name
            $firstName = ucfirst(strtolower($user['first_name']));

            // Display the user's first name
            echo "Welcome back, " . $firstName . "!";
            ?>
        </header>
        


        <div class="bible-circle">
        <div class="totalPercentage" id="entireBiblePercentageElement">0%</div>
            <div>of the entire bible</div>
            
        </div>


        
            <script>
                $(document).ready(function(){
                    $("#left-circle").click(function(){
                        $("#home-section").fadeOut(300, function() {
                            $("#old-testament").fadeIn(300);
                        });
                    });
                });
            </script>


        <script>
            $(document).ready(function(){
                $("#right-circle").click(function(){
                    $("#home-section").fadeOut(300, function() {
                        $("#new-testament").fadeIn(300);
                    });
                });
            });
        </script>



        <div class="testament-circles">


    
             <div class="testament-circles left-circle" id="left-circle">
             <div class="totalPercentage2" id="oldTestamentPercentageElement2">0%</div>
                <div>old testament</div>
                
             </div>
    


            <div class="testament-circles right-circle" id="right-circle">
            <div class="totalPercentage2" id="newTestamentPercentageElement2">0%</div>
                <div>new testament</div>
                
            </div>

        </div>

</section>




<section id="old-testament" class="the-old-testament">

    <header class="header">
        Keep reading, <?php echo $firstName; ?>!
    </header>



    <div class="old-testament-large-circle">
       
    <div class="totalPercentage2" id="oldTestamentPercentageElement1">0%</div>
        <div>of the old testament</div>
        
    </div>

    <script>
        $(document).ready(function(){
            $("#btn-old-testament").click(function(){
                $("#old-testament").fadeOut(300, function() { // fade out old testament section
                    $("#home-section").fadeIn(300); // fade in home section
                });
            });
        });
    </script>

    <button id="btn-old-testament" type="button" class="back-button">Back</button>

    <div class="old-testament-book-grid">

        <div class="book-button" id="genesis-button">
            <a>
            <p>Genesis</p>
            </a>
        </div>

        <div class="book-button" id="exodus-button">
            <a>
            <p>Exodus</p>
            </a>
        </div>

        <div class="book-button" id="leviticus-button">
            <a>
            <p>Leviticus</p>
            </a>
        </div>

        <div class="book-button" id="numbers-button">
            <a>
            <p>Numbers</p>
            </a>
        </div>

        <div class="book-button" id="deuteronomy-button">
            <a>
            <p>Deuteronomy</p>
            </a>
        </div>

        <div class="book-button" id="joshua-button">
            <a>
            <p>Joshua</p>
            </a>
        </div>

        <div class="book-button" id="judges-button">
            <a>
            <p>Judges</p>
            </a>
        </div>

        <div class="book-button" id="ruth-button">
            <a>
            <p>Ruth</p>
            </a>
        </div>

        <div class="book-button" id="1samuel-button">
            <a>
            <p>1 Samuel</p>
            </a>
        </div>

        <div class="book-button" id="2samuel-button">
            <a>
            <p>2 Samuel</p>
            </a>
        </div>

        <div class="book-button" id="1kings-button">
            <a>
            <p>1 Kings</p>
            </a>
        </div>

        <div class="book-button" id="2kings-button">
            <a>
            <p>2 Kings</p>
            </a>
        </div>

        <div class="book-button" id="1chronicles-button">
            <a>
            <p>1 Chronicles</p>
            </a>
        </div>

        <div class="book-button" id="2chronicles-button">
            <a>
            <p>2 Chronicles</p>
            </a>
        </div>

        <div class="book-button" id="ezra-button">
            <a>
            <p>Ezra</p>
            </a>
        </div>

        <div class="book-button" id="nehemiah-button">
            <a>
            <p>Nehemiah</p>
            </a>
        </div>

        <div class="book-button" id="esther-button">
            <a>
            <p>Esther</p>
            </a>
        </div>

        <div class="book-button" id="job-button">
            <a>
            <p>Job</p>
            </a>
        </div>

        <div class="book-button" id="psalms-button">
            <a>
            <p>Psalms</p>
            </a>
        </div>

        <div class="book-button" id="proverbs-button">
            <a>
            <p>Proverbs</p>
            </a>
        </div>

        <div class="book-button" id="ecclesiastes-button">
            <a>
            <p>Ecclesiastes</p>
            </a>
        </div>

        <div class="book-button" id="solomon-button">
            <a>
            <p>Song of Solomon</p>
            </a>
        </div>

        <div class="book-button" id="isaiah-button">
            <a>
            <p>Isaiah</p>
            </a>
        </div>

        <div class="book-button" id="jeremiah-button">
            <a>
            <p>Jeremiah</p>
            </a>
        </div>

        <div class="book-button" id="lamentations-button">
            <a>
            <p>Lamentations</p>
            </a>
        </div>

        <div class="book-button" id="ezekiel-button">
            <a>
            <p>Ezekiel</p>
            </a>
        </div>

        <div class="book-button" id="daniel-button">
            <a>
            <p>Daniel</p>
            </a>
        </div>

        <div class="book-button" id="hosea-button">
            <a>
            <p>Hosea</p>
            </a>
        </div>

        <div class="book-button" id="joel-button">
            <a>
            <p>Joel</p>
            </a>
        </div>

        <div class="book-button" id="amos-button">
            <a>
            <p>Amos</p>
            </a>
        </div>

        <div class="book-button" id="obadiah-button">
            <a>
            <p>Obadiah</p>
            </a>
        </div>

        <div class="book-button" id="jonah-button">
            <a>
            <p>Jonah</p>
            </a>
        </div>

        <div class="book-button" id="micah-button">
            <a>
            <p>Micah</p>
            </a>
        </div>

        <div class="book-button" id="nahum-button">
            <a>
            <p>Nahum</p>
            </a>
        </div>

        <div class="book-button" id="habakkuk-button">
            <a>
            <p>Habakkuk</p>
            </a>
        </div>

        <div class="book-button" id="zephaniah-button">
            <a>
            <p>Zephaniah</p>
            </a>
        </div>

        <div class="book-button" id="haggai-button">
            <a>
            <p>Haggai</p>
            </a>
        </div>

        <div class="book-button" id="zechariah-button">
            <a>
            <p>Zechariah</p>
            </a>
        </div>

        <div class="book-button" id="malachi-button">
            <a>
            <p>Malachi</p>
            </a>
        </div>


    </div>

</section>


<section id="Genesis-Chapters" class="chapter-grid">    

    <header class="header chapter-header">
        Genesis
    </header>

    <div class="old-testament-large-circle">
    
        <div id="genesisPercentage" class="totalPercentage">0%</div>

            <p>of Genesis</p>

    </div>

    <script>
        
    </script>

    <script>
        $(document).ready(function(){
            $("#genesis-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Genesis-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#back-btn-genesis").click(function(){
                $("#Genesis-Chapters").fadeOut(300);
                $("#old-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });
    </script>
    
    <button id="back-btn-genesis" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button chapter-button" id="genesisToggleButton1" data-chapter-id="genesis1">Chapter 1</div>

        <div class="book-button chapter-button" id="genesisToggleButton2" data-chapter-id="genesis2">Chapter 2</div>

        <div class="book-button chapter-button" id="genesisToggleButton3" data-chapter-id="genesis3">Chapter 3</div>

        <div class="book-button chapter-button" id="genesisToggleButton4" data-chapter-id="genesis4">Chapter 4</div>

        <div class="book-button chapter-button" id="genesisToggleButton5" data-chapter-id="genesis5">Chapter 5</div>

        <div class="book-button chapter-button" id="genesisToggleButton6" data-chapter-id="genesis6">Chapter 6</div>

        <div class="book-button chapter-button" id="genesisToggleButton7" data-chapter-id="genesis7">Chapter 7</div>

        <div class="book-button chapter-button" id="genesisToggleButton8" data-chapter-id="genesis8">Chapter 8</div>

        <div class="book-button chapter-button" id="genesisToggleButton9" data-chapter-id="genesis9">Chapter 9</div>

        <div class="book-button chapter-button" id="genesisToggleButton10" data-chapter-id="genesis10">Chapter 10</div>

        <div class="book-button chapter-button" id="genesisToggleButton11" data-chapter-id="genesis11">Chapter 11</div>

        <div class="book-button chapter-button" id="genesisToggleButton12" data-chapter-id="genesis12">Chapter 12</div>

        <div class="book-button chapter-button" id="genesisToggleButton13" data-chapter-id="genesis13">Chapter 13</div>

        <div class="book-button chapter-button" id="genesisToggleButton14" data-chapter-id="genesis14">Chapter 14</div>

        <div class="book-button chapter-button" id="genesisToggleButton15" data-chapter-id="genesis15">Chapter 15</div>

        <div class="book-button chapter-button" id="genesisToggleButton16" data-chapter-id="genesis16">Chapter 16</div>

        <div class="book-button chapter-button" id="genesisToggleButton17" data-chapter-id="genesis17">Chapter 17</div>

        <div class="book-button chapter-button" id="genesisToggleButton18" data-chapter-id="genesis18">Chapter 18</div>

        <div class="book-button chapter-button" id="genesisToggleButton19" data-chapter-id="genesis19">Chapter 19</div>

        <div class="book-button chapter-button" id="genesisToggleButton20" data-chapter-id="genesis20">Chapter 20</div>

        <div class="book-button chapter-button" id="genesisToggleButton21" data-chapter-id="genesis21">Chapter 21</div>

        <div class="book-button chapter-button" id="genesisToggleButton22" data-chapter-id="genesis22">Chapter 22</div>

        <div class="book-button chapter-button" id="genesisToggleButton23" data-chapter-id="genesis23">Chapter 23</div>

        <div class="book-button chapter-button" id="genesisToggleButton24" data-chapter-id="genesis24">Chapter 24</div>

        <div class="book-button chapter-button" id="genesisToggleButton25" data-chapter-id="genesis25">Chapter 25</div>

        <div class="book-button chapter-button" id="genesisToggleButton26" data-chapter-id="genesis26">Chapter 26</div>

        <div class="book-button chapter-button" id="genesisToggleButton27" data-chapter-id="genesis27">Chapter 27</div>

        <div class="book-button chapter-button" id="genesisToggleButton28" data-chapter-id="genesis28">Chapter 28</div>

        <div class="book-button chapter-button" id="genesisToggleButton29" data-chapter-id="genesis29">Chapter 29</div>

        <div class="book-button chapter-button" id="genesisToggleButton30" data-chapter-id="genesis30">Chapter 30</div>

        <div class="book-button chapter-button" id="genesisToggleButton31" data-chapter-id="genesis31">Chapter 31</div>

        <div class="book-button chapter-button" id="genesisToggleButton32" data-chapter-id="genesis32">Chapter 32</div>

        <div class="book-button chapter-button" id="genesisToggleButton33" data-chapter-id="genesis33">Chapter 33</div>

        <div class="book-button chapter-button" id="genesisToggleButton34" data-chapter-id="genesis34">Chapter 34</div>

        <div class="book-button chapter-button" id="genesisToggleButton35" data-chapter-id="genesis35">Chapter 35</div>

        <div class="book-button chapter-button" id="genesisToggleButton36" data-chapter-id="genesis36">Chapter 36</div>

        <div class="book-button chapter-button" id="genesisToggleButton37" data-chapter-id="genesis37">Chapter 37</div>

        <div class="book-button chapter-button" id="genesisToggleButton38" data-chapter-id="genesis38">Chapter 38</div>

        <div class="book-button chapter-button" id="genesisToggleButton39" data-chapter-id="genesis39">Chapter 39</div>

        <div class="book-button chapter-button" id="genesisToggleButton40" data-chapter-id="genesis40">Chapter 40</div>

        <div class="book-button chapter-button" id="genesisToggleButton41" data-chapter-id="genesis41">Chapter 41</div>
        
        <div class="book-button chapter-button" id="genesisToggleButton42" data-chapter-id="genesis42">Chapter 42</div>

        <div class="book-button chapter-button" id="genesisToggleButton43" data-chapter-id="genesis43">Chapter 43</div>

        <div class="book-button chapter-button" id="genesisToggleButton44" data-chapter-id="genesis44">Chapter 44</div>

        <div class="book-button chapter-button" id="genesisToggleButton45" data-chapter-id="genesis45">Chapter 45</div>

        <div class="book-button chapter-button" id="genesisToggleButton46" data-chapter-id="genesis46">Chapter 46</div>

        <div class="book-button chapter-button" id="genesisToggleButton47" data-chapter-id="genesis47">Chapter 47</div>

        <div class="book-button chapter-button" id="genesisToggleButton48" data-chapter-id="genesis48">Chapter 48</div>

        <div class="book-button chapter-button" id="genesisToggleButton49" data-chapter-id="genesis49">Chapter 49</div>

        <div class="book-button chapter-button" id="genesisToggleButton50" data-chapter-id="genesis50">Chapter 50</div>

    
    </div>  

</section>



<section id="Exodus-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Exodus
    </header>

    <div class="progress">
        
       
        <div class="progress-text-p">of the old testament</div>
        <div class="progress-text" id="exodusPercentage">0%</div>
    </div>

    </div>

    <script>
        $(document).ready(function(){
            $("#exodus-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Exodus-Chapters").fadeIn(1000);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#back-btn-exodus").click(function(){
                $("#Exodus-Chapters").fadeOut(300);
                $("#old-testament").fadeIn(1000);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });
    </script>
    
    <button id="back-btn-exodus" type="button" class="back-button">Back</button>


    <div class="the-chapter-grid">

        
    <div class="book-button" id="exodusToggleButton1" data-chapter-id="exodus1">Chapter 1</div>

    <div class="book-button" id="exodusToggleButton2" data-chapter-id="exodus2">Chapter 2</div>

    <div class="book-button" id="exodusToggleButton3" data-chapter-id="exodus3">Chapter 3</div>

    <div class="book-button" id="exodusToggleButton4" data-chapter-id="exodus4">Chapter 4</div>

    <div class="book-button" id="exodusToggleButton5" data-chapter-id="exodus5">Chapter 5</div>

    <div class="book-button" id="exodusToggleButton6" data-chapter-id="exodus6">Chapter 6</div>

    <div class="book-button" id="exodusToggleButton7" data-chapter-id="exodus7">Chapter 7</div>

    <div class="book-button" id="exodusToggleButton8" data-chapter-id="exodus8">Chapter 8</div>

    <div class="book-button" id="exodusToggleButton9" data-chapter-id="exodus9">Chapter 9</div>

    <div class="book-button" id="exodusToggleButton10" data-chapter-id="exodus10">Chapter 10</div>

    <div class="book-button" id="exodusToggleButton11" data-chapter-id="exodus11">Chapter 11</div>

    <div class="book-button" id="exodusToggleButton12" data-chapter-id="exodus12">Chapter 12</div>

    <div class="book-button" id="exodusToggleButton13" data-chapter-id="exodus13">Chapter 13</div>

    <div class="book-button" id="exodusToggleButton14" data-chapter-id="exodus14">Chapter 14</div>

    <div class="book-button" id="exodusToggleButton15" data-chapter-id="exodus15">Chapter 15</div>

    <div class="book-button" id="exodusToggleButton16" data-chapter-id="exodus16">Chapter 16</div>

    <div class="book-button" id="exodusToggleButton17" data-chapter-id="exodus17">Chapter 17</div>

    <div class="book-button" id="exodusToggleButton18" data-chapter-id="exodus18">Chapter 18</div>

    <div class="book-button" id="exodusToggleButton19" data-chapter-id="exodus19">Chapter 19</div>

    <div class="book-button" id="exodusToggleButton20" data-chapter-id="exodus20">Chapter 20</div>

    <div class="book-button" id="exodusToggleButton21" data-chapter-id="exodus21">Chapter 21</div>

    <div class="book-button" id="exodusToggleButton22" data-chapter-id="exodus22">Chapter 22</div>

    <div class="book-button" id="exodusToggleButton23" data-chapter-id="exodus23">Chapter 23</div>

    <div class="book-button" id="exodusToggleButton24" data-chapter-id="exodus24">Chapter 24</div>

    <div class="book-button" id="exodusToggleButton25" data-chapter-id="exodus25">Chapter 25</div>

    <div class="book-button" id="exodusToggleButton26" data-chapter-id="exodus26">Chapter 26</div>

    <div class="book-button" id="exodusToggleButton27" data-chapter-id="exodus27">Chapter 27</div>

    <div class="book-button" id="exodusToggleButton28" data-chapter-id="exodus28">Chapter 28</div>

    <div class="book-button" id="exodusToggleButton29" data-chapter-id="exodus29">Chapter 29</div>

    <div class="book-button" id="exodusToggleButton30" data-chapter-id="exodus30">Chapter 30</div>

    <div class="book-button" id="exodusToggleButton31" data-chapter-id="exodus31">Chapter 31</div>

    <div class="book-button" id="exodusToggleButton32" data-chapter-id="exodus32">Chapter 32</div>

    <div class="book-button" id="exodusToggleButton33" data-chapter-id="exodus33">Chapter 33</div>

    <div class="book-button" id="exodusToggleButton34" data-chapter-id="exodus34">Chapter 34</div>

    <div class="book-button" id="exodusToggleButton35" data-chapter-id="exodus35">Chapter 35</div>

    <div class="book-button" id="exodusToggleButton36" data-chapter-id="exodus36">Chapter 36</div>

    <div class="book-button" id="exodusToggleButton37" data-chapter-id="exodus37">Chapter 37</div>

    <div class="book-button" id="exodusToggleButton38" data-chapter-id="exodus38">Chapter 38</div>

    <div class="book-button" id="exodusToggleButton39" data-chapter-id="exodus39">Chapter 39</div>

    <div class="book-button" id="exodusToggleButton40" data-chapter-id="exodus40">Chapter 40</div>

    </div>  

</section>



<section id="Leviticus-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Leviticus
    </header>
    <div>


            <p>of Leviticus</p>

    </div>

    <div class="progress">
        <svg class="progress-circle" width="300px" height="300px" xmlns="http://www.w3.org/2000/svg">
            <circle class="progress-circle-back" cx="150" cy="150" r="140"></circle>
            <circle class="progress-circle-prog leviticusprog" cx="150" cy="150" r="140"></circle>
        </svg>
       
        <div class="progress-text-p">of the old testament</div>
        <div class="progress-text" id="leviticusPercentage">0%</div>
    </div>

    <script>
        $(document).ready(function(){
            $("#leviticus-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Leviticus-Chapters").delay(500).fadeIn(300);
                $('html, body').animate({
                    scrollTop: $("#Leviticus-Chapters").offset().top
                }, 1000);
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#back-btn-leviticus").click(function(){
                $("#Leviticus-Chapters").fadeOut(300);
                $("#old-testament").delay(500).fadeIn(300);
                $('html, body').animate({
                    scrollTop: $("#old-testament").offset().top
                }, 1000);
            });
        });
    </script>
    
    <button id="back-btn-leviticus" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="leviticusToggleButton1" data-chapter-id="leviticus1">Chapter 1</div>

        <div class="book-button" id="leviticusToggleButton2" data-chapter-id="leviticus2">Chapter 2</div>

        <div class="book-button" id="leviticusToggleButton3" data-chapter-id="leviticus3">Chapter 3</div>

        <div class="book-button" id="leviticusToggleButton4" data-chapter-id="leviticus4">Chapter 4</div>

        <div class="book-button" id="leviticusToggleButton5" data-chapter-id="leviticus5">Chapter 5</div>

        <div class="book-button" id="leviticusToggleButton6" data-chapter-id="leviticus6">Chapter 6</div>

        <div class="book-button" id="leviticusToggleButton7" data-chapter-id="leviticus7">Chapter 7</div>

        <div class="book-button" id="leviticusToggleButton8" data-chapter-id="leviticus8">Chapter 8</div>

        <div class="book-button" id="leviticusToggleButton9" data-chapter-id="leviticus9">Chapter 9</div>

        <div class="book-button" id="leviticusToggleButton10" data-chapter-id="leviticus10">Chapter 10</div>

        <div class="book-button" id="leviticusToggleButton11" data-chapter-id="leviticus11">Chapter 11</div>

        <div class="book-button" id="leviticusToggleButton12" data-chapter-id="leviticus12">Chapter 12</div>

        <div class="book-button" id="leviticusToggleButton13" data-chapter-id="leviticus13">Chapter 13</div>

        <div class="book-button" id="leviticusToggleButton14" data-chapter-id="leviticus14">Chapter 14</div>

        <div class="book-button" id="leviticusToggleButton15" data-chapter-id="leviticus15">Chapter 15</div>

        <div class="book-button" id="leviticusToggleButton16" data-chapter-id="leviticus16">Chapter 16</div>

        <div class="book-button" id="leviticusToggleButton17" data-chapter-id="leviticus17">Chapter 17</div>

        <div class="book-button" id="leviticusToggleButton18" data-chapter-id="leviticus18">Chapter 18</div>

        <div class="book-button" id="leviticusToggleButton19" data-chapter-id="leviticus19">Chapter 19</div>

        <div class="book-button" id="leviticusToggleButton20" data-chapter-id="leviticus20">Chapter 20</div>

        <div class="book-button" id="leviticusToggleButton21" data-chapter-id="leviticus21">Chapter 21</div>

        <div class="book-button" id="leviticusToggleButton22" data-chapter-id="leviticus22">Chapter 22</div>

        <div class="book-button" id="leviticusToggleButton23" data-chapter-id="leviticus23">Chapter 23</div>

        <div class="book-button" id="leviticusToggleButton24" data-chapter-id="leviticus24">Chapter 24</div>

        <div class="book-button" id="leviticusToggleButton25" data-chapter-id="leviticus25">Chapter 25</div>

        <div class="book-button" id="leviticusToggleButton26" data-chapter-id="leviticus26">Chapter 26</div>

        <div class="book-button" id="leviticusToggleButton27" data-chapter-id="leviticus27">Chapter 27</div>


    
    </div>  

</section>



<section id="Numbers-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Numbers
    </header>
    <div class="old-testament-large-circle">
    
        <div id="numbersPercentage" class="totalPercentage">0%</div>

            <p>of Numbers</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#numbers-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Numbers-Chapters").delay(500).fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        $(document).ready(function(){
            $("#back-btn-numbers").click(function(){
                $("#Numbers-Chapters").fadeOut(300);
                $("#old-testament").delay(500).fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });
    </script>
    
    <button id="back-btn-numbers" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="numbersToggleButton1">Chapter 1</div>

        <div class="book-button" id="numbersToggleButton2">Chapter 2</div>

        <div class="book-button" id="numbersToggleButton3">Chapter 3</div>

        <div class="book-button" id="numbersToggleButton4">Chapter 4</div>

        <div class="book-button" id="numbersToggleButton5">Chapter 5</div>

        <div class="book-button" id="numbersToggleButton6">Chapter 6</div>

        <div class="book-button" id="numbersToggleButton7">Chapter 7</div>

        <div class="book-button" id="numbersToggleButton8">Chapter 8</div>

        <div class="book-button" id="numbersToggleButton9">Chapter 9</div>

        <div class="book-button" id="numbersToggleButton10">Chapter 10</div>

        <div class="book-button" id="numbersToggleButton11">Chapter 11</div>

        <div class="book-button" id="numbersToggleButton12">Chapter 12</div>

        <div class="book-button" id="numbersToggleButton13">Chapter 13</div>

        <div class="book-button" id="numbersToggleButton14">Chapter 14</div>

        <div class="book-button" id="numbersToggleButton15">Chapter 15</div>

        <div class="book-button" id="numbersToggleButton16">Chapter 16</div>

        <div class="book-button" id="numbersToggleButton17">Chapter 17</div>

        <div class="book-button" id="numbersToggleButton18">Chapter 18</div>

        <div class="book-button" id="numbersToggleButton19">Chapter 19</div>

        <div class="book-button" id="numbersToggleButton20">Chapter 20</div>

        <div class="book-button" id="numbersToggleButton21">Chapter 21</div>

        <div class="book-button" id="numbersToggleButton22">Chapter 22</div>

        <div class="book-button" id="numbersToggleButton23">Chapter 23</div>

        <div class="book-button" id="numbersToggleButton24">Chapter 24</div>

        <div class="book-button" id="numbersToggleButton25">Chapter 25</div>

        <div class="book-button" id="numbersToggleButton26">Chapter 26</div>

        <div class="book-button" id="numbersToggleButton27">Chapter 27</div>

        <div class="book-button" id="numbersToggleButton28">Chapter 28</div>

        <div class="book-button" id="numbersToggleButton29">Chapter 29</div>

        <div class="book-button" id="numbersToggleButton30">Chapter 30</div>

        <div class="book-button" id="numbersToggleButton31">Chapter 31</div>

        <div class="book-button" id="numbersToggleButton32">Chapter 32</div>

        <div class="book-button" id="numbersToggleButton33">Chapter 33</div>

        <div class="book-button" id="numbersToggleButton34">Chapter 34</div>

        <div class="book-button" id="numbersToggleButton35">Chapter 35</div>

        <div class="book-button" id="numbersToggleButton36">Chapter 36</div>
    
    </div>  

    </section>




<section id="Deuteronomy-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Deuteronomy
    </header>
    
        <div id="deuteronomyPercentage" class="totalPercentage">0%</div>

            <p>of Deuteronomy</p>

    

    <script>
            $(document).ready(function(){
                $("#deuteronomy-button").click(function(){
                    $("#old-testament").fadeOut(300);
                    $("#home-section").fadeOut(300);
                    $("#Deuteronomy-Chapters").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });
        </script>

        <script>
            $(document).ready(function(){
                $("#back-btn-deuteronomy").click(function(){
                    $("#Deuteronomy-Chapters").fadeOut(300);
                    $("#old-testament").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });
    </script>
    
    <button id="back-btn-deuteronomy" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="deuteronomyToggleButton1">Chapter 1</div>

        <div class="book-button" id="deuteronomyToggleButton2">Chapter 2</div>

        <div class="book-button" id="deuteronomyToggleButton3">Chapter 3</div>

        <div class="book-button" id="deuteronomyToggleButton4">Chapter 4</div>

        <div class="book-button" id="deuteronomyToggleButton5">Chapter 5</div>

        <div class="book-button" id="deuteronomyToggleButton6">Chapter 6</div>

        <div class="book-button" id="deuteronomyToggleButton7">Chapter 7</div>

        <div class="book-button" id="deuteronomyToggleButton8">Chapter 8</div>

        <div class="book-button" id="deuteronomyToggleButton9">Chapter 9</div>

        <div class="book-button" id="deuteronomyToggleButton10">Chapter 10</div>

        <div class="book-button" id="deuteronomyToggleButton11">Chapter 11</div>

        <div class="book-button" id="deuteronomyToggleButton12">Chapter 12</div>

        <div class="book-button" id="deuteronomyToggleButton13">Chapter 13</div>

        <div class="book-button" id="deuteronomyToggleButton14">Chapter 14</div>

        <div class="book-button" id="deuteronomyToggleButton15">Chapter 15</div>

        <div class="book-button" id="deuteronomyToggleButton16">Chapter 16</div>

        <div class="book-button" id="deuteronomyToggleButton17">Chapter 17</div>

        <div class="book-button" id="deuteronomyToggleButton18">Chapter 18</div>

        <div class="book-button" id="deuteronomyToggleButton19">Chapter 19</div>

        <div class="book-button" id="deuteronomyToggleButton20">Chapter 20</div>

        <div class="book-button" id="deuteronomyToggleButton21">Chapter 21</div>

        <div class="book-button" id="deuteronomyToggleButton22">Chapter 22</div>

        <div class="book-button" id="deuteronomyToggleButton23">Chapter 23</div>

        <div class="book-button" id="deuteronomyToggleButton24">Chapter 24</div>

        <div class="book-button" id="deuteronomyToggleButton25">Chapter 25</div>

        <div class="book-button" id="deuteronomyToggleButton26">Chapter 26</div>

        <div class="book-button" id="deuteronomyToggleButton27">Chapter 27</div>

        <div class="book-button" id="deuteronomyToggleButton28">Chapter 28</div>

        <div class="book-button" id="deuteronomyToggleButton29">Chapter 29</div>

        <div class="book-button" id="deuteronomyToggleButton30">Chapter 30</div>

        <div class="book-button" id="deuteronomyToggleButton31">Chapter 31</div>

        <div class="book-button" id="deuteronomyToggleButton32">Chapter 32</div>

        <div class="book-button" id="deuteronomyToggleButton33">Chapter 33</div>

        <div class="book-button" id="deuteronomyToggleButton34">Chapter 34</div>

    </div>  

</section>





<section id="Joshua-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Joshua
    </header>

    <div class="old-testament-large-circle">
    
        <div id="joshuaPercentage" class="totalPercentage">0%</div>

            <p>of Joshua</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#joshua-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Joshua-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#back-btn-joshua").click(function(){
                $("#Joshua-Chapters").fadeOut(300);
                $("#old-testament").fadeIn(300);
                $('html, body').animate({
                    scrollTop: $("#old-testament").offset().top - 1000
                }, 500);
            });
        });
    </script>
    
    <button id="back-btn-joshua" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="joshuaToggleButton1">Chapter 1</div>

        <div class="book-button" id="joshuaToggleButton2">Chapter 2</div>

        <div class="book-button" id="joshuaToggleButton3">Chapter 3</div>

        <div class="book-button" id="joshuaToggleButton4">Chapter 4</div>

        <div class="book-button" id="joshuaToggleButton5">Chapter 5</div>

        <div class="book-button" id="joshuaToggleButton6">Chapter 6</div>

        <div class="book-button" id="joshuaToggleButton7">Chapter 7</div>

        <div class="book-button" id="joshuaToggleButton8">Chapter 8</div>

        <div class="book-button" id="joshuaToggleButton9">Chapter 9</div>

        <div class="book-button" id="joshuaToggleButton10">Chapter 10</div>

        <div class="book-button" id="joshuaToggleButton11">Chapter 11</div>

        <div class="book-button" id="joshuaToggleButton12">Chapter 12</div>

        <div class="book-button" id="joshuaToggleButton13">Chapter 13</div>

        <div class="book-button" id="joshuaToggleButton14">Chapter 14</div>

        <div class="book-button" id="joshuaToggleButton15">Chapter 15</div>

        <div class="book-button" id="joshuaToggleButton16">Chapter 16</div>

        <div class="book-button" id="joshuaToggleButton17">Chapter 17</div>

        <div class="book-button" id="joshuaToggleButton18">Chapter 18</div>

        <div class="book-button" id="joshuaToggleButton19">Chapter 19</div>

        <div class="book-button" id="joshuaToggleButton20">Chapter 20</div>

        <div class="book-button" id="joshuaToggleButton21">Chapter 21</div>

        <div class="book-button" id="joshuaToggleButton22">Chapter 22</div>

        <div class="book-button" id="joshuaToggleButton23">Chapter 23</div>

        <div class="book-button" id="joshuaToggleButton24">Chapter 24</div>

    
    </div>  

</section>




<section id="Judges-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Judges
    </header>
    <div class="old-testament-large-circle">
    
        <div id="judgesPercentage" class="totalPercentage">0%</div>

            <p>of Judges</p>

    </div>

    <script>
            $(document).ready(function(){
                $("#judges-button").click(function(){
                    $("#old-testament").fadeOut(300);
                    $("#home-section").fadeOut(300);
                    $("#Judges-Chapters").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });
        </script>

        <script>
            $(document).ready(function(){
                $("#back-btn-judges").click(function(){
                    $("#Judges-Chapters").fadeOut(300);
                    $("#old-testament").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });
    </script>
    
    <button id="back-btn-judges" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="judgesToggleButton1">Chapter 1</div>

        <div class="book-button" id="judgesToggleButton2">Chapter 2</div>

        <div class="book-button" id="judgesToggleButton3">Chapter 3</div>

        <div class="book-button" id="judgesToggleButton4">Chapter 4</div>

        <div class="book-button" id="judgesToggleButton5">Chapter 5</div>

        <div class="book-button" id="judgesToggleButton6">Chapter 6</div>

        <div class="book-button" id="judgesToggleButton7">Chapter 7</div>

        <div class="book-button" id="judgesToggleButton8">Chapter 8</div>

        <div class="book-button" id="judgesToggleButton9">Chapter 9</div>

        <div class="book-button" id="judgesToggleButton10">Chapter 10</div>

        <div class="book-button" id="judgesToggleButton11">Chapter 11</div>

        <div class="book-button" id="judgesToggleButton12">Chapter 12</div>

        <div class="book-button" id="judgesToggleButton13">Chapter 13</div>

        <div class="book-button" id="judgesToggleButton14">Chapter 14</div>

        <div class="book-button" id="judgesToggleButton15">Chapter 15</div>

        <div class="book-button" id="judgesToggleButton16">Chapter 16</div>

        <div class="book-button" id="judgesToggleButton17">Chapter 17</div>

        <div class="book-button" id="judgesToggleButton18">Chapter 18</div>

        <div class="book-button" id="judgesToggleButton19">Chapter 19</div>

        <div class="book-button" id="judgesToggleButton20">Chapter 20</div>

        <div class="book-button" id="judgesToggleButton21">Chapter 21</div>

    
    </div>  

</section>



<section id="Ruth-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Ruth
    </header>
    <div class="old-testament-large-circle">
    
        <div id="ruthPercentage" class="totalPercentage">0%</div>

            <p>of Ruth</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#ruth-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Ruth-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        $(document).ready(function(){
            $("#back-btn-ruth").click(function(){
                $("#Ruth-Chapters").fadeOut(300);
                $("#old-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });
    </script>

    <button id="back-btn-ruth" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="ruthToggleButton1">Chapter 1</div>

        <div class="book-button" id="ruthToggleButton2">Chapter 2</div>

        <div class="book-button" id="ruthToggleButton3">Chapter 3</div>

        <div class="book-button" id="ruthToggleButton4">Chapter 4</div>

    
    </div>  

</section>



<section id="1-Samuel-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        1 Samuel
    </header>
    <h2 class="chapter-subhead">This is Sean's favorite</h2>
    <div class="old-testament-large-circle">
    
        <div id="1samuelPercentage" class="totalPercentage">0%</div>

            <p>of 1 Samuel</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#1samuel-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#1-Samuel-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        $(document).ready(function(){
            $("#back-btn-1samuel").click(function(){
                $("#1-Samuel-Chapters").fadeOut(300);
                $("#old-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-1samuel" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="1samuelToggleButton1">Chapter 1</div>

        <div class="book-button" id="1samuelToggleButton2">Chapter 2</div>

        <div class="book-button" id="1samuelToggleButton3">Chapter 3</div>

        <div class="book-button" id="1samuelToggleButton4">Chapter 4</div>

        <div class="book-button" id="1samuelToggleButton5">Chapter 5</div>

        <div class="book-button" id="1samuelToggleButton6">Chapter 6</div>

        <div class="book-button" id="1samuelToggleButton7">Chapter 7</div>

        <div class="book-button" id="1samuelToggleButton8">Chapter 8</div>

        <div class="book-button" id="1samuelToggleButton9">Chapter 9</div>

        <div class="book-button" id="1samuelToggleButton10">Chapter 10</div>

        <div class="book-button" id="1samuelToggleButton11">Chapter 11</div>

        <div class="book-button" id="1samuelToggleButton12">Chapter 12</div>

        <div class="book-button" id="1samuelToggleButton13">Chapter 13</div>

        <div class="book-button" id="1samuelToggleButton14">Chapter 14</div>

        <div class="book-button" id="1samuelToggleButton15">Chapter 15</div>

        <div class="book-button" id="1samuelToggleButton16">Chapter 16</div>

        <div class="book-button" id="1samuelToggleButton17">Chapter 17</div>

        <div class="book-button" id="1samuelToggleButton18">Chapter 18</div>

        <div class="book-button" id="1samuelToggleButton19">Chapter 19</div>

        <div class="book-button" id="1samuelToggleButton20">Chapter 20</div>

        <div class="book-button" id="1samuelToggleButton21">Chapter 21</div>

        <div class="book-button" id="1samuelToggleButton22">Chapter 22</div>

        <div class="book-button" id="1samuelToggleButton23">Chapter 23</div>

        <div class="book-button" id="1samuelToggleButton24">Chapter 24</div>

        <div class="book-button" id="1samuelToggleButton25">Chapter 25</div>

        <div class="book-button" id="1samuelToggleButton26">Chapter 26</div>

        <div class="book-button" id="1samuelToggleButton27">Chapter 27</div>

        <div class="book-button" id="1samuelToggleButton28">Chapter 28</div>

        <div class="book-button" id="1samuelToggleButton29">Chapter 29</div>

        <div class="book-button" id="1samuelToggleButton30">Chapter 30</div>

        <div class="book-button" id="1samuelToggleButton31">Chapter 31</div>

    
    </div>  

</section>


<section id="2-Samuel-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        2 Samuel
    </header>
    <div class="old-testament-large-circle">
    
        <div id="2samuelPercentage" class="totalPercentage">0%</div>

            <p>of 2 Samuel</p>

    </div>

    <script>
            $(document).ready(function(){
                $("#2samuel-button").click(function(){
                    $("#old-testament").fadeOut(300);
                    $("#home-section").fadeOut(300);
                    $("#2-Samuel-Chapters").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });
        </script>

        <script>
            $(document).ready(function(){
                $("#back-btn-2samuel").click(function(){
                    $("#2-Samuel-Chapters").fadeOut(300);
                    $("#old-testament").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });

    </script>

    <button id="back-btn-2samuel" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="2samuelToggleButton1">Chapter 1</div>

        <div class="book-button" id="2samuelToggleButton2">Chapter 2</div>

        <div class="book-button" id="2samuelToggleButton3">Chapter 3</div>

        <div class="book-button" id="2samuelToggleButton4">Chapter 4</div>

        <div class="book-button" id="2samuelToggleButton5">Chapter 5</div>

        <div class="book-button" id="2samuelToggleButton6">Chapter 6</div>

        <div class="book-button" id="2samuelToggleButton7">Chapter 7</div>

        <div class="book-button" id="2samuelToggleButton8">Chapter 8</div>

        <div class="book-button" id="2samuelToggleButton9">Chapter 9</div>

        <div class="book-button" id="2samuelToggleButton10">Chapter 10</div>

        <div class="book-button" id="2samuelToggleButton11">Chapter 11</div>

        <div class="book-button" id="2samuelToggleButton12">Chapter 12</div>

        <div class="book-button" id="2samuelToggleButton13">Chapter 13</div>

        <div class="book-button" id="2samuelToggleButton14">Chapter 14</div>

        <div class="book-button" id="2samuelToggleButton15">Chapter 15</div>

        <div class="book-button" id="2samuelToggleButton16">Chapter 16</div>

        <div class="book-button" id="2samuelToggleButton17">Chapter 17</div>

        <div class="book-button" id="2samuelToggleButton18">Chapter 18</div>

        <div class="book-button" id="2samuelToggleButton19">Chapter 19</div>

        <div class="book-button" id="2samuelToggleButton20">Chapter 20</div>

        <div class="book-button" id="2samuelToggleButton21">Chapter 21</div>

        <div class="book-button" id="2samuelToggleButton22">Chapter 22</div>

        <div class="book-button" id="2samuelToggleButton23">Chapter 23</div>

        <div class="book-button" id="2samuelToggleButton24">Chapter 24</div>

    </div>  

</section>


<section id="1-Kings-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        1 Kings
    </header>
    <div class="old-testament-large-circle">
    
        <div id="1kingsPercentage" class="totalPercentage">0%</div>

            <p>of 1 Kings</p>

    </div>

    <script>
            $(document).ready(function(){
                $("#1kings-button").click(function(){
                    $("#old-testament").fadeOut(300);
                    $("#home-section").fadeOut(300);
                    $("#1-Kings-Chapters").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });
        </script>

        <script>
            $(document).ready(function(){
                $("#back-btn-1kings").click(function(){
                    $("#1-Kings-Chapters").fadeOut(300);
                    $("#old-testament").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });

    </script>

    <button id="back-btn-1kings" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="1kingsToggleButton1">Chapter 1</div>

        <div class="book-button" id="1kingsToggleButton2">Chapter 2</div>

        <div class="book-button" id="1kingsToggleButton3">Chapter 3</div>

        <div class="book-button" id="1kingsToggleButton4">Chapter 4</div>

        <div class="book-button" id="1kingsToggleButton5">Chapter 5</div>

        <div class="book-button" id="1kingsToggleButton6">Chapter 6</div>

        <div class="book-button" id="1kingsToggleButton7">Chapter 7</div>

        <div class="book-button" id="1kingsToggleButton8">Chapter 8</div>

        <div class="book-button" id="1kingsToggleButton9">Chapter 9</div>

        <div class="book-button" id="1kingsToggleButton10">Chapter 10</div>

        <div class="book-button" id="1kingsToggleButton11">Chapter 11</div>

        <div class="book-button" id="1kingsToggleButton12">Chapter 12</div>

        <div class="book-button" id="1kingsToggleButton13">Chapter 13</div>

        <div class="book-button" id="1kingsToggleButton14">Chapter 14</div>

        <div class="book-button" id="1kingsToggleButton15">Chapter 15</div>

        <div class="book-button" id="1kingsToggleButton16">Chapter 16</div>

        <div class="book-button" id="1kingsToggleButton17">Chapter 17</div>

        <div class="book-button" id="1kingsToggleButton18">Chapter 18</div>

        <div class="book-button" id="1kingsToggleButton19">Chapter 19</div>

        <div class="book-button" id="1kingsToggleButton20">Chapter 20</div>

        <div class="book-button" id="1kingsToggleButton21">Chapter 21</div>

        <div class="book-button" id="1kingsToggleButton22">Chapter 22</div>

    </div>  

</section>



<section id="2-Kings-Chapters" class="chapter-grid">


    <header class="header chapter-header">
        2 Kings
    </header>
    <div class="old-testament-large-circle">
    
        <div id="2kingsPercentage" class="totalPercentage">0%</div>

            <p>of 2 Kings</p>

    </div>


    <script>
            $(document).ready(function(){
                $("#2kings-button").click(function(){
                    $("#old-testament").fadeOut(300);
                    $("#home-section").fadeOut(300);
                    $("#2-Kings-Chapters").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });
        </script>

        <script>
            $(document).ready(function(){
                $("#back-btn-2kings").click(function(){
                    $("#2-Kings-Chapters").fadeOut(300);
                    $("#old-testament").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });

    </script>

    <button id="back-btn-2kings" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="2kingsToggleButton1">Chapter 1</div>

        <div class="book-button" id="2kingsToggleButton2">Chapter 2</div>

        <div class="book-button" id="2kingsToggleButton3">Chapter 3</div>

        <div class="book-button" id="2kingsToggleButton4">Chapter 4</div>

        <div class="book-button" id="2kingsToggleButton5">Chapter 5</div>

        <div class="book-button" id="2kingsToggleButton6">Chapter 6</div>

        <div class="book-button" id="2kingsToggleButton7">Chapter 7</div>

        <div class="book-button" id="2kingsToggleButton8">Chapter 8</div>

        <div class="book-button" id="2kingsToggleButton9">Chapter 9</div>

        <div class="book-button" id="2kingsToggleButton10">Chapter 10</div>

        <div class="book-button" id="2kingsToggleButton11">Chapter 11</div>

        <div class="book-button" id="2kingsToggleButton12">Chapter 12</div>

        <div class="book-button" id="2kingsToggleButton13">Chapter 13</div>

        <div class="book-button" id="2kingsToggleButton14">Chapter 14</div>

        <div class="book-button" id="2kingsToggleButton15">Chapter 15</div>

        <div class="book-button" id="2kingsToggleButton16">Chapter 16</div>

        <div class="book-button" id="2kingsToggleButton17">Chapter 17</div>

        <div class="book-button" id="2kingsToggleButton18">Chapter 18</div>

        <div class="book-button" id="2kingsToggleButton19">Chapter 19</div>

        <div class="book-button" id="2kingsToggleButton20">Chapter 20</div>

        <div class="book-button" id="2kingsToggleButton21">Chapter 21</div>

        <div class="book-button" id="2kingsToggleButton22">Chapter 22</div>

        <div class="book-button" id="2kingsToggleButton23">Chapter 23</div>

        <div class="book-button" id="2kingsToggleButton24">Chapter 24</div>

        <div class="book-button" id="2kingsToggleButton25">Chapter 25</div>

    </div>  

</section>


<section id="1-Chronicles-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        1 Chronicles
    </header>
    <div class="old-testament-large-circle">
    
        <div id="1chroniclesPercentage" class="totalPercentage">0%</div>

            <p>of 1 Chronicles</p>

    </div>

    <script>
            $(document).ready(function(){
                $("#1chronicles-button").click(function(){
                    $("#old-testament").fadeOut(300);
                    $("#home-section").fadeOut(300);
                    $("#1-Chronicles-Chapters").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });
        </script>

        <script>
            $(document).ready(function(){
                $("#back-btn-1chronicles").click(function(){
                    $("#1-Chronicles-Chapters").fadeOut(300);
                    $("#old-testament").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });

    </script>

    <button id="back-btn-1chronicles" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="1chroniclesToggleButton1">Chapter 1</div>

        <div class="book-button" id="1chroniclesToggleButton2">Chapter 2</div>

        <div class="book-button" id="1chroniclesToggleButton3">Chapter 3</div>

        <div class="book-button" id="1chroniclesToggleButton4">Chapter 4</div>

        <div class="book-button" id="1chroniclesToggleButton5">Chapter 5</div>

        <div class="book-button" id="1chroniclesToggleButton6">Chapter 6</div>

        <div class="book-button" id="1chroniclesToggleButton7">Chapter 7</div>

        <div class="book-button" id="1chroniclesToggleButton8">Chapter 8</div>

        <div class="book-button" id="1chroniclesToggleButton9">Chapter 9</div>

        <div class="book-button" id="1chroniclesToggleButton10">Chapter 10</div>

        <div class="book-button" id="1chroniclesToggleButton11">Chapter 11</div>

        <div class="book-button" id="1chroniclesToggleButton12">Chapter 12</div>

        <div class="book-button" id="1chroniclesToggleButton13">Chapter 13</div>

        <div class="book-button" id="1chroniclesToggleButton14">Chapter 14</div>

        <div class="book-button" id="1chroniclesToggleButton15">Chapter 15</div>

        <div class="book-button" id="1chroniclesToggleButton16">Chapter 16</div>

        <div class="book-button" id="1chroniclesToggleButton17">Chapter 17</div>

        <div class="book-button" id="1chroniclesToggleButton18">Chapter 18</div>

        <div class="book-button" id="1chroniclesToggleButton19">Chapter 19</div>

        <div class="book-button" id="1chroniclesToggleButton20">Chapter 20</div>

        <div class="book-button" id="1chroniclesToggleButton21">Chapter 21</div>

        <div class="book-button" id="1chroniclesToggleButton22">Chapter 22</div>

        <div class="book-button" id="1chroniclesToggleButton23">Chapter 23</div>

        <div class="book-button" id="1chroniclesToggleButton24">Chapter 24</div>

        <div class="book-button" id="1chroniclesToggleButton25">Chapter 25</div>

        <div class="book-button" id="1chroniclesToggleButton26">Chapter 26</div>

        <div class="book-button" id="1chroniclesToggleButton27">Chapter 27</div>

        <div class="book-button" id="1chroniclesToggleButton28">Chapter 28</div>

        <div class="book-button" id="1chroniclesToggleButton29">Chapter 29</div>

    </div>  

</section>


<section id="2-Chronicles-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        2 Chronicles
    </header>
    <div class="old-testament-large-circle">
    
        <div id="2chroniclesPercentage" class="totalPercentage">0%</div>

            <p>of 2 Chronicles</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#2chronicles-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#2-Chronicles-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        $(document).ready(function(){
            $("#back-btn-2chronicles").click(function(){
                $("#2-Chronicles-Chapters").fadeOut(300);
                $("#old-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-2chronicles" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="2chroniclesToggleButton1">Chapter 1</div>

        <div class="book-button" id="2chroniclesToggleButton2">Chapter 2</div>

        <div class="book-button" id="2chroniclesToggleButton3">Chapter 3</div>

        <div class="book-button" id="2chroniclesToggleButton4">Chapter 4</div>

        <div class="book-button" id="2chroniclesToggleButton5">Chapter 5</div>

        <div class="book-button" id="2chroniclesToggleButton6">Chapter 6</div>

        <div class="book-button" id="2chroniclesToggleButton7">Chapter 7</div>

        <div class="book-button" id="2chroniclesToggleButton8">Chapter 8</div>

        <div class="book-button" id="2chroniclesToggleButton9">Chapter 9</div>

        <div class="book-button" id="2chroniclesToggleButton10">Chapter 10</div>

        <div class="book-button" id="2chroniclesToggleButton11">Chapter 11</div>

        <div class="book-button" id="2chroniclesToggleButton12">Chapter 12</div>

        <div class="book-button" id="2chroniclesToggleButton13">Chapter 13</div>

        <div class="book-button" id="2chroniclesToggleButton14">Chapter 14</div>

        <div class="book-button" id="2chroniclesToggleButton15">Chapter 15</div>

        <div class="book-button" id="2chroniclesToggleButton16">Chapter 16</div>

        <div class="book-button" id="2chroniclesToggleButton17">Chapter 17</div>

        <div class="book-button" id="2chroniclesToggleButton18">Chapter 18</div>

        <div class="book-button" id="2chroniclesToggleButton19">Chapter 19</div>

        <div class="book-button" id="2chroniclesToggleButton20">Chapter 20</div>

        <div class="book-button" id="2chroniclesToggleButton21">Chapter 21</div>

        <div class="book-button" id="2chroniclesToggleButton22">Chapter 22</div>

        <div class="book-button" id="2chroniclesToggleButton23">Chapter 23</div>

        <div class="book-button" id="2chroniclesToggleButton24">Chapter 24</div>

        <div class="book-button" id="2chroniclesToggleButton25">Chapter 25</div>

        <div class="book-button" id="2chroniclesToggleButton26">Chapter 26</div>

        <div class="book-button" id="2chroniclesToggleButton27">Chapter 27</div>

        <div class="book-button" id="2chroniclesToggleButton28">Chapter 28</div>

        <div class="book-button" id="2chroniclesToggleButton29">Chapter 29</div>

        <div class="book-button" id="2chroniclesToggleButton30">Chapter 30</div>

        <div class="book-button" id="2chroniclesToggleButton31">Chapter 31</div>

        <div class="book-button" id="2chroniclesToggleButton32">Chapter 32</div>

        <div class="book-button" id="2chroniclesToggleButton33">Chapter 33</div>

        <div class="book-button" id="2chroniclesToggleButton34">Chapter 34</div>

        <div class="book-button" id="2chroniclesToggleButton35">Chapter 35</div>

        <div class="book-button" id="2chroniclesToggleButton36">Chapter 36</div>

    </div>  

</section>



<section id="Ezra-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Ezra
    </header>
    <div class="old-testament-large-circle">
    
        <div id="ezraPercentage" class="totalPercentage">0%</div>

            <p>of Ezra</p>

    </div>

    <script>
            $(document).ready(function(){
            $("#ezra-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Ezra-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        $(document).ready(function(){
            $("#back-btn-ezra").click(function(){
                $("#Ezra-Chapters").fadeOut(300);
                $("#old-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-ezra" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="ezraToggleButton1">Chapter 1</div>

        <div class="book-button" id="ezraToggleButton2">Chapter 2</div>

        <div class="book-button" id="ezraToggleButton3">Chapter 3</div>

        <div class="book-button" id="ezraToggleButton4">Chapter 4</div>

        <div class="book-button" id="ezraToggleButton5">Chapter 5</div>

        <div class="book-button" id="ezraToggleButton6">Chapter 6</div>

        <div class="book-button" id="ezraToggleButton7">Chapter 7</div>

        <div class="book-button" id="ezraToggleButton8">Chapter 8</div>

        <div class="book-button" id="ezraToggleButton9">Chapter 9</div>

        <div class="book-button" id="ezraToggleButton10">Chapter 10</div>

    </div>  

</section>

<section id="Nehemiah-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Nehemiah
    </header>
    <div class="old-testament-large-circle">
    
        <div id="nehemiahPercentage" class="totalPercentage">0%</div>

            <p>of Nehemiah</p>

    </div>

    <script>
            $(document).ready(function(){
            $("#nehemiah-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Nehemiah-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        $(document).ready(function(){
            $("#back-btn-nehemiah").click(function(){
                $("#Nehemiah-Chapters").fadeOut(300);
                $("#old-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-nehemiah" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="nehemiahToggleButton1">Chapter 1</div>

        <div class="book-button" id="nehemiahToggleButton2">Chapter 2</div>

        <div class="book-button" id="nehemiahToggleButton3">Chapter 3</div>

        <div class="book-button" id="nehemiahToggleButton4">Chapter 4</div>

        <div class="book-button" id="nehemiahToggleButton5">Chapter 5</div>

        <div class="book-button" id="nehemiahToggleButton6">Chapter 6</div>

        <div class="book-button" id="nehemiahToggleButton7">Chapter 7</div>

        <div class="book-button" id="nehemiahToggleButton8">Chapter 8</div>

        <div class="book-button" id="nehemiahToggleButton9">Chapter 9</div>

        <div class="book-button" id="nehemiahToggleButton10">Chapter 10</div>

        <div class="book-button" id="nehemiahToggleButton11">Chapter 11</div>

        <div class="book-button" id="nehemiahToggleButton12">Chapter 12</div>

        <div class="book-button" id="nehemiahToggleButton13">Chapter 13</div>

    </div>  

</section>


<section id="Esther-Chapters" class="chapter-grid">
    
        <header class="header chapter-header">
            Esther
        </header>
    
        <div class="old-testament-large-circle">
        
            <div id="estherPercentage" class="totalPercentage">0%</div>
    
                <p>of Esther</p>
    
        </div>
    
        <script>
            $(document).ready(function(){
                $("#esther-button").click(function(){
                    $("#old-testament").fadeOut(300);
                    $("#home-section").fadeOut(300);
                    $("#Esther-Chapters").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });

            $(document).ready(function(){
                $("#back-btn-esther").click(function(){
                    $("#Esther-Chapters").fadeOut(300);
                    $("#old-testament").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });
    
        </script>
    
        <button id="back-btn-esther" type="button" class="back-button">Back</button>
    
        <div class="the-chapter-grid">
    
            <div class="book-button" id="estherToggleButton1">Chapter 1</div>
    
            <div class="book-button" id="estherToggleButton2">Chapter 2</div>
    
            <div class="book-button" id="estherToggleButton3">Chapter 3</div>
    
            <div class="book-button" id="estherToggleButton4">Chapter 4</div>
    
            <div class="book-button" id="estherToggleButton5">Chapter 5</div>
    
            <div class="book-button" id="estherToggleButton6">Chapter 6</div>
    
            <div class="book-button" id="estherToggleButton7">Chapter 7</div>
    
            <div class="book-button" id="estherToggleButton8">Chapter 8</div>
    
            <div class="book-button" id="estherToggleButton9">Chapter 9</div>
    
            <div class="book-button" id="estherToggleButton10">Chapter 10</div>
    
        </div>
</section>


<section id="Job-Chapters" class="chapter-grid">
    
        <header class="header chapter-header">
            Job
        </header>
    
        <div class="old-testament-large-circle">
        
            <div id="jobPercentage" class="totalPercentage">0%</div>
    
                <p>of Job</p>
    
        </div>
    
        <script>
            $(document).ready(function(){
                $("#job-button").click(function(){
                    $("#old-testament").fadeOut(300);
                    $("#home-section").fadeOut(300);
                    $("#Job-Chapters").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });

            $(document).ready(function(){
                $("#back-btn-job").click(function(){
                    $("#Job-Chapters").fadeOut(300);
                    $("#old-testament").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });
        </script>
    
        <button id="back-btn-job" type="button" class="back-button">Back</button>
    
        <div class="the-chapter-grid">
    
            <div class="book-button" id="jobToggleButton1">Chapter 1</div>
    
            <div class="book-button" id="jobToggleButton2">Chapter 2</div>
    
            <div class="book-button" id="jobToggleButton3">Chapter 3</div>
    
            <div class="book-button" id="jobToggleButton4">Chapter 4</div>
    
            <div class="book-button" id="jobToggleButton5">Chapter 5</div>
    
            <div class="book-button" id="jobToggleButton6">Chapter 6</div>
    
            <div class="book-button" id="jobToggleButton7">Chapter 7</div>
    
            <div class="book-button" id="jobToggleButton8">Chapter 8</div>
    
            <div class="book-button" id="jobToggleButton9">Chapter 9</div>
    
            <div class="book-button" id="jobToggleButton10">Chapter 10</div>
    
            <div class="book-button" id="jobToggleButton11">Chapter 11</div>
    
            <div class="book-button" id="jobToggleButton12">Chapter 12</div>
    
            <div class="book-button" id="jobToggleButton13">Chapter 13</div>

            <div class="book-button" id="jobToggleButton14">Chapter 14</div>

            <div class="book-button" id="jobToggleButton15">Chapter 15</div>

            <div class="book-button" id="jobToggleButton16">Chapter 16</div>

            <div class="book-button" id="jobToggleButton17">Chapter 17</div>

            <div class="book-button" id="jobToggleButton18">Chapter 18</div>

            <div class="book-button" id="jobToggleButton19">Chapter 19</div>

            <div class="book-button" id="jobToggleButton20">Chapter 20</div>

            <div class="book-button" id="jobToggleButton21">Chapter 21</div>

            <div class="book-button" id="jobToggleButton22">Chapter 22</div>

            <div class="book-button" id="jobToggleButton23">Chapter 23</div>

            <div class="book-button" id="jobToggleButton24">Chapter 24</div>

            <div class="book-button" id="jobToggleButton25">Chapter 25</div>

            <div class="book-button" id="jobToggleButton26">Chapter 26</div>

            <div class="book-button" id="jobToggleButton27">Chapter 27</div>

            <div class="book-button" id="jobToggleButton28">Chapter 28</div>

            <div class="book-button" id="jobToggleButton29">Chapter 29</div>

            <div class="book-button" id="jobToggleButton30">Chapter 30</div>

            <div class="book-button" id="jobToggleButton31">Chapter 31</div>

            <div class="book-button" id="jobToggleButton32">Chapter 32</div>

            <div class="book-button" id="jobToggleButton33">Chapter 33</div>

            <div class="book-button" id="jobToggleButton34">Chapter 34</div>

            <div class="book-button" id="jobToggleButton35">Chapter 35</div>

            <div class="book-button" id="jobToggleButton36">Chapter 36</div>

            <div class="book-button" id="jobToggleButton37">Chapter 37</div>

            <div class="book-button" id="jobToggleButton38">Chapter 38</div>

            <div class="book-button" id="jobToggleButton39">Chapter 39</div>

            <div class="book-button" id="jobToggleButton40">Chapter 40</div>

            <div class="book-button" id="jobToggleButton41">Chapter 41</div>

            <div class="book-button" id="jobToggleButton42">Chapter 42</div>

        </div>

</section>

<section id="Psalms-Chapters" class="chapter-grid">
        
            <header class="header chapter-header">
                Psalms
            </header>
        
            <div class="old-testament-large-circle">
            
                <div id="psalmsPercentage" class="totalPercentage">0%</div>
        
                    <p>of Psalms</p>
        
            </div>
        
            <script>
                $(document).ready(function(){
                    $("#psalms-button").click(function(){
                        $("#old-testament").fadeOut(300);
                        $("#home-section").fadeOut(300);
                        $("#Psalms-Chapters").fadeIn(300);
                        $('html, body').animate({scrollTop: 100}, 300);
                    });
                });

                $(document).ready(function(){
                    $("#back-btn-psalms").click(function(){
                        $("#Psalms-Chapters").fadeOut(300);
                        $("#old-testament").fadeIn(300);
                        $('html, body').animate({scrollTop: 100}, 300);
                    });
                });
        
            </script>
        
            <button id="back-btn-psalms" type="button" class="back-button">Back</button>
        
            <div class="the-chapter-grid">
        
                <div class="book-button" id="psalmsToggleButton1">Chapter 1</div>
        
                <div class="book-button" id="psalmsToggleButton2">Chapter 2</div>
        
                <div class="book-button" id="psalmsToggleButton3">Chapter 3</div>
        
                <div class="book-button" id="psalmsToggleButton4">Chapter 4</div>
        
                <div class="book-button" id="psalmsToggleButton5">Chapter 5</div>
        
                <div class="book-button" id="psalmsToggleButton6">Chapter 6</div>
        
                <div class="book-button" id="psalmsToggleButton7">Chapter 7</div>
        
                <div class="book-button" id="psalmsToggleButton8">Chapter 8</div>
        
                <div class="book-button" id="psalmsToggleButton9">Chapter 9</div>
        
                <div class="book-button" id="psalmsToggleButton10">Chapter 10</div>
        
                <div class="book-button" id="psalmsToggleButton11">Chapter 11</div>
        
                <div class="book-button" id="psalmsToggleButton12">Chapter 12</div>

                <div class="book-button" id="psalmsToggleButton13">Chapter 13</div>

                <div class="book-button" id="psalmsToggleButton14">Chapter 14</div>

                <div class="book-button" id="psalmsToggleButton15">Chapter 15</div>

                <div class="book-button" id="psalmsToggleButton16">Chapter 16</div>

                <div class="book-button" id="psalmsToggleButton17">Chapter 17</div>

                <div class="book-button" id="psalmsToggleButton18">Chapter 18</div>

                <div class="book-button" id="psalmsToggleButton19">Chapter 19</div>

                <div class="book-button" id="psalmsToggleButton20">Chapter 20</div>

                <div class="book-button" id="psalmsToggleButton21">Chapter 21</div>

                <div class="book-button" id="psalmsToggleButton22">Chapter 22</div>

                <div class="book-button" id="psalmsToggleButton23">Chapter 23</div>

                <div class="book-button" id="psalmsToggleButton24">Chapter 24</div>

                <div class="book-button" id="psalmsToggleButton25">Chapter 25</div>

                <div class="book-button" id="psalmsToggleButton26">Chapter 26</div>

                <div class="book-button" id="psalmsToggleButton27">Chapter 27</div>

                <div class="book-button" id="psalmsToggleButton28">Chapter 28</div>

                <div class="book-button" id="psalmsToggleButton29">Chapter 29</div>

                <div class="book-button" id="psalmsToggleButton30">Chapter 30</div>

                <div class="book-button" id="psalmsToggleButton31">Chapter 31</div>

                <div class="book-button" id="psalmsToggleButton32">Chapter 32</div>

                <div class="book-button" id="psalmsToggleButton33">Chapter 33</div>

                <div class="book-button" id="psalmsToggleButton34">Chapter 34</div>

                <div class="book-button" id="psalmsToggleButton35">Chapter 35</div>

                <div class="book-button" id="psalmsToggleButton36">Chapter 36</div>

                <div class="book-button" id="psalmsToggleButton37">Chapter 37</div>

                <div class="book-button" id="psalmsToggleButton38">Chapter 38</div>

                <div class="book-button" id="psalmsToggleButton39">Chapter 39</div>

                <div class="book-button" id="psalmsToggleButton40">Chapter 40</div>

                <div class="book-button" id="psalmsToggleButton41">Chapter 41</div>

                <div class="book-button" id="psalmsToggleButton42">Chapter 42</div>

                <div class="book-button" id="psalmsToggleButton43">Chapter 43</div>

                <div class="book-button" id="psalmsToggleButton44">Chapter 44</div>

                <div class="book-button" id="psalmsToggleButton45">Chapter 45</div>

                <div class="book-button" id="psalmsToggleButton46">Chapter 46</div>

                <div class="book-button" id="psalmsToggleButton47">Chapter 47</div>

                <div class="book-button" id="psalmsToggleButton48">Chapter 48</div>

                <div class="book-button" id="psalmsToggleButton49">Chapter 49</div>

                <div class="book-button" id="psalmsToggleButton50">Chapter 50</div>

                <div class="book-button" id="psalmsToggleButton51">Chapter 51</div>

                <div class="book-button" id="psalmsToggleButton52">Chapter 52</div>

                <div class="book-button" id="psalmsToggleButton53">Chapter 53</div>

                <div class="book-button" id="psalmsToggleButton54">Chapter 54</div>

                <div class="book-button" id="psalmsToggleButton55">Chapter 55</div>

                <div class="book-button" id="psalmsToggleButton56">Chapter 56</div>

                <div class="book-button" id="psalmsToggleButton57">Chapter 57</div>

                <div class="book-button" id="psalmsToggleButton58">Chapter 58</div>

                <div class="book-button" id="psalmsToggleButton59">Chapter 59</div>

                <div class="book-button" id="psalmsToggleButton60">Chapter 60</div>

                <div class="book-button" id="psalmsToggleButton61">Chapter 61</div>

                <div class="book-button" id="psalmsToggleButton62">Chapter 62</div>

                <div class="book-button" id="psalmsToggleButton63">Chapter 63</div>

                <div class="book-button" id="psalmsToggleButton64">Chapter 64</div>

                <div class="book-button" id="psalmsToggleButton65">Chapter 65</div>

                <div class="book-button" id="psalmsToggleButton66">Chapter 66</div>

                <div class="book-button" id="psalmsToggleButton67">Chapter 67</div>

                <div class="book-button" id="psalmsToggleButton68">Chapter 68</div>

                <div class="book-button" id="psalmsToggleButton69">Chapter 69</div>

                <div class="book-button" id="psalmsToggleButton70">Chapter 70</div>

                <div class="book-button" id="psalmsToggleButton71">Chapter 71</div>

                <div class="book-button" id="psalmsToggleButton72">Chapter 72</div>

                <div class="book-button" id="psalmsToggleButton73">Chapter 73</div>

                <div class="book-button" id="psalmsToggleButton74">Chapter 74</div>

                <div class="book-button" id="psalmsToggleButton75">Chapter 75</div>

                <div class="book-button" id="psalmsToggleButton76">Chapter 76</div>

                <div class="book-button" id="psalmsToggleButton77">Chapter 77</div>

                <div class="book-button" id="psalmsToggleButton78">Chapter 78</div>

                <div class="book-button" id="psalmsToggleButton79">Chapter 79</div>

                <div class="book-button" id="psalmsToggleButton80">Chapter 80</div>

                <div class="book-button" id="psalmsToggleButton81">Chapter 81</div>

                <div class="book-button" id="psalmsToggleButton82">Chapter 82</div>

                <div class="book-button" id="psalmsToggleButton83">Chapter 83</div>

                <div class="book-button" id="psalmsToggleButton84">Chapter 84</div>

                <div class="book-button" id="psalmsToggleButton85">Chapter 85</div>

                <div class="book-button" id="psalmsToggleButton86">Chapter 86</div>

                <div class="book-button" id="psalmsToggleButton87">Chapter 87</div>

                <div class="book-button" id="psalmsToggleButton88">Chapter 88</div>

                <div class="book-button" id="psalmsToggleButton89">Chapter 89</div>

                <div class="book-button" id="psalmsToggleButton90">Chapter 90</div>

                <div class="book-button" id="psalmsToggleButton91">Chapter 91</div>

                <div class="book-button" id="psalmsToggleButton92">Chapter 92</div>

                <div class="book-button" id="psalmsToggleButton93">Chapter 93</div>

                <div class="book-button" id="psalmsToggleButton94">Chapter 94</div>

                <div class="book-button" id="psalmsToggleButton95">Chapter 95</div>

                <div class="book-button" id="psalmsToggleButton96">Chapter 96</div>

                <div class="book-button" id="psalmsToggleButton97">Chapter 97</div>

                <div class="book-button" id="psalmsToggleButton98">Chapter 98</div>

                <div class="book-button" id="psalmsToggleButton99">Chapter 99</div>

                <div class="book-button" id="psalmsToggleButton100">Chapter 100</div>

                <div class="book-button" id="psalmsToggleButton101">Chapter 101</div>

                <div class="book-button" id="psalmsToggleButton102">Chapter 102</div>

                <div class="book-button" id="psalmsToggleButton103">Chapter 103</div>

                <div class="book-button" id="psalmsToggleButton104">Chapter 104</div>

                <div class="book-button" id="psalmsToggleButton105">Chapter 105</div>

                <div class="book-button" id="psalmsToggleButton106">Chapter 106</div>

                <div class="book-button" id="psalmsToggleButton107">Chapter 107</div>

                <div class="book-button" id="psalmsToggleButton108">Chapter 108</div>

                <div class="book-button" id="psalmsToggleButton109">Chapter 109</div>

                <div class="book-button" id="psalmsToggleButton110">Chapter 110</div>

                <div class="book-button" id="psalmsToggleButton111">Chapter 111</div>

                <div class="book-button" id="psalmsToggleButton112">Chapter 112</div>

                <div class="book-button" id="psalmsToggleButton113">Chapter 113</div>

                <div class="book-button" id="psalmsToggleButton114">Chapter 114</div>

                <div class="book-button" id="psalmsToggleButton115">Chapter 115</div>

                <div class="book-button" id="psalmsToggleButton116">Chapter 116</div>

                <div class="book-button" id="psalmsToggleButton117">Chapter 117</div>

                <div class="book-button" id="psalmsToggleButton118">Chapter 118</div>

                <div class="book-button" id="psalmsToggleButton119">Chapter 119</div>

                <div class="book-button" id="psalmsToggleButton120">Chapter 120</div>

                <div class="book-button" id="psalmsToggleButton121">Chapter 121</div>

                <div class="book-button" id="psalmsToggleButton122">Chapter 122</div>

                <div class="book-button" id="psalmsToggleButton123">Chapter 123</div>

                <div class="book-button" id="psalmsToggleButton124">Chapter 124</div>

                <div class="book-button" id="psalmsToggleButton125">Chapter 125</div>

                <div class="book-button" id="psalmsToggleButton126">Chapter 126</div>

                <div class="book-button" id="psalmsToggleButton127">Chapter 127</div>

                <div class="book-button" id="psalmsToggleButton128">Chapter 128</div>

                <div class="book-button" id="psalmsToggleButton129">Chapter 129</div>

                <div class="book-button" id="psalmsToggleButton130">Chapter 130</div>

                <div class="book-button" id="psalmsToggleButton131">Chapter 131</div>

                <div class="book-button" id="psalmsToggleButton132">Chapter 132</div>

                <div class="book-button" id="psalmsToggleButton133">Chapter 133</div>

                <div class="book-button" id="psalmsToggleButton134">Chapter 134</div>

                <div class="book-button" id="psalmsToggleButton135">Chapter 135</div>

                <div class="book-button" id="psalmsToggleButton136">Chapter 136</div>

                <div class="book-button" id="psalmsToggleButton137">Chapter 137</div>

                <div class="book-button" id="psalmsToggleButton138">Chapter 138</div>

                <div class="book-button" id="psalmsToggleButton139">Chapter 139</div>

                <div class="book-button" id="psalmsToggleButton140">Chapter 140</div>

                <div class="book-button" id="psalmsToggleButton141">Chapter 141</div>

                <div class="book-button" id="psalmsToggleButton142">Chapter 142</div>

                <div class="book-button" id="psalmsToggleButton143">Chapter 143</div>

                <div class="book-button" id="psalmsToggleButton144">Chapter 144</div>

                <div class="book-button" id="psalmsToggleButton145">Chapter 145</div>

                <div class="book-button" id="psalmsToggleButton146">Chapter 146</div>

                <div class="book-button" id="psalmsToggleButton147">Chapter 147</div>

                <div class="book-button" id="psalmsToggleButton148">Chapter 148</div>

                <div class="book-button" id="psalmsToggleButton149">Chapter 149</div>

                <div class="book-button" id="psalmsToggleButton150">Chapter 150</div>

            </div>

</section>

<section id="Proverbs-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Proverbs
    </header>

    <div class="old-testament-large-circle">
    
        <div id="proverbsPercentage" class="totalPercentage">0%</div>

            <p>of Proverbs</p>

    </div>

    <script>
            $(document).ready(function(){
                $("#proverbs-button").click(function(){
                    $("#old-testament").fadeOut(300);
                    $("#home-section").fadeOut(300);
                    $("#Proverbs-Chapters").fadeIn(300);
                    $('html, body').animate({scrollTop:100}, 500);
                });
            });

        </script>

        <script>
            $(document).ready(function(){
                $("#back-btn-proverbs").click(function(){
                    $("#Proverbs-Chapters").fadeOut(300);
                    $("#old-testament").fadeIn(300);
                    $('html, body').animate({scrollTop:100}, 500);
                });
            });

    </script>

    <button id="back-btn-proverbs" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="proverbsToggleButton1">Chapter 1</div>

        <div class="book-button" id="proverbsToggleButton2">Chapter 2</div>

        <div class="book-button" id="proverbsToggleButton3">Chapter 3</div>

        <div class="book-button" id="proverbsToggleButton4">Chapter 4</div>

        <div class="book-button" id="proverbsToggleButton5">Chapter 5</div>

        <div class="book-button" id="proverbsToggleButton6">Chapter 6</div>

        <div class="book-button" id="proverbsToggleButton7">Chapter 7</div>

        <div class="book-button" id="proverbsToggleButton8">Chapter 8</div>

        <div class="book-button" id="proverbsToggleButton9">Chapter 9</div>

        <div class="book-button" id="proverbsToggleButton10">Chapter 10</div>

        <div class="book-button" id="proverbsToggleButton11">Chapter 11</div>

        <div class="book-button" id="proverbsToggleButton12">Chapter 12</div>

        <div class="book-button" id="proverbsToggleButton13">Chapter 13</div>

        <div class="book-button" id="proverbsToggleButton14">Chapter 14</div>

        <div class="book-button" id="proverbsToggleButton15">Chapter 15</div>

        <div class="book-button" id="proverbsToggleButton16">Chapter 16</div>

        <div class="book-button" id="proverbsToggleButton17">Chapter 17</div>

        <div class="book-button" id="proverbsToggleButton18">Chapter 18</div>

        <div class="book-button" id="proverbsToggleButton19">Chapter 19</div>

        <div class="book-button" id="proverbsToggleButton20">Chapter 20</div>

        <div class="book-button" id="proverbsToggleButton21">Chapter 21</div>

        <div class="book-button" id="proverbsToggleButton22">Chapter 22</div>

        <div class="book-button" id="proverbsToggleButton23">Chapter 23</div>

        <div class="book-button" id="proverbsToggleButton24">Chapter 24</div>

        <div class="book-button" id="proverbsToggleButton25">Chapter 25</div>

        <div class="book-button" id="proverbsToggleButton26">Chapter 26</div>

        <div class="book-button" id="proverbsToggleButton27">Chapter 27</div>

        <div class="book-button" id="proverbsToggleButton28">Chapter 28</div>

        <div class="book-button" id="proverbsToggleButton29">Chapter 29</div>

        <div class="book-button" id="proverbsToggleButton30">Chapter 30</div>

        <div class="book-button" id="proverbsToggleButton31">Chapter 31</div>



    </div>



</section>


<section id="Ecclesiastes-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Ecclesiastes
    </header>

    <div class="old-testament-large-circle">
    
        <div id="ecclesiastesPercentage" class="totalPercentage">0%</div>

            <p>of Ecclesiastes</p>

    </div>

    <script>
            $(document).ready(function(){
                $("#ecclesiastes-button").click(function(){
                    $("#old-testament").fadeOut(300);
                    $("#home-section").fadeOut(300);
                    $("#Ecclesiastes-Chapters").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });

        </script>

        <script>
            $(document).ready(function(){
                $("#back-btn-ecclesiastes").click(function(){
                    $("#Ecclesiastes-Chapters").fadeOut(300);
                    $("#old-testament").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });

    </script>

    <button id="back-btn-ecclesiastes" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="ecclesiastesToggleButton1">Chapter 1</div>

        <div class="book-button" id="ecclesiastesToggleButton2">Chapter 2</div>

        <div class="book-button" id="ecclesiastesToggleButton3">Chapter 3</div>

        <div class="book-button" id="ecclesiastesToggleButton4">Chapter 4</div>

        <div class="book-button" id="ecclesiastesToggleButton5">Chapter 5</div>

        <div class="book-button" id="ecclesiastesToggleButton6">Chapter 6</div>

        <div class="book-button" id="ecclesiastesToggleButton7">Chapter 7</div>

        <div class="book-button" id="ecclesiastesToggleButton8">Chapter 8</div>

        <div class="book-button" id="ecclesiastesToggleButton9">Chapter 9</div>

        <div class="book-button" id="ecclesiastesToggleButton10">Chapter 10</div>

        <div class="book-button" id="ecclesiastesToggleButton11">Chapter 11</div>

        <div class="book-button" id="ecclesiastesToggleButton12">Chapter 12</div>

        </div>

</section>


<section id="Song-of-Solomon-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Song of Solomon
    </header>

    <div class="old-testament-large-circle">
    
        <div id="songofsolomonPercentage" class="totalPercentage">0%</div>

            <p>of Song of Solomon</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#songofsolomon-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Song-of-Solomon-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-songofsolomon").click(function(){
                $("#Song-of-Solomon-Chapters").fadeOut(300);
                $("#old-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-songofsolomon" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="songofsolomonToggleButton1">Chapter 1</div>

        <div class="book-button" id="songofsolomonToggleButton2">Chapter 2</div>

        <div class="book-button" id="songofsolomonToggleButton3">Chapter 3</div>

        <div class="book-button" id="songofsolomonToggleButton4">Chapter 4</div>

        <div class="book-button" id="songofsolomonToggleButton5">Chapter 5</div>

        <div class="book-button" id="songofsolomonToggleButton6">Chapter 6</div>

        <div class="book-button" id="songofsolomonToggleButton7">Chapter 7</div>

        <div class="book-button" id="songofsolomonToggleButton8">Chapter 8</div>

        </div>

</section>

<section id="Isaiah-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Isaiah
    </header>

    <div class="old-testament-large-circle">
    
        <div id="isaiahPercentage" class="totalPercentage">0%</div>

            <p>of Isaiah</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#isaiah-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Isaiah-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-isaiah").click(function(){
                $("#Isaiah-Chapters").fadeOut(300);
                $("#old-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-isaiah" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="isaiahToggleButton1">Chapter 1</div>

        <div class="book-button" id="isaiahToggleButton2">Chapter 2</div>

        <div class="book-button" id="isaiahToggleButton3">Chapter 3</div>

        <div class="book-button" id="isaiahToggleButton4">Chapter 4</div>

        <div class="book-button" id="isaiahToggleButton5">Chapter 5</div>

        <div class="book-button" id="isaiahToggleButton6">Chapter 6</div>

        <div class="book-button" id="isaiahToggleButton7">Chapter 7</div>

        <div class="book-button" id="isaiahToggleButton8">Chapter 8</div>

        <div class="book-button" id="isaiahToggleButton9">Chapter 9</div>

        <div class="book-button" id="isaiahToggleButton10">Chapter 10</div>

        <div class="book-button" id="isaiahToggleButton11">Chapter 11</div>

        <div class="book-button" id="isaiahToggleButton12">Chapter 12</div>

        <div class="book-button" id="isaiahToggleButton13">Chapter 13</div>

        <div class="book-button" id="isaiahToggleButton14">Chapter 14</div>

        <div class="book-button" id="isaiahToggleButton15">Chapter 15</div>

        <div class="book-button" id="isaiahToggleButton16">Chapter 16</div>

        <div class="book-button" id="isaiahToggleButton17">Chapter 17</div>

        <div class="book-button" id="isaiahToggleButton18">Chapter 18</div>

        <div class="book-button" id="isaiahToggleButton19">Chapter 19</div>

        <div class="book-button" id="isaiahToggleButton20">Chapter 20</div>

        <div class="book-button" id="isaiahToggleButton21">Chapter 21</div>

        <div class="book-button" id="isaiahToggleButton22">Chapter 22</div>

        <div class="book-button" id="isaiahToggleButton23">Chapter 23</div>

        <div class="book-button" id="isaiahToggleButton24">Chapter 24</div>

        <div class="book-button" id="isaiahToggleButton25">Chapter 25</div>

        <div class="book-button" id="isaiahToggleButton26">Chapter 26</div>

        <div class="book-button" id="isaiahToggleButton27">Chapter 27</div>

        <div class="book-button" id="isaiahToggleButton28">Chapter 28</div>

        <div class="book-button" id="isaiahToggleButton29">Chapter 29</div>

        <div class="book-button" id="isaiahToggleButton30">Chapter 30</div>

        <div class="book-button" id="isaiahToggleButton31">Chapter 31</div>

        <div class="book-button" id="isaiahToggleButton32">Chapter 32</div>

        <div class="book-button" id="isaiahToggleButton33">Chapter 33</div>

        <div class="book-button" id="isaiahToggleButton34">Chapter 34</div>

        <div class="book-button" id="isaiahToggleButton35">Chapter 35</div>

        <div class="book-button" id="isaiahToggleButton36">Chapter 36</div>

        <div class="book-button" id="isaiahToggleButton37">Chapter 37</div>

        <div class="book-button" id="isaiahToggleButton38">Chapter 38</div>

        <div class="book-button" id="isaiahToggleButton39">Chapter 39</div>

        <div class="book-button" id="isaiahToggleButton40">Chapter 40</div>

        <div class="book-button" id="isaiahToggleButton41">Chapter 41</div>

        <div class="book-button" id="isaiahToggleButton42">Chapter 42</div>

        <div class="book-button" id="isaiahToggleButton43">Chapter 43</div>

        <div class="book-button" id="isaiahToggleButton44">Chapter 44</div>

        <div class="book-button" id="isaiahToggleButton45">Chapter 45</div>

        <div class="book-button" id="isaiahToggleButton46">Chapter 46</div>

        <div class="book-button" id="isaiahToggleButton47">Chapter 47</div>

        <div class="book-button" id="isaiahToggleButton48">Chapter 48</div>

        <div class="book-button" id="isaiahToggleButton49">Chapter 49</div>

        <div class="book-button" id="isaiahToggleButton50">Chapter 50</div>

        <div class="book-button" id="isaiahToggleButton51">Chapter 51</div>

        <div class="book-button" id="isaiahToggleButton52">Chapter 52</div>

        <div class="book-button" id="isaiahToggleButton53">Chapter 53</div>

        <div class="book-button" id="isaiahToggleButton54">Chapter 54</div>

        <div class="book-button" id="isaiahToggleButton55">Chapter 55</div>

        <div class="book-button" id="isaiahToggleButton56">Chapter 56</div>

        <div class="book-button" id="isaiahToggleButton57">Chapter 57</div>

        <div class="book-button" id="isaiahToggleButton58">Chapter 58</div>

        <div class="book-button" id="isaiahToggleButton59">Chapter 59</div>
        
        <div class="book-button" id="isaiahToggleButton60">Chapter 60</div>

        <div class="book-button" id="isaiahToggleButton61">Chapter 61</div>

        <div class="book-button" id="isaiahToggleButton62">Chapter 62</div>

        <div class="book-button" id="isaiahToggleButton63">Chapter 63</div>

        <div class="book-button" id="isaiahToggleButton64">Chapter 64</div>

        <div class="book-button" id="isaiahToggleButton65">Chapter 65</div>

        <div class="book-button" id="isaiahToggleButton66">Chapter 66</div>

    </div>

</section>

<section id="Jeremiah-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Jeremiah
    </header>

    <div class="old-testament-large-circle">
    
        <div id="jeremiahPercentage" class="totalPercentage">0%</div>

            <p>of Jeremiah</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#jeremiah-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Jeremiah-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-jeremiah").click(function(){
                $("#Jeremiah-Chapters").fadeOut(300);
                $("#old-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-jeremiah" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="jeremiahToggleButton1">Chapter 1</div>

        <div class="book-button" id="jeremiahToggleButton2">Chapter 2</div>

        <div class="book-button" id="jeremiahToggleButton3">Chapter 3</div>

        <div class="book-button" id="jeremiahToggleButton4">Chapter 4</div>

        <div class="book-button" id="jeremiahToggleButton5">Chapter 5</div>

        <div class="book-button" id="jeremiahToggleButton6">Chapter 6</div>

        <div class="book-button" id="jeremiahToggleButton7">Chapter 7</div>

        <div class="book-button" id="jeremiahToggleButton8">Chapter 8</div>

        <div class="book-button" id="jeremiahToggleButton9">Chapter 9</div>

        <div class="book-button" id="jeremiahToggleButton10">Chapter 10</div>

        <div class="book-button" id="jeremiahToggleButton11">Chapter 11</div>

        <div class="book-button" id="jeremiahToggleButton12">Chapter 12</div>

        <div class="book-button" id="jeremiahToggleButton13">Chapter 13</div>

        <div class="book-button" id="jeremiahToggleButton14">Chapter 14</div>

        <div class="book-button" id="jeremiahToggleButton15">Chapter 15</div>

        <div class="book-button" id="jeremiahToggleButton16">Chapter 16</div>

        <div class="book-button" id="jeremiahToggleButton17">Chapter 17</div>

        <div class="book-button" id="jeremiahToggleButton18">Chapter 18</div>

        <div class="book-button" id="jeremiahToggleButton19">Chapter 19</div>

        <div class="book-button" id="jeremiahToggleButton20">Chapter 20</div>

        <div class="book-button" id="jeremiahToggleButton21">Chapter 21</div>

        <div class="book-button" id="jeremiahToggleButton22">Chapter 22</div>

        <div class="book-button" id="jeremiahToggleButton23">Chapter 23</div>

        <div class="book-button" id="jeremiahToggleButton24">Chapter 24</div>

        <div class="book-button" id="jeremiahToggleButton25">Chapter 25</div>

        <div class="book-button" id="jeremiahToggleButton26">Chapter 26</div>

        <div class="book-button" id="jeremiahToggleButton27">Chapter 27</div>

        <div class="book-button" id="jeremiahToggleButton28">Chapter 28</div>

        <div class="book-button" id="jeremiahToggleButton29">Chapter 29</div>

        <div class="book-button" id="jeremiahToggleButton30">Chapter 30</div>

        <div class="book-button" id="jeremiahToggleButton31">Chapter 31</div>

        <div class="book-button" id="jeremiahToggleButton32">Chapter 32</div>

        <div class="book-button" id="jeremiahToggleButton33">Chapter 33</div>

        <div class="book-button" id="jeremiahToggleButton34">Chapter 34</div>

        <div class="book-button" id="jeremiahToggleButton35">Chapter 35</div>

        <div class="book-button" id="jeremiahToggleButton36">Chapter 36</div>

        <div class="book-button" id="jeremiahToggleButton37">Chapter 37</div>

        <div class="book-button" id="jeremiahToggleButton38">Chapter 38</div>

        <div class="book-button" id="jeremiahToggleButton39">Chapter 39</div>

        <div class="book-button" id="jeremiahToggleButton40">Chapter 40</div>

        <div class="book-button" id="jeremiahToggleButton41">Chapter 41</div>

        <div class="book-button" id="jeremiahToggleButton42">Chapter 42</div>

        <div class="book-button" id="jeremiahToggleButton43">Chapter 43</div>

        <div class="book-button" id="jeremiahToggleButton44">Chapter 44</div>

        <div class="book-button" id="jeremiahToggleButton45">Chapter 45</div>

        <div class="book-button" id="jeremiahToggleButton46">Chapter 46</div>

        <div class="book-button" id="jeremiahToggleButton47">Chapter 47</div>

        <div class="book-button" id="jeremiahToggleButton48">Chapter 48</div>

        <div class="book-button" id="jeremiahToggleButton49">Chapter 49</div>

        <div class="book-button" id="jeremiahToggleButton50">Chapter 50</div>

        <div class="book-button" id="jeremiahToggleButton51">Chapter 51</div>

        <div class="book-button" id="jeremiahToggleButton52">Chapter 52</div>

    </div>

</section>


<section id="Lamentations-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Lamentations
    </header>

    <div class="old-testament-large-circle">
    
        <div id="lamentationsPercentage" class="totalPercentage">0%</div>

            <p>of Lamentations</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#lamentations-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Lamentations-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-lamentations").click(function(){
                $("#Lamentations-Chapters").fadeOut(300);
                $("#old-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-lamentations" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="lamentationsToggleButton1">Chapter 1</div>

        <div class="book-button" id="lamentationsToggleButton2">Chapter 2</div>

        <div class="book-button" id="lamentationsToggleButton3">Chapter 3</div>

        <div class="book-button" id="lamentationsToggleButton4">Chapter 4</div>

        <div class="book-button" id="lamentationsToggleButton5">Chapter 5</div>

    </div>

</section>


<section id="Ezekiel-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Ezekiel
    </header>

    <div class="old-testament-large-circle">

        <div id="ezekielPercentage" class="totalPercentage">0%</div>

            <p>of Ezekiel</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#ezekiel-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Ezekiel-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-ezekiel").click(function(){
                $("#Ezekiel-Chapters").fadeOut(300);
                $("#old-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-ezekiel" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

            <div class="book-button" id="ezekielToggleButton1">Chapter 1</div>

            <div class="book-button" id="ezekielToggleButton2">Chapter 2</div>

            <div class="book-button" id="ezekielToggleButton3">Chapter 3</div>

            <div class="book-button" id="ezekielToggleButton4">Chapter 4</div>

            <div class="book-button" id="ezekielToggleButton5">Chapter 5</div>

            <div class="book-button" id="ezekielToggleButton6">Chapter 6</div>

            <div class="book-button" id="ezekielToggleButton7">Chapter 7</div>

            <div class="book-button" id="ezekielToggleButton8">Chapter 8</div>

            <div class="book-button" id="ezekielToggleButton9">Chapter 9</div>

            <div class="book-button" id="ezekielToggleButton10">Chapter 10</div>

            <div class="book-button" id="ezekielToggleButton11">Chapter 11</div>

            <div class="book-button" id="ezekielToggleButton12">Chapter 12</div>

            <div class="book-button" id="ezekielToggleButton13">Chapter 13</div>

            <div class="book-button" id="ezekielToggleButton14">Chapter 14</div>

            <div class="book-button" id="ezekielToggleButton15">Chapter 15</div>

            <div class="book-button" id="ezekielToggleButton16">Chapter 16</div>

            <div class="book-button" id="ezekielToggleButton17">Chapter 17</div>

            <div class="book-button" id="ezekielToggleButton18">Chapter 18</div>

            <div class="book-button" id="ezekielToggleButton19">Chapter 19</div>

            <div class="book-button" id="ezekielToggleButton20">Chapter 20</div>

            <div class="book-button" id="ezekielToggleButton21">Chapter 21</div>

            <div class="book-button" id="ezekielToggleButton22">Chapter 22</div>

            <div class="book-button" id="ezekielToggleButton23">Chapter 23</div>

            <div class="book-button" id="ezekielToggleButton24">Chapter 24</div>

            <div class="book-button" id="ezekielToggleButton25">Chapter 25</div>

            <div class="book-button" id="ezekielToggleButton26">Chapter 26</div>

            <div class="book-button" id="ezekielToggleButton27">Chapter 27</div>

            <div class="book-button" id="ezekielToggleButton28">Chapter 28</div>

            <div class="book-button" id="ezekielToggleButton29">Chapter 29</div>

            <div class="book-button" id="ezekielToggleButton30">Chapter 30</div>

            <div class="book-button" id="ezekielToggleButton31">Chapter 31</div>

            <div class="book-button" id="ezekielToggleButton32">Chapter 32</div>

            <div class="book-button" id="ezekielToggleButton33">Chapter 33</div>

            <div class="book-button" id="ezekielToggleButton34">Chapter 34</div>

            <div class="book-button" id="ezekielToggleButton35">Chapter 35</div>

            <div class="book-button" id="ezekielToggleButton36">Chapter 36</div>

            <div class="book-button" id="ezekielToggleButton37">Chapter 37</div>

            <div class="book-button" id="ezekielToggleButton38">Chapter 38</div>

            <div class="book-button" id="ezekielToggleButton39">Chapter 39</div>

            <div class="book-button" id="ezekielToggleButton40">Chapter 40</div>

            <div class="book-button" id="ezekielToggleButton41">Chapter 41</div>

            <div class="book-button" id="ezekielToggleButton42">Chapter 42</div>

            <div class="book-button" id="ezekielToggleButton43">Chapter 43</div>

            <div class="book-button" id="ezekielToggleButton44">Chapter 44</div>

            <div class="book-button" id="ezekielToggleButton45">Chapter 45</div>

            <div class="book-button" id="ezekielToggleButton46">Chapter 46</div>

            <div class="book-button" id="ezekielToggleButton47">Chapter 47</div>

            <div class="book-button" id="ezekielToggleButton48">Chapter 48</div>

    </div>


</section>


<section id="Daniel-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Daniel
    </header>

    <div class="old-testament-large-circle">

        <div id="danielPercentage" class="totalPercentage">0%</div>

            <p>of Daniel</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#daniel-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Daniel-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-daniel").click(function(){
                $("#Daniel-Chapters").fadeOut(300);
                $("#old-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-daniel" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="danielToggleButton1">Chapter 1</div>

        <div class="book-button" id="danielToggleButton2">Chapter 2</div>

        <div class="book-button" id="danielToggleButton3">Chapter 3</div>

        <div class="book-button" id="danielToggleButton4">Chapter 4</div>

        <div class="book-button" id="danielToggleButton5">Chapter 5</div>

        <div class="book-button" id="danielToggleButton6">Chapter 6</div>

        <div class="book-button" id="danielToggleButton7">Chapter 7</div>

        <div class="book-button" id="danielToggleButton8">Chapter 8</div>

        <div class="book-button" id="danielToggleButton9">Chapter 9</div>

        <div class="book-button" id="danielToggleButton10">Chapter 10</div>

        <div class="book-button" id="danielToggleButton11">Chapter 11</div>

        <div class="book-button" id="danielToggleButton12">Chapter 12</div>




    </div>

</section>


<section id="Hosea-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Hosea
    </header>

    <div class="old-testament-large-circle">

        <div id="hoseaPercentage" class="totalPercentage">0%</div>

            <p>of Hosea</p>

    </div>

    <script>
            $(document).ready(function(){
                $("#hosea-button").click(function(){
                    $("#old-testament").fadeOut(300);
                    $("#home-section").fadeOut(300);
                    $("#Hosea-Chapters").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });

            </script>

            <script>
            $(document).ready(function(){
                $("#back-btn-hosea").click(function(){
                    $("#Hosea-Chapters").fadeOut(300);
                    $("#old-testament").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });

    </script>

    <button id="back-btn-hosea" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="hoseaToggleButton1">Chapter 1</div>

        <div class="book-button" id="hoseaToggleButton2">Chapter 2</div>

        <div class="book-button" id="hoseaToggleButton3">Chapter 3</div>

        <div class="book-button" id="hoseaToggleButton4">Chapter 4</div>

        <div class="book-button" id="hoseaToggleButton5">Chapter 5</div>

        <div class="book-button" id="hoseaToggleButton6">Chapter 6</div>

        <div class="book-button" id="hoseaToggleButton7">Chapter 7</div>

        <div class="book-button" id="hoseaToggleButton8">Chapter 8</div>

        <div class="book-button" id="hoseaToggleButton9">Chapter 9</div>

        <div class="book-button" id="hoseaToggleButton10">Chapter 10</div>

        <div class="book-button" id="hoseaToggleButton11">Chapter 11</div>

        <div class="book-button" id="hoseaToggleButton12">Chapter 12</div>

        <div class="book-button" id="hoseaToggleButton13">Chapter 13</div>

        <div class="book-button" id="hoseaToggleButton14">Chapter 14</div>

    </div>

</section>


<section id="Joel-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Joel
    </header>

    <div class="old-testament-large-circle">

        <div id="joelPercentage" class="totalPercentage">0%</div>

            <p>of Joel</p>

    </div>

    <script>
            $(document).ready(function(){
                $("#joel-button").click(function(){
                    $("#old-testament").fadeOut(300);
                    $("#home-section").fadeOut(300);
                    $("#Joel-Chapters").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });

        </script>

        <script>
            $(document).ready(function(){
                $("#back-btn-joel").click(function(){
                    $("#Joel-Chapters").fadeOut(300);
                    $("#old-testament").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });

    </script>

    <button id="back-btn-joel" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="joelToggleButton1">Chapter 1</div>

        <div class="book-button" id="joelToggleButton2">Chapter 2</div>

        <div class="book-button" id="joelToggleButton3">Chapter 3</div>

    </div>

</section>


<section id="Amos-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Amos
    </header>

    <div class="old-testament-large-circle">

        <div id="amosPercentage" class="totalPercentage">0%</div>

            <p>of Amos</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#amos-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Amos-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-amos").click(function(){
                $("#Amos-Chapters").fadeOut(300);
                $("#old-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-amos" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="amosToggleButton1">Chapter 1</div>

        <div class="book-button" id="amosToggleButton2">Chapter 2</div>

        <div class="book-button" id="amosToggleButton3">Chapter 3</div>

        <div class="book-button" id="amosToggleButton4">Chapter 4</div>

        <div class="book-button" id="amosToggleButton5">Chapter 5</div>

        <div class="book-button" id="amosToggleButton6">Chapter 6</div>

        <div class="book-button" id="amosToggleButton7">Chapter 7</div>

        <div class="book-button" id="amosToggleButton8">Chapter 8</div>

        <div class="book-button" id="amosToggleButton9">Chapter 9</div>

    </div>

</section>


<section id="Obadiah-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Obadiah
    </header>

    <div class="old-testament-large-circle">

        <div id="obadiahPercentage" class="totalPercentage">0%</div>

            <p>of Obadiah</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#obadiah-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Obadiah-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-obadiah").click(function(){
                $("#Obadiah-Chapters").fadeOut(300);
                $("#old-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-obadiah" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="obadiahToggleButton1">Chapter 1</div>

    </div>  

</section>


<section id="Jonah-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Jonah
    </header>

    <div class="old-testament-large-circle">
    
        <div id="jonahPercentage" class="totalPercentage">0%</div>

            <p>of Jonah</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#jonah-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Jonah-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-jonah").click(function(){
                $("#Jonah-Chapters").fadeOut(300);
                $("#old-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-jonah" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="jonahToggleButton1">Chapter 1</div>

        <div class="book-button" id="jonahToggleButton2">Chapter 2</div>

        <div class="book-button" id="jonahToggleButton3">Chapter 3</div>

        <div class="book-button" id="jonahToggleButton4">Chapter 4</div>

    </div>

</section>


<section id="Micah-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Micah
    </header>
    
    <div class="old-testament-large-circle">
    
        <div id="micahPercentage" class="totalPercentage">0%</div>

            <p>of Micah</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#micah-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Micah-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-micah").click(function(){
                $("#Micah-Chapters").fadeOut(300);
                $("#old-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-micah" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="micahToggleButton1">Chapter 1</div>

        <div class="book-button" id="micahToggleButton2">Chapter 2</div>

        <div class="book-button" id="micahToggleButton3">Chapter 3</div>

        <div class="book-button" id="micahToggleButton4">Chapter 4</div>

        <div class="book-button" id="micahToggleButton5">Chapter 5</div>

        <div class="book-button" id="micahToggleButton6">Chapter 6</div>

        <div class="book-button" id="micahToggleButton7">Chapter 7</div>

    </div>

</section>


<section id="Nahum-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Nahum
    </header>
    
    <div class="old-testament-large-circle">
    
        <div id="nahumPercentage" class="totalPercentage">0%</div>

            <p>of Nahum</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#nahum-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Nahum-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-nahum").click(function(){
                $("#Nahum-Chapters").fadeOut(300);
                $("#old-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-nahum" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="nahumToggleButton1">Chapter 1</div>

        <div class="book-button" id="nahumToggleButton2">Chapter 2</div>

        <div class="book-button" id="nahumToggleButton3">Chapter 3</div>

    </div>

</section>


<section id="Habakkuk-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Habakkuk
    </header>
    
    <div class="old-testament-large-circle">
    
        <div id="habakkukPercentage" class="totalPercentage">0%</div>

            <p>of Habakkuk</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#habakkuk-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Habakkuk-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-habakkuk").click(function(){
                $("#Habakkuk-Chapters").fadeOut(300);
                $("#old-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-habakkuk" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="habakkukToggleButton1">Chapter 1</div>

        <div class="book-button" id="habakkukToggleButton2">Chapter 2</div>

        <div class="book-button" id="habakkukToggleButton3">Chapter 3</div>

    </div>  

</section>


<section id="Zephaniah-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Zephaniah
    </header>


    
    <div class="old-testament-large-circle">
    
        <div id="zephaniahPercentage" class="totalPercentage">0%</div>

            <p>of Zephaniah</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#zephaniah-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Zephaniah-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-zephaniah").click(function(){
                $("#Zephaniah-Chapters").fadeOut(300);
                $("#old-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-zephaniah" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="zephaniahToggleButton1">Chapter 1</div>

        <div class="book-button" id="zephaniahToggleButton2">Chapter 2</div>

        <div class="book-button" id="zephaniahToggleButton3">Chapter 3</div>

    </div>

</section>


<section id="Haggai-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Haggai
    </header>

    <div class="old-testament-large-circle">
    
        <div id="haggaiPercentage" class="totalPercentage">0%</div>

            <p>of Haggai</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#haggai-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Haggai-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-haggai").click(function(){
                $("#Haggai-Chapters").fadeOut(300);
                $("#old-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-haggai" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="haggaiToggleButton1">Chapter 1</div>

        <div class="book-button" id="haggaiToggleButton2">Chapter 2</div>

    </div>

</section>


<section id="Zechariah-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Zechariah
    </header>
    
    <div class="old-testament-large-circle">
    
        <div id="zechariahPercentage" class="totalPercentage">0%</div>

            <p>of Zechariah</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#zechariah-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Zechariah-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-zechariah").click(function(){
                $("#Zechariah-Chapters").fadeOut(300);
                $("#old-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-zechariah" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="zechariahToggleButton1">Chapter 1</div>

        <div class="book-button" id="zechariahToggleButton2">Chapter 2</div>

        <div class="book-button" id="zechariahToggleButton3">Chapter 3</div>

        <div class="book-button" id="zechariahToggleButton4">Chapter 4</div>

        <div class="book-button" id="zechariahToggleButton5">Chapter 5</div>

        <div class="book-button" id="zechariahToggleButton6">Chapter 6</div>

        <div class="book-button" id="zechariahToggleButton7">Chapter 7</div>

        <div class="book-button" id="zechariahToggleButton8">Chapter 8</div>

        <div class="book-button" id="zechariahToggleButton9">Chapter 9</div>

        <div class="book-button" id="zechariahToggleButton10">Chapter 10</div>

        <div class="book-button" id="zechariahToggleButton11">Chapter 11</div>

        <div class="book-button" id="zechariahToggleButton12">Chapter 12</div>

        <div class="book-button" id="zechariahToggleButton13">Chapter 13</div>

        <div class="book-button" id="zechariahToggleButton14">Chapter 14</div>

    </div>

</section>


<section id="Malachi-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Malachi
    </header>
    
    <div class="old-testament-large-circle">
    
        <div id="malachiPercentage" class="totalPercentage">0%</div>

            <p>of Malachi</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#malachi-button").click(function(){
                $("#old-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Malachi-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-malachi").click(function(){
                $("#Malachi-Chapters").fadeOut(300);
                $("#old-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-malachi" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="malachiToggleButton1">Chapter 1</div>

        <div class="book-button" id="malachiToggleButton2">Chapter 2</div>

        <div class="book-button" id="malachiToggleButton3">Chapter 3</div>

        <div class="book-button" id="malachiToggleButton4">Chapter 4</div>

    </div>

</section>















<section id="new-testament" class="the-new-testament">

    <header class="header">
        Keep reading, <?php echo $firstName; ?>!
    </header>


    <div class="progress">  
        <div class="progress-text-p">of the new testament</div>
        <div class="progress-text" id="newTestamentPercentageElement1">0%</div>
    </div>

    <script>
        $(document).ready(function(){
            $("#btn-new-testament").click(function(){
                $("#new-testament").fadeOut(300);
                $("#home-section").fadeIn(300);
            });
        });
    </script>

    <button id="btn-new-testament" type="button" class="back-button">Back</button>

    <div class="new-testament-book-grid">

        <div class="book-button" id="matthew-button">
            <a>
            <p>Matthew</p>
            </a>
        </div>

        <div class="book-button" id="mark-button">
            <a>
            <p>Mark</p>
            </a>
        </div>

        <div class="book-button" id="luke-button">
            <a>
            <p>Luke</p>
            </a>
        </div>

        <div class="book-button" id="john-button">
            <a>
            <p>John</p>
            </a>
        </div>

        <div class="book-button" id="acts-button">
            <a>
            <p>Acts</p>
            </a>
        </div>

        <div class="book-button" id="romans-button">
            <a>
            <p>Romans</p>
            </a>
        </div>

        <div class="book-button" id="first-corinthians-button">
            <a>
            <p>1 Corinthians</p>
            </a>
        </div>

        <div class="book-button" id="second-corinthians-button">
            <a>
            <p>2 Corinthians</p>
            </a>
        </div>

        <div class="book-button" id="galatians-button">
            <a>
            <p>Galatians</p>
            </a>
        </div>

        <div class="book-button" id="ephesians-button">
            <a>
            <p>Ephesians</p>
            </a>
        </div>

        <div class="book-button" id="philippians-button">
            <a>
            <p>Philippians</p>
            </a>
        </div>

        <div class="book-button" id="colossians-button">
            <a>
            <p>Colossians</p>
            </a>
        </div>

        <div class="book-button" id="first-thessalonians-button">
            <a>
            <p>1 Thessalonians</p>
            </a>
        </div>

        <div class="book-button" id="second-thessalonians-button">
            <a>
            <p>2 Thessalonians</p>
            </a>
        </div>

        <div class="book-button" id="first-timothy-button">
            <a>
            <p>1 Timothy</p>
            </a>
        </div>

        <div class="book-button" id="second-timothy-button">
            <a>
            <p>2 Timothy</p>
            </a>
        </div>

        <div class="book-button" id="titus-button">
            <a>
            <p>Titus</p>
            </a>
        </div>

        <div class="book-button" id="philemon-button">
            <a>
            <p>Philemon</p>
            </a>
        </div>

        <div class="book-button" id="hebrews-button">
            <a>
            <p>Hebrews</p>
            </a>
        </div>

        <div class="book-button" id="james-button">
            <a>
            <p>James</p>
            </a>
        </div>

        <div class="book-button" id="first-peter-button">
            <a>
            <p>1 Peter</p>
            </a>
        </div>

        <div class="book-button" id="second-peter-button">
            <a>
            <p>2 Peter</p>
            </a>
        </div>

        <div class="book-button" id="first-john-button">
            <a>
            <p>1 John</p>
            </a>
        </div>

        <div class="book-button" id="second-john-button">
            <a>
            <p>2 John</p>
            </a>
        </div>

        <div class="book-button" id="third-john-button">
            <a>
            <p>3 John</p>
            </a>
        </div>

        <div class="book-button" id="jude-button">
            <a>
            <p>Jude</p>
            </a>
        </div>

        <div class="book-button" id="revelation-button">
            <a>
            <p>Revelation</p>
            </a>
        </div>

    </div>

</section>


<section id="Matthew-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Matthew
    </header>
    
    <div class="old-testament-large-circle">
    
        <div id="matthewPercentage" class="totalPercentage">0%</div>

            <p>of Matthew</p>

    </div>

    <script>
            $(document).ready(function(){
                $("#matthew-button").click(function(){
                    $("#new-testament").fadeOut(300);
                    $("#home-section").fadeOut(300);
                    $("#Matthew-Chapters").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });

        </script>

        <script>
            $(document).ready(function(){
                $("#back-btn-matthew").click(function(){
                    $("#Matthew-Chapters").fadeOut(300);
                    $("#new-testament").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });

    </script>

    <button id="back-btn-matthew" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="matthewToggleButton1">Chapter 1</div>

        <div class="book-button" id="matthewToggleButton2">Chapter 2</div>

        <div class="book-button" id="matthewToggleButton3">Chapter 3</div>

        <div class="book-button" id="matthewToggleButton4">Chapter 4</div>

        <div class="book-button" id="matthewToggleButton5">Chapter 5</div>

        <div class="book-button" id="matthewToggleButton6">Chapter 6</div>

        <div class="book-button" id="matthewToggleButton7">Chapter 7</div>

        <div class="book-button" id="matthewToggleButton8">Chapter 8</div>

        <div class="book-button" id="matthewToggleButton9">Chapter 9</div>

        <div class="book-button" id="matthewToggleButton10">Chapter 10</div>

        <div class="book-button" id="matthewToggleButton11">Chapter 11</div>

        <div class="book-button" id="matthewToggleButton12">Chapter 12</div>

        <div class="book-button" id="matthewToggleButton13">Chapter 13</div>

        <div class="book-button" id="matthewToggleButton14">Chapter 14</div>

        <div class="book-button" id="matthewToggleButton15">Chapter 15</div>

        <div class="book-button" id="matthewToggleButton16">Chapter 16</div>

        <div class="book-button" id="matthewToggleButton17">Chapter 17</div>

        <div class="book-button" id="matthewToggleButton18">Chapter 18</div>

        <div class="book-button" id="matthewToggleButton19">Chapter 19</div>

        <div class="book-button" id="matthewToggleButton20">Chapter 20</div>

        <div class="book-button" id="matthewToggleButton21">Chapter 21</div>

        <div class="book-button" id="matthewToggleButton22">Chapter 22</div>

        <div class="book-button" id="matthewToggleButton23">Chapter 23</div>

        <div class="book-button" id="matthewToggleButton24">Chapter 24</div>

        <div class="book-button" id="matthewToggleButton25">Chapter 25</div>

        <div class="book-button" id="matthewToggleButton26">Chapter 26</div>

        <div class="book-button" id="matthewToggleButton27">Chapter 27</div>

        <div class="book-button" id="matthewToggleButton28">Chapter 28</div>

    </div>

</section>


<section id="Mark-chapters" class="chapter-grid">

    <header class="header chapter-header">
        Mark
    </header>

    <div class="old-testament-large-circle">
    
        <div id="markPercentage" class="totalPercentage">0%</div>

            <p>of Mark</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#mark-button").click(function(){
                $("#new-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Mark-chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-mark").click(function(){
                $("#Mark-chapters").fadeOut(300);
                $("#new-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });
    </script>

    <button id="back-btn-mark" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="markToggleButton1">Chapter 1</div>

        <div class="book-button" id="markToggleButton2">Chapter 2</div>

        <div class="book-button" id="markToggleButton3">Chapter 3</div>

        <div class="book-button" id="markToggleButton4">Chapter 4</div>

        <div class="book-button" id="markToggleButton5">Chapter 5</div>

        <div class="book-button" id="markToggleButton6">Chapter 6</div>

        <div class="book-button" id="markToggleButton7">Chapter 7</div>

        <div class="book-button" id="markToggleButton8">Chapter 8</div>

        <div class="book-button" id="markToggleButton9">Chapter 9</div>

        <div class="book-button" id="markToggleButton10">Chapter 10</div>

        <div class="book-button" id="markToggleButton11">Chapter 11</div>

        <div class="book-button" id="markToggleButton12">Chapter 12</div>

        <div class="book-button" id="markToggleButton13">Chapter 13</div>

        <div class="book-button" id="markToggleButton14">Chapter 14</div>

        <div class="book-button" id="markToggleButton15">Chapter 15</div>

        <div class="book-button" id="markToggleButton16">Chapter 16</div>

    </div>

</section>


<section id="Luke-chapters" class="chapter-grid">

    <header class="header chapter-header">
        Luke
    </header>

    <div class="old-testament-large-circle">
    
        <div id="lukePercentage" class="totalPercentage">0%</div>

            <p>of Luke</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#luke-button").click(function(){
                $("#new-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Luke-chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-luke").click(function(){
                $("#Luke-chapters").fadeOut(300);
                $("#new-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });
    </script>

    <button id="back-btn-luke" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="lukeToggleButton1">Chapter 1</div>

        <div class="book-button" id="lukeToggleButton2">Chapter 2</div>

        <div class="book-button" id="lukeToggleButton3">Chapter 3</div>

        <div class="book-button" id="lukeToggleButton4">Chapter 4</div>

        <div class="book-button" id="lukeToggleButton5">Chapter 5</div>

        <div class="book-button" id="lukeToggleButton6">Chapter 6</div>

        <div class="book-button" id="lukeToggleButton7">Chapter 7</div>

        <div class="book-button" id="lukeToggleButton8">Chapter 8</div>

        <div class="book-button" id="lukeToggleButton9">Chapter 9</div>

        <div class="book-button" id="lukeToggleButton10">Chapter 10</div>

        <div class="book-button" id="lukeToggleButton11">Chapter 11</div>

        <div class="book-button" id="lukeToggleButton12">Chapter 12</div>

        <div class="book-button" id="lukeToggleButton13">Chapter 13</div>

        <div class="book-button" id="lukeToggleButton14">Chapter 14</div>

        <div class="book-button" id="lukeToggleButton15">Chapter 15</div>

        <div class="book-button" id="lukeToggleButton16">Chapter 16</div>

        <div class="book-button" id="lukeToggleButton17">Chapter 17</div>

        <div class="book-button" id="lukeToggleButton18">Chapter 18</div>

        <div class="book-button" id="lukeToggleButton19">Chapter 19</div>

        <div class="book-button" id="lukeToggleButton20">Chapter 20</div>

        <div class="book-button" id="lukeToggleButton21">Chapter 21</div>

        <div class="book-button" id="lukeToggleButton22">Chapter 22</div>

        <div class="book-button" id="lukeToggleButton23">Chapter 23</div>

        <div class="book-button" id="lukeToggleButton24">Chapter 24</div>

    </div>

</section>

 
<section id="John-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        John
    </header>

    <div class="old-testament-large-circle">
    
        <div id="johnPercentage" class="totalPercentage">0%</div>

            <p>of John</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#john-button").click(function(){
                $("#new-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#John-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-john").click(function(){
                $("#John-Chapters").fadeOut(300);
                $("#new-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });
    </script>

    <button id="back-btn-john" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="johnToggleButton1">Chapter 1</div>

        <div class="book-button" id="johnToggleButton2">Chapter 2</div>

        <div class="book-button" id="johnToggleButton3">Chapter 3</div>

        <div class="book-button" id="johnToggleButton4">Chapter 4</div>

        <div class="book-button" id="johnToggleButton5">Chapter 5</div>

        <div class="book-button" id="johnToggleButton6">Chapter 6</div>

        <div class="book-button" id="johnToggleButton7">Chapter 7</div>

        <div class="book-button" id="johnToggleButton8">Chapter 8</div>

        <div class="book-button" id="johnToggleButton9">Chapter 9</div>

        <div class="book-button" id="johnToggleButton10">Chapter 10</div>

        <div class="book-button" id="johnToggleButton11">Chapter 11</div>

        <div class="book-button" id="johnToggleButton12">Chapter 12</div>

        <div class="book-button" id="johnToggleButton13">Chapter 13</div>

        <div class="book-button" id="johnToggleButton14">Chapter 14</div>

        <div class="book-button" id="johnToggleButton15">Chapter 15</div>

        <div class="book-button" id="johnToggleButton16">Chapter 16</div>

        <div class="book-button" id="johnToggleButton17">Chapter 17</div>

        <div class="book-button" id="johnToggleButton18">Chapter 18</div>

        <div class="book-button" id="johnToggleButton19">Chapter 19</div>

        <div class="book-button" id="johnToggleButton20">Chapter 20</div>

        <div class="book-button" id="johnToggleButton21">Chapter 21</div>

    </div>
</section>


<section id="Acts-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Acts
    </header>

    <div class="old-testament-large-circle">
    
        <div id="actsPercentage" class="totalPercentage">0%</div>

            <p>of Acts</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#acts-button").click(function(){
                $("#new-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Acts-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-acts").click(function(){
                $("#Acts-Chapters").fadeOut(300);
                $("#new-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-acts" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="actsToggleButton1">Chapter 1</div>

        <div class="book-button" id="actsToggleButton2">Chapter 2</div>

        <div class="book-button" id="actsToggleButton3">Chapter 3</div>

        <div class="book-button" id="actsToggleButton4">Chapter 4</div>

        <div class="book-button" id="actsToggleButton5">Chapter 5</div>

        <div class="book-button" id="actsToggleButton6">Chapter 6</div>

        <div class="book-button" id="actsToggleButton7">Chapter 7</div>

        <div class="book-button" id="actsToggleButton8">Chapter 8</div>

        <div class="book-button" id="actsToggleButton9">Chapter 9</div>

        <div class="book-button" id="actsToggleButton10">Chapter 10</div>

        <div class="book-button" id="actsToggleButton11">Chapter 11</div>

        <div class="book-button" id="actsToggleButton12">Chapter 12</div>

        <div class="book-button" id="actsToggleButton13">Chapter 13</div>

        <div class="book-button" id="actsToggleButton14">Chapter 14</div>

        <div class="book-button" id="actsToggleButton15">Chapter 15</div>

        <div class="book-button" id="actsToggleButton16">Chapter 16</div>

        <div class="book-button" id="actsToggleButton17">Chapter 17</div>

        <div class="book-button" id="actsToggleButton18">Chapter 18</div>

        <div class="book-button" id="actsToggleButton19">Chapter 19</div>

        <div class="book-button" id="actsToggleButton20">Chapter 20</div>

        <div class="book-button" id="actsToggleButton21">Chapter 21</div>

        <div class="book-button" id="actsToggleButton22">Chapter 22</div>

        <div class="book-button" id="actsToggleButton23">Chapter 23</div>

        <div class="book-button" id="actsToggleButton24">Chapter 24</div>

        <div class="book-button" id="actsToggleButton25">Chapter 25</div>

        <div class="book-button" id="actsToggleButton26">Chapter 26</div>

        <div class="book-button" id="actsToggleButton27">Chapter 27</div>

        <div class="book-button" id="actsToggleButton28">Chapter 28</div>

    </div>
    
</section>

<section id="Romans-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Romans
    </header>

    <div class="old-testament-large-circle">
    
        <div id="romansPercentage" class="totalPercentage">0%</div>

            <p>of Romans</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#romans-button").click(function(){
                $("#new-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Romans-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-romans").click(function(){
                $("#Romans-Chapters").fadeOut(300);
                $("#new-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });
    </script>

    <button id="back-btn-romans" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="romansToggleButton1">Chapter 1</div>

        <div class="book-button" id="romansToggleButton2">Chapter 2</div>

        <div class="book-button" id="romansToggleButton3">Chapter 3</div>

        <div class="book-button" id="romansToggleButton4">Chapter 4</div>

        <div class="book-button" id="romansToggleButton5">Chapter 5</div>

        <div class="book-button" id="romansToggleButton6">Chapter 6</div>

        <div class="book-button" id="romansToggleButton7">Chapter 7</div>

        <div class="book-button" id="romansToggleButton8">Chapter 8</div>

        <div class="book-button" id="romansToggleButton9">Chapter 9</div>

        <div class="book-button" id="romansToggleButton10">Chapter 10</div>

        <div class="book-button" id="romansToggleButton11">Chapter 11</div>

        <div class="book-button" id="romansToggleButton12">Chapter 12</div>

        <div class="book-button" id="romansToggleButton13">Chapter 13</div>

        <div class="book-button" id="romansToggleButton14">Chapter 14</div>

        <div class="book-button" id="romansToggleButton15">Chapter 15</div>

        <div class="book-button" id="romansToggleButton16">Chapter 16</div>

    </div>

</section>


<section id="1Corinthians-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        1 Corinthians
    </header>

    <div class="old-testament-large-circle">
    
        <div id="1corinthiansPercentage" class="totalPercentage">0%</div>

            <p>of 1 Corinthians</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#first-corinthians-button").click(function(){
                $("#new-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#1Corinthians-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-1corinthians").click(function(){
                $("#1Corinthians-Chapters").fadeOut(300);
                $("#new-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-1corinthians" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="1corinthiansToggleButton1">Chapter 1</div>

        <div class="book-button" id="1corinthiansToggleButton2">Chapter 2</div>

        <div class="book-button" id="1corinthiansToggleButton3">Chapter 3</div>

        <div class="book-button" id="1corinthiansToggleButton4">Chapter 4</div>

        <div class="book-button" id="1corinthiansToggleButton5">Chapter 5</div>

        <div class="book-button" id="1corinthiansToggleButton6">Chapter 6</div>

        <div class="book-button" id="1corinthiansToggleButton7">Chapter 7</div>

        <div class="book-button" id="1corinthiansToggleButton8">Chapter 8</div>

        <div class="book-button" id="1corinthiansToggleButton9">Chapter 9</div>

        <div class="book-button" id="1corinthiansToggleButton10">Chapter 10</div>

        <div class="book-button" id="1corinthiansToggleButton11">Chapter 11</div>

        <div class="book-button" id="1corinthiansToggleButton12">Chapter 12</div>

        <div class="book-button" id="1corinthiansToggleButton13">Chapter 13</div>

        <div class="book-button" id="1corinthiansToggleButton14">Chapter 14</div>

        <div class="book-button" id="1corinthiansToggleButton15">Chapter 15</div>

        <div class="book-button" id="1corinthiansToggleButton16">Chapter 16</div>

    </div>

</section>


<section id="2Corinthians-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        2 Corinthians
    </header>

    <div class="old-testament-large-circle">
    
        <div id="2corinthiansPercentage" class="totalPercentage">0%</div>

            <p>of 2 Corinthians</p> 

    </div>

    <script>
        $(document).ready(function(){
            $("#second-corinthians-button").click(function(){
                $("#new-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#2Corinthians-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-2corinthians").click(function(){
                $("#2Corinthians-Chapters").fadeOut(300);
                $("#new-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });
    </script>

    <button id="back-btn-2corinthians" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="2corinthiansToggleButton1">Chapter 1</div>

        <div class="book-button" id="2corinthiansToggleButton2">Chapter 2</div>

        <div class="book-button" id="2corinthiansToggleButton3">Chapter 3</div>

        <div class="book-button" id="2corinthiansToggleButton4">Chapter 4</div>

        <div class="book-button" id="2corinthiansToggleButton5">Chapter 5</div>

        <div class="book-button" id="2corinthiansToggleButton6">Chapter 6</div>

        <div class="book-button" id="2corinthiansToggleButton7">Chapter 7</div>

        <div class="book-button" id="2corinthiansToggleButton8">Chapter 8</div>

        <div class="book-button" id="2corinthiansToggleButton9">Chapter 9</div>

        <div class="book-button" id="2corinthiansToggleButton10">Chapter 10</div>

        <div class="book-button" id="2corinthiansToggleButton11">Chapter 11</div>

        <div class="book-button" id="2corinthiansToggleButton12">Chapter 12</div>

        <div class="book-button" id="2corinthiansToggleButton13">Chapter 13</div>

    </div>  

</section>

<section id="Galatians-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Galatians
    </header>
    
    <div class="old-testament-large-circle">
    
        <div id="galatiansPercentage" class="totalPercentage">0%</div>

            <p>of Galatians</p>

    </div>

    <script>
            $(document).ready(function(){
                $("#galatians-button").click(function(){
                    $("#new-testament").fadeOut(300);
                    $("#home-section").fadeOut(300);
                    $("#Galatians-Chapters").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });

        </script>

        <script>
            $(document).ready(function(){
                $("#back-btn-galatians").click(function(){
                    $("#Galatians-Chapters").fadeOut(300);
                    $("#new-testament").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });

    </script>

    <button id="back-btn-galatians" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="galatiansToggleButton1">Chapter 1</div>

        <div class="book-button" id="galatiansToggleButton2">Chapter 2</div>

        <div class="book-button" id="galatiansToggleButton3">Chapter 3</div>

        <div class="book-button" id="galatiansToggleButton4">Chapter 4</div>

        <div class="book-button" id="galatiansToggleButton5">Chapter 5</div>

        <div class="book-button" id="galatiansToggleButton6">Chapter 6</div>


    </div>

</section>


<section id="Ephesians-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Ephesians
    </header>

    <div class="old-testament-large-circle">
    
        <div id="ephesiansPercentage" class="totalPercentage">0%</div>

            <p>of Ephesians</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#ephesians-button").click(function(){
                $("#new-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Ephesians-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
            $(document).ready(function(){
                $("#back-btn-ephesians").click(function(){
                    $("#Ephesians-Chapters").fadeOut(300);
                    $("#new-testament").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });
        </script>
    </script>

    <button id="back-btn-ephesians" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="ephesiansToggleButton1">Chapter 1</div>

        <div class="book-button" id="ephesiansToggleButton2">Chapter 2</div>

        <div class="book-button" id="ephesiansToggleButton3">Chapter 3</div>

        <div class="book-button" id="ephesiansToggleButton4">Chapter 4</div>

        <div class="book-button" id="ephesiansToggleButton5">Chapter 5</div>

        <div class="book-button" id="ephesiansToggleButton6">Chapter 6</div>




    </div>

</section>


<section id="Philippians-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Philippians
    </header>
    
    <div class="old-testament-large-circle">
    
        <div id="philippiansPercentage" class="totalPercentage">0%</div>

            <p>of Philippians</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#philippians-button").click(function(){
                $("#new-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Philippians-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-philippians").click(function(){
                $("#Philippians-Chapters").fadeOut(300);
                $("#new-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-philippians" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="philippiansToggleButton1">Chapter 1</div>

        <div class="book-button" id="philippiansToggleButton2">Chapter 2</div>

        <div class="book-button" id="philippiansToggleButton3">Chapter 3</div>

        <div class="book-button" id="philippiansToggleButton4">Chapter 4</div>

    </div>

</section>


<section id="Colossians-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Colossians
    </header>

    <h2 class="chapter-subhead">Because they lost the password to the Apple!</h2>
    
    <div class="old-testament-large-circle">
    
        <div id="colossiansPercentage" class="totalPercentage">0%</div>

            <p>of Colossians</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#colossians-button").click(function(){
                $("#new-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Colossians-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-colossians").click(function(){
                $("#Colossians-Chapters").fadeOut(300);
                $("#new-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-colossians" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="colossiansToggleButton1">Chapter 1</div>

        <div class="book-button" id="colossiansToggleButton2">Chapter 2</div>

        <div class="book-button" id="colossiansToggleButton3">Chapter 3</div>

        <div class="book-button" id="colossiansToggleButton4">Chapter 4</div>

    </div>


</section>


<section id="1Thessalonians-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        1 Thessalonians
    </header>
    
    <div class="old-testament-large-circle">
    
        <div id="1thessaloniansPercentage" class="totalPercentage">0%</div>

            <p>of 1 Thessalonians</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#first-thessalonians-button").click(function(){
                $("#new-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#1Thessalonians-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-1thessalonians").click(function(){
                $("#1Thessalonians-Chapters").fadeOut(300);
                $("#new-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-1thessalonians" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="1thessaloniansToggleButton1">Chapter 1</div>

        <div class="book-button" id="1thessaloniansToggleButton2">Chapter 2</div>

        <div class="book-button" id="1thessaloniansToggleButton3">Chapter 3</div>

        <div class="book-button" id="1thessaloniansToggleButton4">Chapter 4</div>

        <div class="book-button" id="1thessaloniansToggleButton5">Chapter 5</div>


    </div>

</section>


<section id="2Thessalonians-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        2 Thessalonians
    </header>
    
    <div class="old-testament-large-circle">
    
        <div id="2thessaloniansPercentage" class="totalPercentage">0%</div>

            <p>of 2 Thessalonians</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#second-thessalonians-button").click(function(){
                $("#new-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#2Thessalonians-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-2thessalonians").click(function(){
                $("#2Thessalonians-Chapters").fadeOut(300);
                $("#new-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-2thessalonians" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="2thessaloniansToggleButton1">Chapter 1</div>

        <div class="book-button" id="2thessaloniansToggleButton2">Chapter 2</div>

        <div class="book-button" id="2thessaloniansToggleButton3">Chapter 3</div>

    </div>


</section>


<section id="1Timothy-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        1 Timothy
    </header>

    <div class="old-testament-large-circle">
    
        <div id="1timothyPercentage" class="totalPercentage">0%</div>

            <p>of 1 Timothy</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#first-timothy-button").click(function(){
                $("#new-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#1Timothy-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-1timothy").click(function(){
                $("#1Timothy-Chapters").fadeOut(300);
                $("#new-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-1timothy" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="1timothyToggleButton1">Chapter 1</div>

        <div class="book-button" id="1timothyToggleButton2">Chapter 2</div>

        <div class="book-button" id="1timothyToggleButton3">Chapter 3</div>

        <div class="book-button" id="1timothyToggleButton4">Chapter 4</div>

        <div class="book-button" id="1timothyToggleButton5">Chapter 5</div>

        <div class="book-button" id="1timothyToggleButton6">Chapter 6</div>



    </div>

</section>


<section id="2Timothy-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        2 Timothy
    </header>

    <div class="old-testament-large-circle">
    
        <div id="2timothyPercentage" class="totalPercentage">0%</div>

            <p>of 2 Timothy</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#second-timothy-button").click(function(){
                $("#new-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#2Timothy-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-2timothy").click(function(){
                $("#2Timothy-Chapters").fadeOut(300);
                $("#new-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });
    </script>

    <button id="back-btn-2timothy" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="2timothyToggleButton1">Chapter 1</div>

        <div class="book-button" id="2timothyToggleButton2">Chapter 2</div>

        <div class="book-button" id="2timothyToggleButton3">Chapter 3</div>

        <div class="book-button" id="2timothyToggleButton4">Chapter 4</div>



    </div>

</section>


<section id="Titus-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Titus
    </header>

    <div class="old-testament-large-circle">
    
        <div id="titusPercentage" class="totalPercentage">0%</div>

            <p>of Titus</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#titus-button").click(function(){
                $("#new-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Titus-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-titus").click(function(){
                $("#Titus-Chapters").fadeOut(300);
                $("#new-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-titus" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="titusToggleButton1">Chapter 1</div>

        <div class="book-button" id="titusToggleButton2">Chapter 2</div>

        <div class="book-button" id="titusToggleButton3">Chapter 3</div>

    </div>

</section>


<section id="Philemon-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Philemon
    </header>

    <div class="old-testament-large-circle">
    
        <div id="philemonPercentage" class="totalPercentage">0%</div>

            <p>of Philemon</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#philemon-button").click(function(){
                $("#new-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Philemon-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-philemon").click(function(){
                $("#Philemon-Chapters").fadeOut(300);
                $("#new-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-philemon" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="philemonToggleButton1">Chapter 1</div>

    </div>

</section>


<section id="Hebrews-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Hebrews
    </header>

    <div class="old-testament-large-circle">
    
        <div id="hebrewsPercentage" class="totalPercentage">0%</div>

            <p>of Hebrews</p>

    </div>


    <script>
        $(document).ready(function(){
            $("#hebrews-button").click(function(){
                $("#new-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Hebrews-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-hebrews").click(function(){
                $("#Hebrews-Chapters").fadeOut(300);
                $("#new-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>


    <button id="back-btn-hebrews" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="hebrewsToggleButton1">Chapter 1</div>

        <div class="book-button" id="hebrewsToggleButton2">Chapter 2</div>

        <div class="book-button" id="hebrewsToggleButton3">Chapter 3</div>

        <div class="book-button" id="hebrewsToggleButton4">Chapter 4</div>

        <div class="book-button" id="hebrewsToggleButton5">Chapter 5</div>

        <div class="book-button" id="hebrewsToggleButton6">Chapter 6</div>

        <div class="book-button" id="hebrewsToggleButton7">Chapter 7</div>

        <div class="book-button" id="hebrewsToggleButton8">Chapter 8</div>

        <div class="book-button" id="hebrewsToggleButton9">Chapter 9</div>

        <div class="book-button" id="hebrewsToggleButton10">Chapter 10</div>

        <div class="book-button" id="hebrewsToggleButton11">Chapter 11</div>

        <div class="book-button" id="hebrewsToggleButton12">Chapter 12</div>

        <div class="book-button" id="hebrewsToggleButton13">Chapter 13</div>

    </div>

</section>


<section id="James-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        James
    </header>

    <h2 class="chapter-subhead">Because they lost the password to the Apple!</h2>

    <div class="old-testament-large-circle">
    
        <div id="jamesPercentage" class="totalPercentage">0%</div>

            <p>of James</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#james-button").click(function(){
                $("#new-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#James-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-james").click(function(){
                $("#James-Chapters").fadeOut(300);
                $("#new-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-james" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="jamesToggleButton1">Chapter 1</div>

        <div class="book-button" id="jamesToggleButton2">Chapter 2</div>

        <div class="book-button" id="jamesToggleButton3">Chapter 3</div>

        <div class="book-button" id="jamesToggleButton4">Chapter 4</div>

        <div class="book-button" id="jamesToggleButton5">Chapter 5</div>

    </div>

</section>


<section id="1Peter-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        1 Peter
    </header>

    <div class="old-testament-large-circle">
    
        <div id="1peterPercentage" class="totalPercentage">0%</div>

            <p>of 1 Peter</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#first-peter-button").click(function(){
                $("#new-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#1Peter-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-1peter").click(function(){
                $("#1Peter-Chapters").fadeOut(300);
                $("#new-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-1peter" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="1peterToggleButton1">Chapter 1</div>

        <div class="book-button" id="1peterToggleButton2">Chapter 2</div>

        <div class="book-button" id="1peterToggleButton3">Chapter 3</div>

        <div class="book-button" id="1peterToggleButton4">Chapter 4</div>

        <div class="book-button" id="1peterToggleButton5">Chapter 5</div>

    </div>


</section>


<section id="2Peter-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        2 Peter
    </header>

    <div class="old-testament-large-circle">
    
        <div id="2peterPercentage" class="totalPercentage">0%</div>

            <p>of 2 Peter</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#second-peter-button").click(function(){
                $("#new-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#2Peter-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

        </script>

        <script>
        $(document).ready(function(){
            $("#back-btn-2peter").click(function(){
                $("#2Peter-Chapters").fadeOut(300);
                $("#new-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });
    </script>

    <button id="back-btn-2peter" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="2peterToggleButton1">Chapter 1</div>

        <div class="book-button" id="2peterToggleButton2">Chapter 2</div>

        <div class="book-button" id="2peterToggleButton3">Chapter 3</div>

    </div>

</section>


<section id="1John-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        1 John
    </header>

    <div class="old-testament-large-circle">
    
        <div id="1johnPercentage" class="totalPercentage">0%</div>

            <p>of 1 John</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#first-john-button").click(function(){
                $("#new-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#1John-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#back-btn-1john").click(function(){
                $("#1John-Chapters").fadeOut(300);
                $("#new-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });
    </script>

    <button id="back-btn-1john" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="1johnToggleButton1">Chapter 1</div>

        <div class="book-button" id="1johnToggleButton2">Chapter 2</div>

        <div class="book-button" id="1johnToggleButton3">Chapter 3</div>

        <div class="book-button" id="1johnToggleButton4">Chapter 4</div>

        <div class="book-button" id="1johnToggleButton5">Chapter 5</div>

    </div>

</section>


<section id="2John-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        2 John
    </header>

    <div class="old-testament-large-circle">
    
        <div id="2johnPercentage" class="totalPercentage">0%</div>

            <p>of 2 John</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#second-john-button").click(function(){
                $("#new-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#2John-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <script>
        $(document).ready(function(){
            $("#back-btn-2john").click(function(){
                $("#2John-Chapters").fadeOut(300);
                $("#new-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });
    </script>

    <button id="back-btn-2john" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="2johnToggleButton1">Chapter 1</div>

    </div>

</section>


<section id="3John-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        3 John
    </header>

    <div class="old-testament-large-circle">
    
        <div id="3johnPercentage" class="totalPercentage">0%</div>

            <p>of 3 John</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#third-john-button").click(function(){
                $("#new-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#3John-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#back-btn-3john").click(function(){
                $("#3John-Chapters").fadeOut(300);
                $("#new-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });

    </script>

    <button id="back-btn-3john" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="3johnToggleButton1">Chapter 1</div>

    </div>

</section>


<section id="Jude-Chapters" class="chapter-grid">

    <header class="header chapter-header">
        Jude
    </header>
    
    <div class="old-testament-large-circle">
    
        <div id="judePercentage" class="totalPercentage">0%</div>

            <p>of Jude</p>

    </div>

    <script>
        $(document).ready(function(){
            $("#jude-button").click(function(){
                $("#new-testament").fadeOut(300);
                $("#home-section").fadeOut(300);
                $("#Jude-Chapters").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });
    </script>

    <script>
        $(document).ready(function(){
            $("#back-btn-jude").click(function(){
                $("#Jude-Chapters").fadeOut(300);
                $("#new-testament").fadeIn(300);
                $('html, body').animate({scrollTop: 100}, 300);
            });
        });
    </script>

    <button id="back-btn-jude" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="judeToggleButton1">Chapter 1</div>

    </div>

</section>


<section id="Revelation-Chapters" class="chapter-grid">


    <header class="header chapter-header">
        Revelation
    </header>

    <div class="old-testament-large-circle">
    
        <div id="revelationPercentage" class="totalPercentage">0%</div>

            <p>of Revelation</p>

    </div>

    <script>
            $(document).ready(function(){
                $("#revelation-button").click(function(){
                    $("#new-testament").fadeOut(300);
                    $("#home-section").fadeOut(300);
                    $("#Revelation-Chapters").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });

        </script>

        <script>
            $(document).ready(function(){
                $("#back-btn-revelation").click(function(){
                    $("#Revelation-Chapters").fadeOut(300);
                    $("#new-testament").fadeIn(300);
                    $('html, body').animate({scrollTop: 100}, 300);
                });
            });

    </script>

    <button id="back-btn-revelation" type="button" class="back-button">Back</button>

    <div class="the-chapter-grid">

        <div class="book-button" id="revelationToggleButton1">Chapter 1</div>

        <div class="book-button" id="revelationToggleButton2">Chapter 2</div>

        <div class="book-button" id="revelationToggleButton3">Chapter 3</div>

        <div class="book-button" id="revelationToggleButton4">Chapter 4</div>

        <div class="book-button" id="revelationToggleButton5">Chapter 5</div>

        <div class="book-button" id="revelationToggleButton6">Chapter 6</div>

        <div class="book-button" id="revelationToggleButton7">Chapter 7</div>

        <div class="book-button" id="revelationToggleButton8">Chapter 8</div>

        <div class="book-button" id="revelationToggleButton9">Chapter 9</div>

        <div class="book-button" id="revelationToggleButton10">Chapter 10</div>

        <div class="book-button" id="revelationToggleButton11">Chapter 11</div>

        <div class="book-button" id="revelationToggleButton12">Chapter 12</div>

        <div class="book-button" id="revelationToggleButton13">Chapter 13</div>
        <div class="book-button" id="revelationToggleButton14">Chapter 14</div>

        <div class="book-button" id="revelationToggleButton15">Chapter 15</div>

        <div class="book-button" id="revelationToggleButton16">Chapter 16</div>

        <div class="book-button" id="revelationToggleButton17">Chapter 17</div>

        <div class="book-button" id="revelationToggleButton18">Chapter 18</div>

        <div class="book-button" id="revelationToggleButton19">Chapter 19</div>
        <div class="book-button" id="revelationToggleButton20">Chapter 20</div>

        <div class="book-button" id="revelationToggleButton21">Chapter 21</div>

        <div class="book-button" id="revelationToggleButton22">Chapter 22</div>

        </div>

</section>






        <footer>
            <div class="footer">
                <div class="footer-element">
                    <a href="logout.php">Logout</a> 
                </div>
                <div class="footer-element">
                    &copy; 2023 Bible Reading Tracker
                </div>
            </div>
        </footer>

