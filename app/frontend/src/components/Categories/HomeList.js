import React from 'react';
import axios from 'axios';
import CategoryCard from './Card'

class Categories extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            categories: []
        }
    }

    componentDidMount(){
        const limit = 3;
        axios.get(`/api/v1/articles/feed/${limit}/`).then(res => {
            const categories = res.data['categories'];
            this.setState({ categories });
        })
    }

    render() {
        return (
            <div className="site-section">
                <div className="container">
                    <div className="row">
                        {
                            this.state.categories.map(function(category){
                                return (
                                    <CategoryCard name={category.name} id={category.id} articles={category.articles}></CategoryCard>
                                )
                            }
                        )}
                    </div>
                </div>
            </div>
        )
    }
}

export default Categories;