<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="section-title">
                    <span class="caption d-block small">{translate}Articles in{/translate}</span>
                    <h2>{$category_name}</h2>
                </div>
                {foreach from=$category_articles item=article}
                    <div class="post-entry-2 d-flex">
                        <div class="thumbnail" style="background-image: url('/assets/{$article['photo']}')"></div>
                        <div class="contents">
                            <h2>
                                <a href="/read/{$article['id']}">{$article['title']}</a>
                            </h2>
                            <p class="mb-3">{$article['summary']|strip_tags|truncate:150:"...":true}</p>
                            <div class="post-meta">
                                <span class="d-block">
                                    <a href="#">{translate}{$app_name}{/translate}</a> {translate}in{/translate} 
                                    <a href="/category/{$article['category_id']}">{translate}{$categories[$article['category_id']]}{/translate}</a>
                                </span>
                                <span class="date-read">
                                {$article['published_at']|date_format:"%A, %B %e, %Y"}
                                <span class="mx-1">&bullet;</span>
                                {assign var='alength' value=$article['summary']|strip_tags|count_characters}
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
            </div>
            <div class="col-lg-3">
                <div class="section-title">
                    <h2>Popular Posts</h2>
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