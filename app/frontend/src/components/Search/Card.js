import React from 'react'

function SearchCard(props) {
    if(props.articles.length > 0) {
        return (
            <div className="col-lg-6">
                <div className="section-title">
                    <h2>
                        { props.query.length == 0 ? <span>All articles</span> : <span>Search results for "{props.query}"</span> }
                    </h2>
                </div>
                {
                    props.articles.map(function(article){
                        return (
                            <div className="post-entry-2 d-flex">
                                <div className="thumbnail" style={{backgroundImage: `url(/${article.top_image})`}}></div>
                                <div className="contents">
                                    <h2>
                                        <a href={`/read/${article.id}`}>{article.title}</a>
                                    </h2>
                                    <p className="mb-3">{article.text_content.substring(0, 200)}...</p>
                                    <div className="post-meta">
                                        <span className="d-block">
                                            <a href="#">Meranda</a> in <a href={`/category/${article.category_id}`}>{article.category_name}</a>
                                        </span>
                                        <span className="date-read">
                                            <p>
                                                {new Date(article.date_created).toLocaleTimeString("en-US", { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute:'2-digit'})}
                                            </p>
                                            <span className="icon-star2"></span> {article.readtime} min read
                                        </span>
                                    </div>
                                </div>
                            </div>  
                        )
                    })
                }
            </div>
        )
    } else {
        return (
            <div className="col-lg-6">
                <div className="section-title">
                    <h2>
                        <a href={`/category/${props.id}`}>{props.name}</a>
                    </h2>
                </div>
                <p>Sorry, but here nothing was found</p>
            </div>
        )
    }
}

export default SearchCard;