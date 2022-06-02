import React from 'react';

function MobileMenu() {
    return (
        <div className="site-mobile-menu site-navbar-target">
            <div className="site-mobile-menu-header">
                <div className="site-mobile-menu-close mt-3">
                    <span className="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div className="site-mobile-menu-body">
                <ul className="site-nav-wrap">
                    <li>
                        <a href="/category/237" className="nav-link text-left">Men's health</a>
                    </li>
                    <li>
                        <a href="/category/238" className="nav-link text-left">Women's health</a>
                    </li>
                    <li>
                        <a href="/category/239" className="nav-link text-left">Sexual health</a>
                    </li>
                    <li>
                        <a href="/category/240" className="nav-link text-left">Travel health</a>
                    </li>
                    <li>
                        <a href="/category/241" className="nav-link text-left">Skin care</a>
                    </li>
                    <li>
                        <a href="/category/242" className="nav-link text-left">Medication info</a>
                    </li>
                </ul>
            </div>
        </div>
    )
}

export default MobileMenu;