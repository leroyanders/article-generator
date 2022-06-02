<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 single-content">

                <p class="mb-5">
                    <img src="/assets/{$article_data.photo}" alt="Image" class="img-fluid">
                </p>
                <h1 class="mb-4">{$article_data.title}</h1>
                <div class="post-meta d-flex mb-5">
                    <div class="vcard">
                        <span class="d-block"><a href="#">{$app_name}</a> in <a href="#">{$categories[$article_data.category_id]}</a></span>
                        <span class="date-read">
                            {$article_data.published_at|date_format:"%B %e, %Y"}
                            <span class="mx-1">&bullet;</span>
                            {assign var='alength' value=$article_data['summary']|count_characters}
                            {translate}
                                {if $alength < 3000}
                                    3 min read
                                {elseif $alength > 3000}
                                    5 min read
                                {else}
                                    10 min read
                                {/if}
                            {/translate}
                        <span class="icon-star2"></span></span>
                    </div>
                </div>
                {$summary}
                <div class="pt-5">
                    <p>Categories: 
                        <a href="/category/{$article_data.category_id}">{$categories[$article_data.category_id]}</a>
                        <br>Tags: 
                        {foreach from=$addons_keywords key=k item=keyword}
                            <a href="/search/{$k}">#{$k}</a>
                        {/foreach}
                    </p>
                </div>
                <div class="pt-5">
                    <p>Share this article with friends:</p>
                    <div class="social-share-btns">
                        <a class="share-btn share-btn-twitter" href="https://twitter.com/intent/tweet?text={$article_url}" rel="nofollow" target="_blank">
                            <i class="ion-social-twitter"></i>
                            Tweet
                        </a>
                        <a class="share-btn share-btn-facebook" href="https://www.facebook.com/sharer/sharer.php?u={$article_url}" rel="nofollow" target="_blank">
                            <i class="ion-social-facebook"></i>
                            Share
                        </a>
                        <a class="share-btn share-btn-linkedin" href="https://www.linkedin.com/cws/share?url={$article_url} rel="nofollow" target="_blank">
                            <i class="ion-social-linkedin"></i>
                            Share
                        </a>
                        <a class="share-btn share-btn-reddit" href="https://www.reddit.com/submit?url={$article_url}" rel="nofollow" target="_blank">
                            <i class="ion-social-reddit"></i>
                            Share
                        </a>
                        <a class="share-btn share-btn-mail" href="mailto:?subject={$article_data.title};body={$article_url}" rel="nofollow" target="_blank" title="via email">
                            <i class="ion-paper-airplane"></i>
                            Share
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 ml-auto">
                <div class="section-title">
                    <h2>{translate}Popular Posts{/translate}</h2>
                </div>

                {counter assign=i start=1 print=false}
                {foreach from=$popular item=article}
                    <div class="trend-entry d-flex">
                        <div class="number align-self-start">0{$article@iteration}</div>
                        <div class="trend-contents">
                            <h2>
                                <a href="/read/{$article['id']}">{$article['title']}</a>
                            </h2>
                            <div class="post-meta">
                                <span class="d-block">
                                    <a href="#">{translate}{$app_name}{/translate}</a> {translate}in{/translate} 
                                    <a href="/category/{$article['category_id']}">{translate}{$categories[$article['category_id']]}{/translate}</a>
                                </span>
                                <span class="date-read">
                                {$article['published_at']|date_format:"%B %e, %Y"}
                                <span class="mx-1">&bullet;</span>
                                {assign var='alength' value=$article['summary']|count_characters}
                                {translate}
                                    {if $alength < 3000}
                                        3 min read
                                    {elseif $alength > 3000}
                                        5 min read
                                    {else}
                                        10 min read
                                    {/if}
                                {/translate}
                                <span class="icon-star2"></span></span>
                            </div>
                        </div>
                    </div>
                {/foreach}

                <p>
                    <a href="/category/popular" class="more">{translate}See All Popular{/translate}<span class="icon-keyboard_arrow_right"></span></a>
                </p>
            </div>


        </div>

    </div>
</div>