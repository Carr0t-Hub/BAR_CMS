<?php


$result = getPublicationById($mysqli, $_GET['id']);
$title = $result['title'];
$background_image = "../../images/background/4.jpg";

ob_start();

?>


<div class="row g-5">
    <div class="col-md-10 offset-md-1">
        <div class="de-post-read">
            <div class="post-content">
                <?php

                // $result['body'] 

                //extract image from bbody img src=
                $output = preg_match_all('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $result['body'], $matches);


                //foreach each src image change the path to "../admin/functions/" . $matches['src'][0]
                foreach ($matches['src'] as $key => $value) {
                    $result['body'] = str_replace($value, "../admin/functions/" . $value, $result['body']);
                    //change the width of the image to 100%
                    $result['body'] = str_replace('width="', 'width="100%"', $result['body']);
                    //remove height
                    $result['body'] = str_replace('height="', '', $result['body']);
                }

                echo $result['body'];



                ?>
            </div>

            <div class="post-meta">
                <span>
                    <i class="fa fa-user id-color"></i>By: <a href="#"><?= $result['author'] ?></a>
                </span>
                <span>
                    <i class="fa fa-tag id-color"></i><a href="#">News</a>,
                    <a href="#">Events</a>
                </span>
            </div>

        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once("../../common/layout.php");
?>