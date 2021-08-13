import React from "react";
import { Link, useHistory } from "react-router-dom";
import { Layout, Menu } from "antd";

import Header from "./Header";
import Footer from "./Footer";

export default function Content(props) {
    const history = useHistory();

    const [state, setState] = React.useState({ collapsed: false });

    const toggle = () => setState({ collapsed: !state.collapsed });

    const signOut = e => {
        if (e) {
            e.preventDefault();
        }
        localStorage.removeItem("token");
        localStorage.removeItem("userdata");
        location.href = window.location.origin;
    };

    return (
        // <Layout>
        //     <Layout className="site-layout">
        //         <Header />
        //         {/* <Header state={state} toggle={toggle} /> */}

        //         <Footer />
        //     </Layout>
        // </Layout>
        <Layout className="layout">
            <Header />
            <Layout.Content style={{ padding: "0 50px" }}>
                <div className="site-layout-content">{props.children}</div>
            </Layout.Content>
            <Footer />
        </Layout>
    );
}
