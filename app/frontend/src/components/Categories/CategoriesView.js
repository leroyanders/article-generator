import React from 'react';
import axios from 'axios';
import CategoryCard from './Card'
import ReadMore from '../Article/ReadMore';

class CategoriesView extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            category: null,
            category_id: props.id
        }
    }

    componentWillMount(){
        axios.get(`/api/v1/category/${this.state.category_id}/`).then(res => {
            const category = res.data['category'];
            // metadata
            document.title = category.name;
            this.setState({ category });
        })
    }

    render() {    
        if (this.state.category === null) {
            console.log('Category is loading')
        } else {
            return (
                <div class="site-section">
                    <div class="container">
                        <div class="row">
                            <CategoryCard id={this.state.category.id} name={"Articles of " + this.state.category.name} articles={this.state.category.articles}></CategoryCard>
                            <ReadMore count={3}></ReadMore>
                        </div>
                    </div>
                </div>
            )
        }
    }
}

export default CategoriesView;