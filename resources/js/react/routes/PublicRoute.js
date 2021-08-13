import React from "react";
import {
    BrowserRouter as Router,
    Route,
    Switch,
    Redirect
} from "react-router-dom";
import PublicLayout from "../layouts/public";
import getUserData from "../providers/getUserData";

const isLoggedIn = localStorage.getItem("token");
const userdata = getUserData();
const PublicRoute = ({ component: Component, ...rest }) => (
    <Route
        {...rest}
        render={props =>
            !isLoggedIn ? (
                <PublicLayout>
                    <Component {...props} />
                </PublicLayout>
            ) : userdata.role == "Client" ? (
                <Redirect to={{ pathname: "/dashboard" }} />
            ) : userdata.role == "Job Seeker" ? (
                <Redirect to={{ pathname: "/dashboard" }} />
            ) : (
                <Redirect to={{ pathname: "/" }} />
            )
        }
    />
);

export default PublicRoute;
