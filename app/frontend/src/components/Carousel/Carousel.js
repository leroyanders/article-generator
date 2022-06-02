import React from "react";
import CarouselCard from "./Card";
import axios from "axios";
import Slider from "react-slick";

class Carousel extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            articles: [],
            settings: {
                dots: true,
                infinite: true,
                speed: 1000,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrow: true,
            }
        }
    }
    

    async componentDidMount(){
        const limit = 3

        axios.get(`/api/v1/articles/${limit}/`).then(res => {
            const articles = res.data['articles'];

            this.setState(
                { articles }
            );
        })
    }

    render(){
        if(this.state.articles.length > 0){
            return (
                <div className="site-section py-0">
                    <Slider className='owl-carousel hero-slide owl-style owl-loaded owl-drag' {...this.state.settings}>
                        {
                            this.state.articles.map(function(article){
                                return (
                                    <CarouselCard key={article.id} title={article.title} description={article.description} category={article.category_id} date={article.date_created} id={article.id} image={article.top_image} text={article.text_content} category_name={article.category_name} readtime={article.readtime}></CarouselCard>
                                )
                            })
                        }
                    </Slider>
                </div>
            )
        } else {
            return (
                <div className="m-5 error-message">
                    <h1>Article was not found</h1>
                    <p>The carousel will work after you add articles and categories to them</p>
                </div>
            )
        }
    }
}

export default Carousel;