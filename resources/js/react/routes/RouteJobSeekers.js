import React from "react";

import { Redirect, Switch, Route } from "react-router-dom";
import PageNotFound from "../components/PageNotFound/PageNotFound";
const RouteJobSeekers = () => {
    return (
        <>
            <Switch>
                {/* <PrivateRoute
                    exact
                    path="/dashboard"
                    component={PageJSDashboard}
                /> */}

                <Route component={PageNotFound} />
            </Switch>
        </>
    );
};

export default RouteJobSeekers;
