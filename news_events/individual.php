<?php

$result = getPublicationById($mysqli, $_GET['id']);
?>

<div id="background" data-bgimage="url(../images/background/4.jpg) fixed"></div>
<div id="content-absolute">



    <!-- subheader -->
    <section id="subheader" class="no-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1 mt-4 text-center">
                    <h1><?= $result['title'] ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section id="section-main" class="no-bg no-top" aria-label="section-menu">
        <div class="container">
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
        </div>
    </section>
    <!-- subheader close -->

</div>