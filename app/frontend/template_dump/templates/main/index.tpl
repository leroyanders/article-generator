{extends file='main/base.tpl'}

{block name='body'}
    {block name='carousel'}
      {include file='main/carousel.tpl'}
    {/block}

    {block name='articles_by_categories'}
      {include file='main/articles.tpl'}
    {/block}

    {block name='recent_and_top'}
      {include file='main/recent.tpl'}
    {/block}
{/block}