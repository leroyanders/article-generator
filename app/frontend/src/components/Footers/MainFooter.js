import React from 'react';

class Footer extends React.Component {
    render() {
        return (
            <>
                <div className="site-section subscribe bg-light">
                    <div className="container">
                        <form method="post" action="/subscribe" className="row align-items-center">
                            <div className="col-md-5 mr-auto">
                                <h2>Newsletter Subcribe</h2>
                                <p>Enter your email to receive notifications of new articles!</p>
                            </div>
                            <div className="col-md-6 ml-auto">
                                <div className="d-flex">
                                    <input type="email" className="form-control" placeholder="Enter your email" />
                                    <button type="submit" className="btn btn-secondary" ><span className="icon-paper-plane"></span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div className="footer">
                    <div className="container">
                        <div className="row">
                            <div className="col-12">
                                <div className="copyright">
                                    <p>
                                        Meranda &copy;{new Date().getFullYear()} All rights reserved
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </>
        )
    }
}

export default Footer;