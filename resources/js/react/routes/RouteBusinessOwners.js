import React from "react";
import { Redirect, Switch, Route } from "react-router-dom";
import PageNotFound from "../components/PageNotFound/PageNotFound";
const RouteBusinessOwners = () => {
    return (
        <>
            <Switch>
                {/* <PrivateRoute
                    exact
                    path="/dashboard"
                    component={PageBODashboard}
                /> */}

                <Route component={PageNotFound} />
            </Switch>
        </>
    );
};

export default RouteBusinessOwners;
