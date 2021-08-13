import React from "react";
import { Link } from "react-router-dom";
import { Layout, Menu } from "antd";

import {
    MenuUnfoldOutlined,
    MenuFoldOutlined,
    LogoutOutlined
} from "@ant-design/icons";

export default function Header({ state, toggle }) {
    const handleLogout = () => {
        localStorage.removeItem("token");
        localStorage.removeItem("userdata");
        location.href = window.location.origin;
    };

    return (
        <Layout.Header>
            <div className="logo" />
            <Menu theme="dark" mode="horizontal" defaultSelectedKeys={["2"]}>
                {new Array(15).fill(null).map((_, index) => {
                    const key = index + 1;
                    return <Menu.Item key={key}>{`nav ${key}`}</Menu.Item>;
                })}
            </Menu>
        </Layout.Header>
        // <Layout.Header
        //     className="site-layout-background"
        //     style={{ padding: 0 }}
        // >
        //     {/* {
        //             React.createElement(state.collapsed ? MenuUnfoldOutlined : MenuFoldOutlined, {
        //                 className: 'trigger float-left',
        //                 onClick: toggle
        //             })
        //         } */}

        //     <Menu>
        //         <Menu.Item icon={<LogoutOutlined />} key="/logout">
        //             <a href="#" onClick={handleLogout}>
        //                 Logout
        //             </a>
        //         </Menu.Item>
        //     </Menu>
        // </Layout.Header>
    );
}
