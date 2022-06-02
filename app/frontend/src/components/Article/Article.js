import React from 'react';
import ReadMore from './ReadMore'
import Comments from './Comments'

function Article(props) {
    if (props.data != undefined) {
        return (
            <div className="site-section">
                <div className="container">
                    <div className="row">
                        <div className="col-lg-8 single-content">
                            <p className="mb-5">
                                <img src={`/${props.data.top_image}`} alt="Image" className="img-fluid"/>
                            </p>
                            <h1 className="mb-4">{props.data.title}</h1>
                            <div className="post-meta d-flex mb-5">
                                <div className="vcard">
                                    <span className="d-block"><a href="#">Meranda</a> in <a href="#">{props.data.category_name}</a></span>
                                    <span className="date-read">
                                        {new Date(props.data.date_created).toLocaleTimeString("en-US", { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute:'2-digit'})}
                                        <span className="mx-1">|</span>
                                        <span className="icon-star2"></span> {props.data.readtime} min read
                                    </span>
                                </div>
                            </div>
                            <article dangerouslySetInnerHTML={{__html: props.data.text_content}}></article>
                            <div className="pt-5">
                                <p>
                                    Category: <a href={`/category/${props.data.category_id}`}>{props.data.category_name}</a>
                                    <br/>
                                    Tags: {
                                            props.data.keywords.split(',').map(function (keyword, i) { 
                                                return  <a key={i} href={`/search/?q=${keyword.trim()}`}>#{keyword.trim()}</a>
                                            })
                                        }
                                </p>
                            </div>
                            <div className="pt-5">
                                <p>Share this article with friends:</p>
                                <div className="social-share-btns">
                                    <a className="share-btn share-btn-twitter" href={`https://twitter.com/intent/tweet?text=${window.location.href}`} rel="nofollow" target="_blank">
                                        <i className="ion-social-twitter"></i>
                                        Tweet
                                    </a>
                                    <a className="share-btn share-btn-facebook" href={`https://www.facebook.com/sharer/sharer.php?u=${window.location.href}`} rel="nofollow" target="_blank">
                                        <i className="ion-social-facebook"></i>
                                        Share
                                    </a>
                                    <a className="share-btn share-btn-linkedin" href={`https://www.linkedin.com/cws/share?url=${window.location.href}`} rel="nofollow" target="_blank">
                                        <i className="ion-social-linkedin"></i>
                                        Share
                                    </a>
                                    <a className="share-btn share-btn-reddit" href={`https://www.reddit.com/submit?url=${window.location.href}`} rel="nofollow" target="_blank">
                                        <i className="ion-social-reddit"></i>
                                        Share
                                    </a>
                                    <a className="share-btn share-btn-mail" href="mailto:?subject={$article_data.title};body={$article_url}" rel="nofollow" target="_blank" title="via email">
                                        <i className="ion-paper-airplane"></i>
                                        Share
                                    </a>
                                </div>
                            </div>
                        </div>
                        <ReadMore count={3}></ReadMore>
                    </div>
                    <Comments></Comments>
                </div>
            </div>
        )
    } else {
        return (
            <div className="m-5 error-message">
                <h1>Article was not found</h1>
                <p>We're sorry, but probably your url is incorrect, try again</p>
            </div>
        )
    }
}

export default Article;