import React from "react";

function CarouselCard(props) {
    return (
        <div className="site-section">
            <div className="container">
                <div className="half-post-entry d-block d-lg-flex bg-light">
                    <div className="img-bg" style={{backgroundImage: `url(${props.image})`}}></div>
                    <div className="contents">
                        <span className="caption">We recommends to read</span>
                        <h2>
                            <a href={`/read/${props.id}`}>{props.title}</a>
                        </h2>
                        <p className="mb-3">{props.text.substring(0, 500)}...</p>
                        <div className="post-meta">
                            <span className="d-block">
                                <a href="#">Meranda</a> in <a href={`/category/${props.category}`}>{props.category_name}</a>
                            </span>
                            <span className="date-read">
                                <p>
                                    {new Date(props.date).toLocaleTimeString("en-US", { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute:'2-digit'})}
                                </p>
                                <p>
                                    <span className="icon-star2"></span> {props.readtime} min read
                                </p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default CarouselCard;