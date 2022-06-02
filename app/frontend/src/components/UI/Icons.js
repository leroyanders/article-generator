import React from "react";

const Icon = (props) => {
    // {`statusbar-button-container ${fondo}`}
    return (
        <i className={`uil uil-${props.name}`} style={props.style}></i>
    );
}

export default Icon;