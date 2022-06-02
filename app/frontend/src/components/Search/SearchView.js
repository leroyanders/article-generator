import React from 'react';
import axios from 'axios';
import SearchCard from './Card'
import ReadMore from '../Article/ReadMore';

class SearchView extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            search: null,
            search_query: props.query
        }
    }

    componentWillMount(){
        axios.get(`/api/v1/search/${this.state.search_query}`).then(res => {
            const search = res.data['results'];
            // metadata
            document.title = `Search results for ${this.state.search_query}`;
            this.setState({ search });
        })
    }

    render() {    
        if (this.state.search === null) {
            console.log('SearchView is loading')
        } else {
            return (
                <div class="site-section">
                    <div class="container">
                        <div class="row">
                            <SearchCard query={this.state.search_query} articles={this.state.search.articles}></SearchCard>
                            <ReadMore count={3}></ReadMore>
                        </div>
                    </div>
                </div>
            )
        }
    }
}

export default SearchView;