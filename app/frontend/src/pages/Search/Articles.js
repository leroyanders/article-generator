import React, {useEffect, useState, Component} from "react";
import DesktopHeader from "../../components/Headers/DesktopHeader";
import MobileHeader from "../../components/Headers/MobileHeader";
import SearchView from "../../components/Search/SearchView";
import Footer from "../../components/Footers/MainFooter"
import axios from 'axios';
import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link,
    useParams,
    useLocation
} from "react-router-dom";

function useQuery() {
    const { search } = useLocation();
  
    return React.useMemo(() => new URLSearchParams(search), [search]);
  }

function Search() {
    let query = useQuery()

    return (
        <>
            {/* Mobile header */}
            <MobileHeader></MobileHeader>
            {/* Main Header */}
            <DesktopHeader query={query.get("q")}></DesktopHeader>
            {/* SearchView */}
            <SearchView query={query.get("q")}></SearchView>
            {/* Footer */}
            <Footer></Footer>
        </>
    )
}

export default Search;