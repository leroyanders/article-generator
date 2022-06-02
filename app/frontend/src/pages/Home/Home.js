import React, {useEffect, useState, Component} from "react";
import DesktopHeader from "../../components/Headers/DesktopHeader";
import MobileHeader from "../../components/Headers/MobileHeader";
import Carousel from "../../components/Carousel/Carousel";
import Categories from "../../components/Categories/HomeList"
import Footer from "../../components/Footers/MainFooter"
import axios from 'axios';

class Home extends Component {
    render () {
        return (
            <>
                {/* Mobile header */}
                <MobileHeader></MobileHeader>
                {/* Main Header */}
                <DesktopHeader></DesktopHeader>
                {/* Carousel */}
                <Carousel></Carousel>
                {/* Categories */}
                <Categories></Categories>
                {/* Footer */}
                <Footer></Footer>
            </>
        )
    }
}

export default Home;