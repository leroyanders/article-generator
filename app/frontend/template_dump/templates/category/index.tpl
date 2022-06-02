{extends file='main/base.tpl'}

{block name='body'}
    {block name='articles_by_categories'}
      {include file='category/articles.tpl'}
    {/block}
{/block}