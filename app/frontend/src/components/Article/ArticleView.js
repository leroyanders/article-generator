import React from 'react';
import axios from 'axios';
import parse from 'html-react-parser'
import Article from './Article';

class ArticleView extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            article: null,
            article_id: props.id,
            externalData: null
        }
    }

    componentWillMount(){
        axios.get(`/api/v1/article/${this.state.article_id}`).then(res => {
            const article = res.data['data'][0];

            // metadata
            if (this.state.article === null) {
                document.title = 'Article was not found';
            }else{
                document.title = article.title;
                document.head.description = article.description;
                document.head.keywords = article.keywords
            }

            this.setState({ article });
        })
    }

    render() {
        if (this.state.article === null) {
            console.log('Article is loading')
        } else {
            if (this.state.article === null) {
                return (
                    <h1>Article was not found</h1>
                )
            }else{
                document.title = this.state.article.title;
                document.head.description = this.state.article.description;
                document.head.keywords = this.state.article.keywords
                return (
                    <Article data={this.state.article}></Article>
                )
            }
        }
    }
}

export default ArticleView;