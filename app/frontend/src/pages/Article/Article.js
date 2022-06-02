import React, {useEffect, useState, Component} from "react";
import DesktopHeader from "../../components/Headers/DesktopHeader";
import MobileHeader from "../../components/Headers/MobileHeader";
import ArticleView from "../../components/Article/ArticleView";
import Footer from "../../components/Footers/MainFooter"
import axios from 'axios';
import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link,
    useParams
} from "react-router-dom";

function Article() {
    let { id } = useParams();

    return (
        <>
            {/* Mobile header */}
            <MobileHeader></MobileHeader>
            {/* Main Header */}
            <DesktopHeader></DesktopHeader>
            {/* ArticleView */}
            <ArticleView id={id}></ArticleView>
            {/* Footer */}
            <Footer></Footer>
        </>
    )
}

export default Article;