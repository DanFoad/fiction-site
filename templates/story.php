<?php
    require_once("include/header.php");
?>

			<div class="story">
                <div class="story__info">
                    <img class="story__image" src="http://placehold.it/256x128" alt=""/>
                    <h2 class="story__title">Example Story</h2>
                    <h3 class="story__author">By <a href="#">ExampleUser</a></h3>
                </div>
                <div class="story__controls">
                    <div class="story__formatting">
                        <div class="story__favourite" title="Add story to favourites"><i class="fa fa-star"></i></div><!--
                     --><div class="story__commentlink" title="Add a comment"><i class="fa fa-comments"></i></div>
                     </div>
                    <div class="story__statistics">
                        <div class="story__views">12,345 views</div>
                        <div class="story__likes"><i class="fa fa-thumbs-up"></i><span class="likeCount">300</span></div>
                        <div class="story__rating"><span class="story__rating--green"></span><span class="story__rating--red"></span></div>
                        <div class="story__dislikes"><i class="fa fa-thumbs-down"></i><span class="dislikeCount">12</span></div>
                    </div>
                </div>
                <div class="story__controls--placeholder"></div>

                <div class="story__footer">
                    <div class="story__statistics">
                        <div class="story__views">12,345 views</div>
                        <div class="story__likes"><i class="fa fa-thumbs-up"></i><span class="likeCount">300</span></div>
                        <div class="story__rating"><span class="story__rating--green"></span><span class="story__rating--red"></span></div>
                        <div class="story__dislikes"><i class="fa fa-thumbs-down"></i><span class="dislikeCount">12</span></div>
                    </div>
                </div>
            </div>
            <div class="comments container">
                <h2>Comments</h2>
                <div class="comment" data-commentid="1">
                    <img class="comment__avatar" src="http://placehold.it/64x64" alt="" />
                    <h3 class="comment__username"><a href="#">ExampleUser</a></h3><i class="fa fa-reply comment__reply"></i>
                    <p class="comment__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo molestiae omnis eos perspiciatis voluptatum dolor doloribus, suscipit cum voluptatibus. Magnam minima, numquam autem vero. Corporis modi, iure architecto quam rerum.</p>
                </div>
                <hr />
                <div class="comment" data-commentid="2">
                    <img class="comment__avatar" src="http://placehold.it/64x64" alt="" />
                    <h3 class="comment__username"><a href="#">AnotherPerson</a></h3><i class="fa fa-reply comment__reply"></i>
                    <p class="comment__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet cumque minus a, iste aliquid pariatur, aut fuga, corporis perspiciatis neque nisi blanditiis, debitis. Iusto eligendi totam quos, rem fuga voluptates!</p>
                </div>
                <hr />
                <div class="comment__submit">
                    <h2>Submit a comment</h2>
                    <textarea></textarea>
                    <input type="submit" value="Submit" />
                </div>
            </div>

            <script type="text/javascript">

            	var likes = parseInt($(".likeCount").html());
                var dislikes = parseInt($(".dislikeCount").html());

                $(".story__rating--green").width(((likes / (likes + dislikes)) * 96) + "px");
                $(".story__rating--red").width(((dislikes / (likes + dislikes)) * 96) + "px");

                $(".story__commentlink").click(function() {
                    $("main").animate({
                        scrollTop: $(".comment__submit textarea").offset().top
                    }, 200);
                    $(".comment__submit textarea").focus();
                });

                $(".story__favourite").click(function() {
                    $(this).toggleClass("story__favourite--active");
                });

            </script>

<?php
    require_once("include/footer.php");
?>
