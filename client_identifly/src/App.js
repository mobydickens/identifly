import React, { Component } from 'react';
import './App.css';
import { HashRouter, Switch, Route } from 'react-router-dom';
import Home from './components/Home';
import NewButterfly from './components/NewButterfly';
import Sightings from './components/Sightings';

class App extends Component {  

  render() {
    
    return (
      <div>
        <HashRouter>
          <Switch>
            <Route exact path="/" component={ Home }/>
            <Route path="/newbutterfly" component={ NewButterfly }/>
            <Route path="/sightings" component={ Sightings }/>
          </Switch>
        </HashRouter>
      </div>
    );
  }
}

export default App;

