<article class="container">

    <div class='row-fluid'>
        <div class='span12'>
            <h1>We were unable to find <?php echo (!empty($slug)) ? "'{$slug}' "  : " a news story "; ?></h1>
        </div>
    </div>
    <div class='row-fluid' style='min-height:300px;'>
        <div class='span7'>
            <p><strong>Sorry but we could not find the news story you were attempting to view.</strong></p>
            <p>Try using the search above to find what you are looking for or alternatively go back to the <a href='http://www.kent.ac.uk'>homepage</a>.</p>
        </div>
        <div class='span5'>
            <div class='well'>
                <h3>Not looking for a course?</h3>
                    <p>Maybe some of these links will be more helpful</p>
                    <ul>
                        <li><a href="http://www.kent.ac.uk">Go to the University of Kent homepage</a></li>
                        <li><a href="http://www.kent.ac.uk/applicants/">Visit the applicants site</a></li>
                        <li><a href="http://www.kent.ac.uk/maps/">View campus maps</a></li>
                        <li><a href="http://www.kent.ac.uk/contact/">Contact us</a></li>
                    </ul>
            </div>
        </div>
    </div>
</article>

<!--
    
Debug Info:
<?php
   if(isset($error)) echo $error->getCode().': '.$error->getMessage();
   if(isset($error_msg)) echo $error_msg;
?>

-->
