import React from 'react';
import axios from 'axios';

class ReadMore extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            articles: null
        }
    }

    componentWillMount(){
        axios.get(`/api/v1/articles/popular/${this.props.count}`).then(res => {
            const articles = res.data['articles'];

            this.setState({ articles });
        })
    }

    render() {
        if (this.state.articles === null) {
            console.log('Article is loading')
        } else {
            if(this.state.articles.length > 0){
                return (
                    <div class="col-lg-3 ml-auto">
                        <div class="section-title">
                            <h2>
                                <a>What's interessting to read?</a>
                            </h2>
                        </div>
                        {   
                            this.state.articles.map(function(article, i){
                                return (
                                    <div class="trend-entry d-flex">
                                        <div class="number align-self-start">0{i + 1}</div>
                                        <div class="trend-contents">
                                            <h2>
                                                <a href={`/read/${article.id}`}>{article.title}</a>
                                            </h2>
                                            <p className="mb-3">{article.text_content.substring(0, 200)}...</p>
                                            <div class="post-meta">
                                                <span class="d-block">
                                                    <a href="#">Meranda</a> in <a href={`/category/${article.category_id}`}>{article.category_name}</a>
                                                </span>
                                                <span class="date-read">
                                                <span class="icon-date"></span> {new Date(article.date_created).toLocaleTimeString("en-US", { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute:'2-digit'})}
                                                    <p>
                                                    <span class="icon-star2"></span> {article.readtime} min read
                                                    </p>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                )
                            })
                        }
                    </div>
                )
            }else{
                return (
                    <div class="col-lg-3 ml-auto">
                        <div class="section-title">
                            <h2>
                                <a>What's interessting to read?</a>
                            </h2>
                        </div>
                        <p>We have nothing to recommend</p>
                    </div>
                )
            }
        }
    }
}

export default ReadMore;