import React from 'react';
import { createRoot } from 'react-dom/client';
import { AppRoutes } from './modules/router.js'; 

// Tree structure
const container = document.getElementById('root');
const root = createRoot(container);

// router
export default class App extends React.Component {
  render() {
    return <AppRoutes/>;
  }
}

root.render(<App/>);