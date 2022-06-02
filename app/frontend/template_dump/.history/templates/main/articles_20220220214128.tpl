<div class="site-section">
    <div class="container">
        <div class="row">
            {foreach from=$articles item=artcile_item}
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>{$artcile_item['name']}</h2>
                    </div>
                    {foreach from=$artcile_item['articles'] item=article}
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
            {/foreach}
        </div>
    </div>
</div>