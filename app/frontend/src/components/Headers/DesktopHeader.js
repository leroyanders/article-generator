import React from "react";
import axios from "axios";

function getCookie(name) {
    var cookieValue = null;
    if (document.cookie && document.cookie !== '') {
        var cookies = document.cookie.split(';');
        for (var i = 0; i < cookies.length; i++) {
            var cookie = jQuery.trim(cookies[i]);
            if (cookie.substring(0, name.length + 1) === (name + '=')) {
                cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                break;
            }
        }
    }
    return cookieValue;
}

var csrftoken = getCookie('csrftoken');

const CSRFToken = () => {
    return (
        <input type="hidden" name="csrfmiddlewaretoken" value={csrftoken} />
    );
};

class DesktopHeader extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            categories: [],
            search_query: props.query
        }
    }


    componentDidMount(){
        axios.get('/api/v1/categories/').then(res => {
            const categories = res.data['categories'];

            this.setState(
                {
                    categories 
                }
            );
        })
    }

    render() {
        return (
            <div className="header-top">
                <div className="container">
                    <div className="row align-items-center">
                        <div className="col-12 col-lg-6 d-flex">
                            <a href="/" className="site-logo">Meranda</a>
                            <a href="#" className="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black">
                                <span className="icon-menu h3"></span>
                            </a>
                        </div>
                        <div className="col-12 col-lg-6 ml-auto d-flex">
                            <div className="ml-md-auto top-social d-none d-lg-inline-block">
                                <a href="#" className="d-inline-block p-3"><span className="icon-facebook"></span></a>
                                <a href="#" className="d-inline-block p-3"><span className="icon-twitter"></span></a>
                                <a href="#" className="d-inline-block p-3"><span className="icon-instagram"></span></a>
                            </div>
                            <form method="get" action="/search/" className="search-form d-inline-block">
                                {<CSRFToken />}
                                <div className="d-flex">
                                    <input type="text" className="form-control" placeholder="Search..." name="q" value={this.state.search_query}/>
                                    <button type="submit" className="btn btn-secondary">
                                        <span className="icon-search"></span>
                                    </button>
                                    <select data-placeholder="Choose a Language..." className="language-toggle">
                                        <option value="EN" defaultValue>EN</option>
                                        <option value="RU">RU</option>
                                        <option value="DE">DE</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div className="col-6 d-block d-lg-none text-right"></div>
                    </div>
                </div>
                <div id="sticky-wrapper" className="sticky-wrapper" style={{height: '55px'}}>
                    <div className="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">
                        <div className="container">
                            <div className="d-flex align-items-center" style={{width: 'fit-content'}}>
                                <div className="mr-auto" style={{width: '100%'}}>
                                    <nav className="site-navigation position-relative text-right d-flex" role="navigation">
                                        <ul className="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                                            {
                                                this.state.categories.map(function(category){
                                                    return (
                                                        <li key={category.id}>
                                                            <a href={`/category/${category.id}/`} className="nav-link text-left">{category.name}</a>
                                                        </li>
                                                    )
                                                })
                                            }
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}

export default DesktopHeader;