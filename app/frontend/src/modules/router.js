import React from 'react';
import { 
    Routes, 
    Route, 
    BrowserRouter 
} from "react-router-dom";

// Pages
import Home from '../pages/Home/Home';
import Article from '../pages/Article/Article';
import Category from '../pages/Category/Articles';
import Search from '../pages/Search/Articles'

function AppRoutes() {
    return (
        <BrowserRouter>
            <Routes>
                <Route path="/" element={
                    <Home/>
                }/>
                <Route path="/read/:id" element={
                    <Article/>
                }/>
                <Route path="/category/:id" element={
                    <Category/>
                }/>
                <Route path="/search" element={
                    <Search/>
                }/>
            </Routes>
        </BrowserRouter>
    );
}

export { AppRoutes };