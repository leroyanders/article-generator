<div class="site-section py-0">
    <div class="owl-carousel hero-slide owl-style">
        {foreach from=$carousel_items item=carousel_item}
            <div class="site-section">
                <div class="container">
                    <div class="half-post-entry d-block d-lg-flex bg-light">
                        <div class="img-bg" style="background-image: url('/assets/{$carousel_item['photo']}')"></div>
                        <div class="contents">
                            <span class="caption">Рекоммендуем к прочтению</span>
                            <h2>
                                <a href="/read/{$carousel_item['id']}">{$carousel_item['title']}</a>
                            </h2>
                            <p class="mb-3">{$carousel_item['summary']|truncate:150:"...":true}</p>
                            <div class="post-meta">
                                <span class="d-block">
                                    <a href="#">{translate}{$app_name}{/translate}</a> {translate}in{/translate} 
                                    <a href="/category/{$carousel_item['category_id']}">{translate}{$categories[$carousel_item['category_id']]}{/translate}</a>
                                </span>
                                <span class="date-read">
                                {$carousel_item['published_at']|date_format:"%A, %B %e, %Y"}
                                <span class="mx-1">&bullet;</span>
                                {assign var='length' value=$carousel_item['summary']|count_characters}
                                {translate}
                                    {if $length < 3000}
                                        3 min read
                                    {elseif $length > 3000}
                                        5 min read
                                    {else}
                                        10 min read
                                    {/if}
                                {/translate}
                                <span class="icon-star2"></span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {/foreach}
    </div>
</div>