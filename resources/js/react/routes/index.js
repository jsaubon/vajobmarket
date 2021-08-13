import React from "react";
import {
    BrowserRouter as Router,
    Route,
    Switch,
    Redirect
} from "react-router-dom";
import { QueryClient, QueryClientProvider } from "react-query";

import "antd/dist/antd.css";
import "../../../assets/css/custom.css";

import getUserData from "../components/providers/getUserData";
import RouteJobSeekers from "./RouteJobSeekers";
import RouteBusinessOwners from "./RouteBusinessOwners";
import LandingPage from "../components/public/LandingPage";
import Content from "../components/layout/Content";

/** end private */

const queryClient = new QueryClient();
const userdata = getUserData();
export default function Routes() {
    return (
        <QueryClientProvider client={queryClient}>
            <Router>
                <Switch>
                    <Route
                        exact
                        path="/"
                        render={props => (
                            <Content>
                                <LandingPage {...props} />
                            </Content>
                        )}
                    />
                    {userdata && userdata.role == "Job Seeker" && (
                        <RouteJobSeekers />
                    )}
                    {userdata && userdata.role == "Client" && (
                        <RouteBusinessOwners />
                    )}
                </Switch>
            </Router>
        </QueryClientProvider>
    );
}
