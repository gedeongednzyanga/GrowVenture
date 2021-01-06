<?php
    spl_autoload_register(function($class){
        require '../../models/'.$class.'.php';
    });
    $new = new News($_GET["idn"]);
    $newManager = new NewManager();
    $news = $newManager->getOneNew($new->getIdn());

    foreach ($news as $new){
        $div = "<div class='single-post'>
                    <div class='feature-img'>
                        <img class='img-fluid' src='views/assets/news_post/.$new->getImage()' alt=''
                            height='375' with='750'>
                    </div>
                        <div class='blog_details'>
                            <h2> $new->getTitle()</h2>
                            <ul class='blog-info-link mt-3 mb-4'>
                                <li><a href='#'><i class='fa fa-user'></i> Travel, Lifestyle</a></li>
                                <li><a href='#'><i class='fa fa-comments'></i> 03 Comments</a></li>
                            </ul>
                            <p class='excert'>
                                $new->getContent()
                            </p>
                            <div class='quote-wrapper'>
                                <div class='quotes'>
                                    MCSE boot camps have its supporters and its detractors. Some people do not
                                    understand why you
                                    should have to spend money on boot camp when you can get the MCSE study materials
                                    yourself at
                                    a fraction of the camp price. However, who has the willpower to actually sit through
                                    a
                                    self-imposed MCSE training.
                                </div>
                            </div>
                            <p>
                                MCSE boot camps have its supporters and its detractors. Some people do not understand
                                why you
                                should have to spend money on boot camp when you can get the MCSE study materials
                                yourself at a
                                fraction of the camp price. However, who has the willpower
                            </p>
                            <p>
                                MCSE boot camps have its supporters and its detractors. Some people do not understand
                                why you
                                should have to spend money on boot camp when you can get the MCSE study materials
                                yourself at a
                                fraction of the camp price. However, who has the willpower to actually sit through a
                                self-imposed MCSE training. who has the willpower to actually
                            </p>
                        </div>
                    </div>
        ";
        echo $div;
    }