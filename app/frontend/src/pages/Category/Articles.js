import React, {useEffect, useState, Component} from "react";
import DesktopHeader from "../../components/Headers/DesktopHeader";
import MobileHeader from "../../components/Headers/MobileHeader";
import CategoriesView from "../../components/Categories/CategoriesView";
import Footer from "../../components/Footers/MainFooter"
import axios from 'axios';
import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link,
    useParams
} from "react-router-dom";

function Category() {
    let { id } = useParams();

    return (
        <>
            {/* Mobile header */}
            <MobileHeader></MobileHeader>
            {/* Main Header */}
            <DesktopHeader></DesktopHeader>
            {/* ArticleView */}
            <CategoriesView id={id}></CategoriesView>
            {/* Footer */}
            <Footer></Footer>
        </>
    )
}

export default Category;