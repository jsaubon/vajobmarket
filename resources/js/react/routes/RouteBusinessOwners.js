import React from "react";
import { Redirect, Switch, Route } from "react-router-dom";
import PageNotFound from "../components/PageNotFound/PageNotFound";
const RouteBusinessOwners = () => {
    return (
        <>
            <Switch>
                {/* <Route
                    exact
                    path="/"
                    render={props => (
                        <Content>
                            <PageBODashboard {...props} />
                        </Content>
                    )}
                /> */}

                <Route component={PageNotFound} />
            </Switch>
        </>
    );
};

export default RouteBusinessOwners;
