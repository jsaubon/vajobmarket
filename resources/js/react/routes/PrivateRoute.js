import React from "react";
import {
    BrowserRouter as Router,
    Route,
    Switch,
    Redirect
} from "react-router-dom";
import PrivateAdminsLayout from "../layouts/private/admins/Content";
import PrivateMembersLayout from "../layouts/private/members/Content";
import getUserData from "../providers/getUserData";
const isLoggedIn = localStorage.getItem("token");
const userdata = getUserData();
const PrivateRoute = ({ component: Component, ...rest }) => (
    <Route
        {...rest}
        render={props =>
            isLoggedIn ? (
                userdata.role == "Admin" ? (
                    <PrivateAdminsLayout>
                        <Component {...props} />
                    </PrivateAdminsLayout>
                ) : (
                    <PrivateMembersLayout>
                        <Component {...props} />
                    </PrivateMembersLayout>
                )
            ) : userdata.role == "Admin" ? (
                <Redirect to={{ pathname: "/ifauth/login" }} />
            ) : (
                <Redirect to={{ pathname: "/ifauth/login" }} />
            )
        }
    />
);

export default PrivateRoute;
